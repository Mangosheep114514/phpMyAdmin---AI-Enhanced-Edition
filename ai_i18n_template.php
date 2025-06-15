<?php
/**
 * AI功能多语言模板生成器
 */

require_once 'ai_i18n_helper.php';

// 获取当前语言
$current_lang = AiI18nHelper::getCurrentLanguage();

// 检查是否是AJAX请求，如果是则输出JSON格式的翻译
if (isset($_GET['ajax']) && $_GET['ajax'] === 'translations') {
    header('Content-Type: application/json; charset=utf-8');
    
    $translations = [
        'generate_ai_test_data' => ai_trans('generate_ai_test_data'),
        'data_description_colon' => ai_trans('data_description_colon'),
        'record_count_colon' => ai_trans('record_count_colon'),
        'cancel' => ai_trans('cancel'),
        'generate_data' => ai_trans('generate_data'),
        'generating' => ai_trans('generating'),
        'please_enter_description' => ai_trans('please_enter_description'),
        'unable_get_db_info' => ai_trans('unable_get_db_info'),
        'generation_successful' => ai_trans('generation_successful'),
        'records' => ai_trans('records'),
        'generation_failed_colon' => ai_trans('generation_failed_colon'),
        'unknown_error' => ai_trans('unknown_error'),
        'request_failed_network' => ai_trans('request_failed_network'),
        'placeholder_description' => ai_trans('placeholder_description')
    ];
    
    echo json_encode($translations, JSON_UNESCAPED_UNICODE);
    exit;
}

// 普通页面输出JavaScript和HTML片段
?>
<script>
// AI功能多语言支持
window.aiTranslations = {
    'generate_ai_test_data': '<?php echo addslashes(ai_trans('generate_ai_test_data')); ?>',
    'data_description_colon': '<?php echo addslashes(ai_trans('data_description_colon')); ?>',
    'record_count_colon': '<?php echo addslashes(ai_trans('record_count_colon')); ?>',
    'cancel': '<?php echo addslashes(ai_trans('cancel')); ?>',
    'generate_data': '<?php echo addslashes(ai_trans('generate_data')); ?>',
    'generating': '<?php echo addslashes(ai_trans('generating')); ?>',
    'please_enter_description': '<?php echo addslashes(ai_trans('please_enter_description')); ?>',
    'unable_get_db_info': '<?php echo addslashes(ai_trans('unable_get_db_info')); ?>',
    'generation_successful': '<?php echo addslashes(ai_trans('generation_successful')); ?>',
    'records': '<?php echo addslashes(ai_trans('records')); ?>',
    'generation_failed_colon': '<?php echo addslashes(ai_trans('generation_failed_colon')); ?>',
    'unknown_error': '<?php echo addslashes(ai_trans('unknown_error')); ?>',
    'request_failed_network': '<?php echo addslashes(ai_trans('request_failed_network')); ?>',
    'placeholder_description': '<?php echo addslashes(ai_trans('placeholder_description')); ?>'
};

// 辅助函数
function aiTrans(key) {
    return window.aiTranslations[key] || key;
}
</script>

<!-- AI测试数据生成模态框 (多语言) -->
<div class="modal fade" id="aiTestDataModal" tabindex="-1" aria-labelledby="aiTestDataModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aiTestDataModalLabel">
          <?php echo ai_trans('generate_ai_test_data'); ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="aiTestDataForm">
          <div class="mb-3">
            <label for="dataDescription" class="form-label"><?php echo ai_trans('data_description_colon'); ?></label>
            <textarea class="form-control" id="dataDescription" name="data_description" rows="3" 
              placeholder="<?php echo ai_trans('placeholder_description'); ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="recordCount" class="form-label"><?php echo ai_trans('record_count_colon'); ?></label>
            <input type="number" class="form-control" id="recordCount" name="record_count" 
              min="1" max="100" value="5">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo ai_trans('cancel'); ?></button>
        <button type="button" class="btn btn-primary" id="generateDataBtn"><?php echo ai_trans('generate_data'); ?></button>
      </div>
    </div>
  </div>
</div>

<script>
// 多语言AI数据生成JavaScript
document.addEventListener('DOMContentLoaded', function() {
  const aiTestDataBtn = document.getElementById('aiTestDataBtn');
  const aiTestDataModal = new bootstrap.Modal(document.getElementById('aiTestDataModal'));
  const generateDataBtn = document.getElementById('generateDataBtn');
  
  if (aiTestDataBtn) {
    aiTestDataBtn.addEventListener('click', function() {
      aiTestDataModal.show();
    });
  }
  
  if (generateDataBtn) {
    generateDataBtn.addEventListener('click', function() {
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
        const dbInput = document.querySelector('input[name="db"]');
        db = dbInput ? dbInput.value : '';
      }
      if (!table) {
        const tableInput = document.querySelector('input[name="table"]');
        table = tableInput ? tableInput.value : '';
      }
      
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
      
      fetch('./ajax_ai_generate.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
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
        alert(aiTrans('request_failed_network'));
      })
      .finally(() => {
        // 恢复按钮状态
        generateDataBtn.disabled = false;
        generateDataBtn.textContent = aiTrans('generate_data');
      });
    });
  }
});
</script> 