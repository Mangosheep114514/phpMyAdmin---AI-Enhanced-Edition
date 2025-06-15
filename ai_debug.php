<?php
/**
 * AI API 调试页面
 * 用于诊断和修复AI生成SQL时的API问题
 */

// 设置错误报告
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 页面标题
$page_title = "AI API 调试工具";

// 检查API配置文件
$config_files = [
    'libraries/api_config.php' => '主API配置文件',
    'includes/api_config.php' => '任意门API配置文件',
    'api_config.php' => '根目录API配置文件'
];

$available_configs = [];
foreach ($config_files as $file => $description) {
    if (file_exists($file)) {
        $available_configs[$file] = $description;
    }
}

// 处理测试请求
$test_result = '';
$test_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_api'])) {
    $config_file = $_POST['config_file'] ?? '';
    $test_prompt = $_POST['test_prompt'] ?? '创建一个简单的用户表';
    
    if ($config_file && file_exists($config_file)) {
        try {
            require_once $config_file;
            
            // 测试API配置
            $config = getCurrentApiConfig();
            $templates = getAiPromptTemplate($test_prompt);
            $data = createApiRequest($templates['user'], $templates['system']);
            
            // 发送请求
            $content = sendApiRequest($data);
            
            if ($content) {
                $test_result = $content;
            } else {
                $test_error = "API返回为空";
            }
            
        } catch (Exception $e) {
            $test_error = $e->getMessage();
        }
    } else {
        $test_error = "配置文件不存在或未选择";
    }
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-200">
    <div class="container mx-auto p-6">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h1 class="card-title text-3xl mb-6">
                    🔧 <?php echo $page_title; ?>
                </h1>
                
                <!-- 配置文件检查 -->
                <div class="alert alert-info mb-6">
                    <div>
                        <h3 class="font-bold">配置文件检查</h3>
                        <div class="mt-2">
                            <?php if (empty($available_configs)): ?>
                                <div class="alert alert-error">
                                    <span>❌ 未找到任何API配置文件！</span>
                                </div>
                            <?php else: ?>
                                <?php foreach ($available_configs as $file => $description): ?>
                                    <div class="badge badge-success mr-2 mb-2">
                                        ✅ <?php echo $description; ?> (<?php echo $file; ?>)
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- API测试表单 -->
                <?php if (!empty($available_configs)): ?>
                <form method="post" class="space-y-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">选择配置文件</span>
                        </label>
                        <select name="config_file" class="select select-bordered" required>
                            <option value="">请选择配置文件</option>
                            <?php foreach ($available_configs as $file => $description): ?>
                                <option value="<?php echo htmlspecialchars($file); ?>" 
                                        <?php echo (isset($_POST['config_file']) && $_POST['config_file'] === $file) ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($description); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">测试提示词</span>
                        </label>
                        <textarea name="test_prompt" class="textarea textarea-bordered" rows="3" 
                                  placeholder="输入要测试的提示词，例如：创建一个用户表"><?php echo htmlspecialchars($_POST['test_prompt'] ?? '创建一个简单的用户表'); ?></textarea>
                    </div>
                    
                    <button type="submit" name="test_api" class="btn btn-primary">
                        🧪 测试API连接
                    </button>
                </form>
                
                <!-- 测试结果 -->
                <?php if ($test_result): ?>
                <div class="alert alert-success mt-6">
                    <div>
                        <h3 class="font-bold">✅ API测试成功！</h3>
                        <div class="mt-2">
                            <div class="mockup-code">
                                <pre><code><?php echo htmlspecialchars($test_result); ?></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if ($test_error): ?>
                <div class="alert alert-error mt-6">
                    <div>
                        <h3 class="font-bold">❌ API测试失败</h3>
                        <p class="mt-2"><?php echo htmlspecialchars($test_error); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php endif; ?>
                
                <!-- 常见问题解决方案 -->
                <div class="divider">常见问题解决方案</div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="card bg-base-200">
                        <div class="card-body">
                            <h3 class="card-title text-lg">🔑 API密钥问题</h3>
                            <ul class="list-disc list-inside space-y-1 text-sm">
                                <li>检查API密钥是否正确</li>
                                <li>确认API密钥有足够的额度</li>
                                <li>验证API密钥权限设置</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card bg-base-200">
                        <div class="card-body">
                            <h3 class="card-title text-lg">🌐 网络连接问题</h3>
                            <ul class="list-disc list-inside space-y-1 text-sm">
                                <li>检查服务器网络连接</li>
                                <li>确认防火墙设置</li>
                                <li>验证SSL证书配置</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card bg-base-200">
                        <div class="card-body">
                            <h3 class="card-title text-lg">⚙️ 配置文件问题</h3>
                            <ul class="list-disc list-inside space-y-1 text-sm">
                                <li>确认配置文件路径正确</li>
                                <li>检查API URL拼写</li>
                                <li>验证模型名称正确</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card bg-base-200">
                        <div class="card-body">
                            <h3 class="card-title text-lg">🐛 错误代码说明</h3>
                            <ul class="list-disc list-inside space-y-1 text-sm">
                                <li>401: API密钥无效</li>
                                <li>403: 权限不足</li>
                                <li>429: 请求频率过高</li>
                                <li>500: 服务器内部错误</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- 配置信息 -->
                <div class="divider">当前配置信息</div>
                
                <?php if (!empty($available_configs)): ?>
                    <?php foreach ($available_configs as $file => $description): ?>
                        <div class="collapse collapse-arrow bg-base-200 mb-2">
                            <input type="checkbox" />
                            <div class="collapse-title text-lg font-medium">
                                📄 <?php echo $description; ?>
                            </div>
                            <div class="collapse-content">
                                <div class="mockup-code">
                                    <pre><code><?php echo htmlspecialchars(file_get_contents($file)); ?></code></pre>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html> 