<?php
// API 提供商配置
define('API_PROVIDER', 'openai'); // 可选值: 'deepseek', 'aliyun', 'openai'

// DeepSeek API 配置
define('DEEPSEEK_API_KEY', 'sk-');
define('DEEPSEEK_API_URL', 'https://api.deepseek.com/chat/completions');
define('DEEPSEEK_MODEL', 'deepseek-reasoner');

// 阿里云 API 配置
define('ALIYUN_API_KEY', 'sk-');
define('ALIYUN_API_URL', 'https://dashscope.aliyuncs.com/compatible-mode/v1/chat/completions');
//define('ALIYUN_MODEL', 'deepseek-r1');
define('ALIYUN_MODEL', 'qwen-plus');

// OpenAI API 配置
define('OPENAI_API_KEY', 'sk--');
define('OPENAI_API_URL', 'https://api.openai.com/v1/chat/completions');
//https://api.openai.com/v1/chat/completions 


define('OPENAI_MODEL', 'o3-mini');



// API 通用配置
define('API_DEFAULT_TEMPERATURE', 1.3);
define('API_DEFAULT_MAX_TOKENS', 4000);

// 获取当前使用的 API 配置
function getCurrentApiConfig() {
    switch (API_PROVIDER) {
        case 'aliyun':
            return [
                'api_key' => ALIYUN_API_KEY,
                'api_url' => ALIYUN_API_URL,
                'model' => ALIYUN_MODEL
            ];
        case 'openai':
            return [
                'api_key' => OPENAI_API_KEY,
                'api_url' => OPENAI_API_URL,
                'model' => OPENAI_MODEL
            ];
        case 'deepseek':
        default:
            return [
                'api_key' => DEEPSEEK_API_KEY,
                'api_url' => DEEPSEEK_API_URL,
                'model' => DEEPSEEK_MODEL
            ];
    }
}

// API 请求通用设置
function getDefaultApiHeaders($api_key = null) {
    if ($api_key === null) {
        $config = getCurrentApiConfig();
        $api_key = $config['api_key'];
    }
    
    return [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ];
}

// CURL 通用设置
function setupDefaultCurlOptions($ch, $data, $headers) {
    // 确保使用正确的模型
    $config = getCurrentApiConfig();
    $data['model'] = $config['model'];
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    // 阿里云特定设置
    if (API_PROVIDER === 'aliyun') {
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    }
    
    return $ch;
}

// 通用 API 响应处理
function handleApiResponse($response, $error_message = "API请求失败") {
    if (!$response) {
        error_log($error_message);
        return null;
    }
    
    $result = json_decode($response, true);
    if (!isset($result['choices'][0]['message']['content'])) {
        error_log("API响应格式错误: " . print_r($result, true));
        return null;
    }
    
    return $result['choices'][0]['message']['content'];
}

// 创建一个新的 API 请求
function createApiRequest($prompt, $system_prompt = null) {
    $config = getCurrentApiConfig();
    
    $messages = [];
    if ($system_prompt) {
        $messages[] = [
            'role' => 'system',
            'content' => $system_prompt
        ];
    }
    $messages[] = [
        'role' => 'user',
        'content' => $prompt
    ];
    
    return [
        'model' => $config['model'],
        'messages' => $messages,
        'temperature' => API_DEFAULT_TEMPERATURE,
        'max_tokens' => API_DEFAULT_MAX_TOKENS
    ];
}

// 发送 API 请求
function sendApiRequest($data) {
    $config = getCurrentApiConfig();
    $ch = curl_init($config['api_url']);
    $headers = getDefaultApiHeaders();
    $ch = setupDefaultCurlOptions($ch, $data, $headers);
    
    try {
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            throw new Exception('Curl error: ' . curl_error($ch));
        }
        return handleApiResponse($response);
    } catch (Exception $e) {
        error_log("API请求错误: " . $e->getMessage());
        return null;
    } finally {
        curl_close($ch);
    }
}
?> 