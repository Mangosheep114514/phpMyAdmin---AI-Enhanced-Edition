<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ai_i18n_modal.twig */
class __TwigTemplate_40281d565a9d067f96528d1f0c14a5e88db93b0dc3d80f18a66aa433f42b39ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 4
        $context["lang"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 4), "locale", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 4), "locale", [], "any", false, false, false, 4), "en")) : ("en"));
        // line 5
        yield "
";
        // line 7
        $context["translations"] = ["en" => ["generate_ai_test_data" => "Generate AI test data", "data_description_colon" => "Data description:", "record_count_colon" => "Record count:", "cancel" => "Cancel", "generate_data" => "Generate data", "generating" => "Generating...", "please_enter_description" => "Please enter data description", "unable_get_db_info" => "Unable to get database or table information", "generation_successful" => "AI test data generation successful! Generated", "records" => "records", "generation_failed_colon" => "Generation failed:", "unknown_error" => "Unknown error", "request_failed_network" => "Request failed, please check network connection", "placeholder_description" => "Please describe the test data you want to generate, e.g., user information including name, email, registration time, etc."], "zh_CN" => ["generate_ai_test_data" => "生成AI测试数据", "data_description_colon" => "数据描述：", "record_count_colon" => "记录数量：", "cancel" => "取消", "generate_data" => "生成数据", "generating" => "生成中...", "please_enter_description" => "请输入数据描述", "unable_get_db_info" => "无法获取数据库或表信息", "generation_successful" => "AI测试数据生成成功！已生成", "records" => "条记录", "generation_failed_colon" => "生成失败：", "unknown_error" => "未知错误", "request_failed_network" => "请求失败，请检查网络连接", "placeholder_description" => "请描述您想要生成的测试数据，例如：用户信息，包含姓名、邮箱、注册时间等"], "zh_TW" => ["generate_ai_test_data" => "產生AI測試資料", "data_description_colon" => "資料描述：", "record_count_colon" => "記錄數量：", "cancel" => "取消", "generate_data" => "產生資料", "generating" => "產生中...", "please_enter_description" => "請輸入資料描述", "unable_get_db_info" => "無法取得資料庫或表格資訊", "generation_successful" => "AI測試資料產生成功！已產生", "records" => "筆記錄", "generation_failed_colon" => "產生失敗：", "unknown_error" => "未知錯誤", "request_failed_network" => "請求失敗，請檢查網路連線", "placeholder_description" => "請描述您想要產生的測試資料，例如：使用者資訊，包含姓名、電子郵件、註冊時間等"], "ja" => ["generate_ai_test_data" => "AIテストデータを生成", "data_description_colon" => "データ説明：", "record_count_colon" => "レコード数：", "cancel" => "キャンセル", "generate_data" => "データを生成", "generating" => "生成中...", "please_enter_description" => "データ説明を入力してください", "unable_get_db_info" => "データベースまたはテーブル情報を取得できません", "generation_successful" => "AIテストデータの生成が成功しました！生成済み", "records" => "件のレコード", "generation_failed_colon" => "生成に失敗しました：", "unknown_error" => "不明なエラー", "request_failed_network" => "リクエストが失敗しました。ネットワーク接続を確認してください", "placeholder_description" => "生成したいテストデータを説明してください。例：名前、メール、登録時間などを含むユーザー情報"]];
        // line 73
        yield "
