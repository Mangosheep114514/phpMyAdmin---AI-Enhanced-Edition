<?php
// 直接测试AI Generate功能
define('PHPMYADMIN', true);

echo "<h1>🔧 直接AI测试工具</h1>";
echo "<style>
body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
.result { background: #f8f9fa; border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px; }
.success { border-color: #28a745; background: #d4edda; }
.error { border-color: #dc3545; background: #f8d7da; }
.info { border-color: #17a2b8; background: #d1ecf1; }
pre { background: #f1f3f4; padding: 10px; border-radius: 5px; overflow-x: auto; }
button { background: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px; }
</style>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'test_api') {
        echo "<div class='result info'><h3>🧪 测试API连接</h3>";
        
        try {
            require_once __DIR__ . '/libraries/api_config.php';
            
            $config = getCurrentApiConfig();
            echo "✅ API配置加载成功<br>";
            echo "Provider: " . $config['provider'] . "<br>";
            echo "Model: " . $config['model'] . "<br>";
            
            $promptTemplates = getAiPromptTemplate('测试表');
            $data = createApiRequest($promptTemplates['user'], $promptTemplates['system']);
            
            echo "✅ 请求数据准备完成<br>";
            
            $content = sendApiRequest($data);
            
            if ($content) {
                echo "✅ API调用成功<br>";
                echo "响应长度: " . strlen($content) . " 字符<br>";
                echo "<strong>响应内容:</strong><br>";
                echo "<pre>" . htmlspecialchars(substr($content, 0, 500)) . "...</pre>";
            } else {
                echo "❌ API返回空内容";
            }
            
        } catch (Exception $e) {
            echo "❌ API测试失败: " . $e->getMessage();
        }
        echo "</div>";
        
    } elseif ($action === 'test_controller') {
        echo "<div class='result info'><h3>🎛️ 测试Controller逻辑</h3>";
        
        // 模拟AJAX请求
        $_POST['action'] = 'generate_ai_sql';
        $_POST['ai_prompt'] = '请设计一个学生成绩表';
        $_POST['db'] = 'test';
        $_POST['ajax_request'] = '1';
        $_POST['debug'] = '1';
        $_SERVER['HTTP_X_REQUESTED_WITH'] = 'XMLHttpRequest';
        
        echo "模拟POST数据:<br>";
        echo "<pre>" . print_r($_POST, true) . "</pre>";
        
        try {
            // 直接调用我们修复的逻辑
            $userPrompt = trim($_POST['ai_prompt']);
            $aiError = '';
            $aiSuccess = '';
            $aiGeneratedSql = '';
            $aiTablePreview = null;
            
            if (!empty($userPrompt)) {
                require_once __DIR__ . '/libraries/api_config.php';
                
                $promptTemplates = getAiPromptTemplate($userPrompt);
                $data = createApiRequest($promptTemplates['user'], $promptTemplates['system']);
                $content = sendApiRequest($data);
                
                if ($content) {
                    $aiGeneratedSql = trim($content);
                    $aiGeneratedSql = preg_replace('/^```sql\s*/i', '', $aiGeneratedSql);
                    $aiGeneratedSql = preg_replace('/^```\s*/m', '', $aiGeneratedSql);
                    $aiGeneratedSql = preg_replace('/```\s*$/m', '', $aiGeneratedSql);
                    $aiGeneratedSql = trim($aiGeneratedSql);
                    
                    if (stripos($aiGeneratedSql, 'CREATE TABLE') !== false) {
                        $aiSuccess = 'AI SQL generation successful!';
                    } else {
                        $aiError = 'Generated content is not a valid CREATE TABLE statement';
                    }
                } else {
                    $aiError = 'AI API returned empty response';
                }
            } else {
                $aiError = 'Please enter a description for the table structure';
            }
            
            // 构建响应
            $responseData = [];
            if ($aiError) {
                $responseData['success'] = false;
                $responseData['error'] = $aiError;
            } else {
                $responseData['success'] = true;
                $responseData['ai_generated_sql'] = $aiGeneratedSql;
                $responseData['ai_success'] = $aiSuccess;
                $responseData['user_prompt'] = $userPrompt;
            }
            
            echo "✅ Controller逻辑执行完成<br>";
            echo "<strong>响应数据:</strong><br>";
            echo "<pre>" . json_encode($responseData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "</pre>";
            
        } catch (Exception $e) {
            echo "❌ Controller测试失败: " . $e->getMessage();
        }
        echo "</div>";
        
    } elseif ($action === 'test_real_ajax') {
        echo "<div class='result info'><h3>📡 测试真实AJAX请求</h3>";
        echo "<p>点击下面的按钮测试真实的AJAX请求...</p>";
        echo '<button onclick="testRealAjax()">发送AJAX请求</button>';
        echo '<div id="ajax-result"></div>';
        
        echo '<script>
        function testRealAjax() {
            const formData = new FormData();
            formData.append("action", "generate_ai_sql");
            formData.append("ai_prompt", "请设计一个学生成绩表");
            formData.append("db", "test");
            formData.append("ajax_request", "1");
            formData.append("debug", "1");
            
                         fetch("ai_generate.php", {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "Accept": "application/json"
                },
                body: formData
            })
            .then(response => {
                console.log("Status:", response.status);
                console.log("Content-Type:", response.headers.get("Content-Type"));
                return response.text();
            })
            .then(text => {
                console.log("Raw response:", text);
                document.getElementById("ajax-result").innerHTML = 
                    "<h4>AJAX响应结果:</h4>" +
                    "<p>Status: " + (text.includes("success") ? "✅" : "❌") + "</p>" +
                    "<pre>" + text + "</pre>";
                    
                try {
                    const data = JSON.parse(text);
                    console.log("Parsed JSON:", data);
                } catch (e) {
                    console.error("JSON parse error:", e);
                }
            })
            .catch(error => {
                console.error("AJAX error:", error);
                document.getElementById("ajax-result").innerHTML = 
                    "<h4>AJAX错误:</h4><p>" + error.message + "</p>";
            });
        }
        </script>';
        echo "</div>";
    }
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['action'])) {
    echo "<div class='result'>";
    echo "<h3>🔍 选择测试类型</h3>";
    echo "<form method='POST'>";
    echo "<button type='submit' name='action' value='test_api'>1. 测试API连接</button><br><br>";
    echo "<button type='submit' name='action' value='test_controller'>2. 测试Controller逻辑</button><br><br>";
    echo "<button type='submit' name='action' value='test_real_ajax'>3. 测试真实AJAX请求</button><br><br>";
    echo "</form>";
    echo "</div>";
    
    echo "<div class='result info'>";
    echo "<h3>📋 测试说明</h3>";
    echo "<ul>";
    echo "<li><strong>测试API连接:</strong> 验证API配置和网络连接是否正常</li>";
    echo "<li><strong>测试Controller逻辑:</strong> 验证我们修复的业务逻辑是否正确</li>";
    echo "<li><strong>测试真实AJAX请求:</strong> 验证完整的AJAX通信流程</li>";
    echo "</ul>";
    echo "</div>";
}
?> 