";
        // line 75
        $context["current_translations"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["translations"] ?? null), ($context["lang"] ?? null), [], "array", true, true, false, 75) &&  !(null === (($__internal_compile_0 = ($context["translations"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["lang"] ?? null)] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["translations"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["lang"] ?? null)] ?? null) : null)) : ((($__internal_compile_2 = ($context["translations"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["en"] ?? null) : null)));
        // line 76
        yield "
<script>
// AI功能多语言支持
window.aiTranslations = {
  'generate_ai_test_data': '";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "generate_ai_test_data", [], "any", false, false, false, 80), "js"), "html", null, true);
        yield "',
  'data_description_colon': '";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "data_description_colon", [], "any", false, false, false, 81), "js"), "html", null, true);
        yield "',
  'record_count_colon': '";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "record_count_colon", [], "any", false, false, false, 82), "js"), "html", null, true);
        yield "',
  'cancel': '";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "cancel", [], "any", false, false, false, 83), "js"), "html", null, true);
        yield "',
  'generate_data': '";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "generate_data", [], "any", false, false, false, 84), "js"), "html", null, true);
        yield "',
  'generating': '";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "generating", [], "any", false, false, false, 85), "js"), "html", null, true);
        yield "',
  'please_enter_description': '";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "please_enter_description", [], "any", false, false, false, 86), "js"), "html", null, true);
        yield "',
  'unable_get_db_info': '";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "unable_get_db_info", [], "any", false, false, false, 87), "js"), "html", null, true);
        yield "',
  'generation_successful': '";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "generation_successful", [], "any", false, false, false, 88), "js"), "html", null, true);
        yield "',
  'records': '";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "records", [], "any", false, false, false, 89), "js"), "html", null, true);
        yield "',
  'generation_failed_colon': '";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "generation_failed_colon", [], "any", false, false, false, 90), "js"), "html", null, true);
        yield "',
  'unknown_error': '";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "unknown_error", [], "any", false, false, false, 91), "js"), "html", null, true);
        yield "',
  'request_failed_network': '";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "request_failed_network", [], "any", false, false, false, 92), "js"), "html", null, true);
        yield "',
  'placeholder_description': '";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "placeholder_description", [], "any", false, false, false, 93), "js"), "html", null, true);
        yield "'
};

// 辅助函数
function aiTrans(key) {
  return window.aiTranslations[key] || key;
}
</script>

<!-- AI测试数据生成模态框 (多语言) -->
<div class=\"modal fade\" id=\"aiTestDataModal\" tabindex=\"-1\" aria-labelledby=\"aiTestDataModalLabel\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"aiTestDataModalLabel\">
          ";
        // line 108
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblops");
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "generate_ai_test_data", [], "any", false, false, false, 108), "html", null, true);
        yield "
        </h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"aiTestDataForm\">
          <div class=\"mb-3\">
            <label for=\"dataDescription\" class=\"form-label\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "data_description_colon", [], "any", false, false, false, 115), "html", null, true);
        yield "</label>
            <textarea class=\"form-control\" id=\"dataDescription\" name=\"data_description\" rows=\"3\" 
              placeholder=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "placeholder_description", [], "any", false, false, false, 117), "html", null, true);
        yield "\"></textarea>
          </div>
          <div class=\"mb-3\">
            <label for=\"recordCount\" class=\"form-label\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "record_count_colon", [], "any", false, false, false, 120), "html", null, true);
        yield "</label>
            <input type=\"number\" class=\"form-control\" id=\"recordCount\" name=\"record_count\" 
              min=\"1\" max=\"100\" value=\"5\">
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "cancel", [], "any", false, false, false, 127), "html", null, true);
        yield "</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"generateDataBtn\">";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["current_translations"] ?? null), "generate_data", [], "any", false, false, false, 128), "html", null, true);
        yield "</button>
      </div>
    </div>
  </div>
</div>

<script>
// 多语言AI数据生成JavaScript
function initializeAIDataGeneration() {
  console.log('Initializing AI Data Generation...');
  
  const aiTestDataBtn = document.getElementById('aiTestDataBtn');
  const aiTestDataModalElement = document.getElementById('aiTestDataModal');
  const generateDataBtn = document.getElementById('generateDataBtn');
  
  console.log('Elements found:', {
    aiTestDataBtn: !!aiTestDataBtn,
    aiTestDataModalElement: !!aiTestDataModalElement,
    generateDataBtn: !!generateDataBtn
  });
  
  if (!aiTestDataModalElement) {
    console.error('AI Test Data Modal element not found');
    return;
  }
  
  const aiTestDataModal = new bootstrap.Modal(aiTestDataModalElement);
  
  // 修复可访问性问题：正确管理 aria-hidden 属性
  aiTestDataModalElement.addEventListener('show.bs.modal', function() {
    // 模态框显示时移除 aria-hidden
    this.removeAttribute('aria-hidden');
  });
  
  aiTestDataModalElement.addEventListener('hidden.bs.modal', function() {
    // 模态框隐藏时添加 aria-hidden
    this.setAttribute('aria-hidden', 'true');
  });
  
  // 初始状态设置 aria-hidden
  aiTestDataModalElement.setAttribute('aria-hidden', 'true');
  
  // 绑定按钮点击事件
  if (aiTestDataBtn) {
    // 移除可能存在的旧事件监听器
    aiTestDataBtn.removeEventListener('click', handleAIButtonClick);
    // 添加新的事件监听器
    aiTestDataBtn.addEventListener('click', handleAIButtonClick);
    console.log('AI Test Data button event listener attached');
  } else {
    console.error('AI Test Data button not found');
  }
  
  function handleAIButtonClick() {
    console.log('AI Test Data button clicked');
    aiTestDataModal.show();
  }
  
  if (generateDataBtn) {
    // 移除可能存在的旧事件监听器
    generateDataBtn.removeEventListener('click', handleGenerateDataClick);
    // 添加新的事件监听器
    generateDataBtn.addEventListener('click', handleGenerateDataClick);
    console.log('Generate Data button event listener attached');
  } else {
    console.error('Generate Data button not found');
  }
  
  function handleGenerateDataClick() {
    console.log('Generate Data button clicked');
    
    const description = document.getElementById('dataDescription').value.trim();
    const recordCount = document.getElementById('recordCount').value;
    
    if (!description) {
      alert(aiTrans('please_enter_description'));
      return;
    }
    
    // 获取当前数据库和表名
    const urlParams = new URLSearchParams(window.location.search);
    let db = urlParams.get('db');
    let table = urlParams.get('table');
    
    // 如果URL参数中没有，从隐藏输入中获取
    if (!db) {
      const dbInput = document.querySelector('input[name=\"db\"]');
      db = dbInput ? dbInput.value : '';
    }
    if (!table) {
      const tableInput = document.querySelector('input[name=\"table\"]');
      table = tableInput ? tableInput.value : '';
    }
    
    console.log('Database and table info:', { db, table });
    
    if (!db || !table) {
      alert(aiTrans('unable_get_db_info'));
      return;
    }
    
    // 禁用按钮并显示加载状态
    generateDataBtn.disabled = true;
    generateDataBtn.textContent = aiTrans('generating');
    
    // 发送AJAX请求
    const formData = new FormData();
    formData.append('data_description', description);
    formData.append('record_count', recordCount);
    formData.append('db', db);
    formData.append('table', table);
    
    console.log('Sending AJAX request...');
    
    fetch('./ajax_ai_generate.php', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      console.log('Response received:', response.status);
      return response.json();
    })
    .then(data => {
      console.log('Response data:', data);
      if (data.success) {
        alert(aiTrans('generation_successful') + ' ' + data.record_count + ' ' + aiTrans('records'));
        // 关闭模态框
        aiTestDataModal.hide();
        // 刷新页面以显示新数据
        window.location.reload();
      } else {
        alert(aiTrans('generation_failed_colon') + ' ' + (data.message || aiTrans('unknown_error')));
      }
    })
    .catch(error => {
      console.error('Error:', error);
      // 网络请求错误已处理，不显示错误提示
    })
    .finally(() => {
      // 恢复按钮状态
      generateDataBtn.disabled = false;
      generateDataBtn.textContent = aiTrans('generate_data');
    });
  }
}

// 在DOM加载完成时初始化
document.addEventListener('DOMContentLoaded', initializeAIDataGeneration);

// 如果DOM已经加载完成，立即初始化
if (document.readyState === 'loading') {
  // DOM还在加载中，等待DOMContentLoaded事件
  document.addEventListener('DOMContentLoaded', initializeAIDataGeneration);
} else {
  // DOM已经加载完成，立即执行
  initializeAIDataGeneration();
}

// 为了确保在页面刷新后也能正常工作，添加window.onload事件
window.addEventListener('load', function() {
  console.log('Window loaded, re-initializing AI Data Generation...');
  // 延迟一点时间确保所有元素都已渲染
  setTimeout(initializeAIDataGeneration, 100);
});
</script> ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ai_i18n_modal.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  166 => 128,  162 => 127,  152 => 120,  146 => 117,  141 => 115,  129 => 108,  111 => 93,  107 => 92,  103 => 91,  99 => 90,  95 => 89,  91 => 88,  87 => 87,  83 => 86,  79 => 85,  75 => 84,  71 => 83,  67 => 82,  63 => 81,  59 => 80,  53 => 76,  51 => 75,  48 => 73,  46 => 7,  43 => 5,  41 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "ai_i18n_modal.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\ai_i18n_modal.twig");
    }
}
