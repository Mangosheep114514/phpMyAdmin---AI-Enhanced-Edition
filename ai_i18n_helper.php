<?php
/**
 * AI功能多语言辅助函数
 * 为AI测试数据生成功能提供多语言支持
 */

class AiI18nHelper {
    
    /**
     * 获取当前语言
     */
    public static function getCurrentLanguage() {
        // 从PhpMyAdmin全局变量获取当前语言
        if (isset($GLOBALS['lang'])) {
            return $GLOBALS['lang'];
        }
        
        // 从HTTP头获取
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
            if (strpos($lang, 'zh-CN') !== false || strpos($lang, 'zh_CN') !== false) {
                return 'zh_CN';
            } elseif (strpos($lang, 'zh-TW') !== false || strpos($lang, 'zh_TW') !== false) {
                return 'zh_TW';
            } elseif (strpos($lang, 'ja') !== false) {
                return 'ja';
            }
        }
        
        return 'en';
    }
    
    /**
     * 翻译文本
     */
    public static function translate($key, $lang = null) {
        if ($lang === null) {
            $lang = self::getCurrentLanguage();
        }
        
        $translations = [
            'en' => [
                'generate_ai_test_data' => 'Generate AI test data',
                'data_description' => 'Data description',
                'data_description_colon' => 'Data description:',
                'record_count' => 'Record count',
                'record_count_colon' => 'Record count:',
                'cancel' => 'Cancel',
                'generate_data' => 'Generate data',
                'generating' => 'Generating...',
                'please_enter_description' => 'Please enter data description',
                'unable_get_db_info' => 'Unable to get database or table information',
                'generation_successful' => 'AI test data generation successful! Generated',
                'records' => 'records',
                'generation_failed' => 'Generation failed',
                'generation_failed_colon' => 'Generation failed:',
                'unknown_error' => 'Unknown error',
                'request_failed_retry' => 'Request failed, please try again later',
                'request_failed_network' => 'Request failed, please check network connection',
                'debug_info_console' => 'Debug information has been output to the console',
                'placeholder_description' => 'Please describe the test data you want to generate, e.g., user information including name, email, registration time, etc.'
            ],
            'zh_CN' => [
                'generate_ai_test_data' => '生成AI测试数据',
                'data_description' => '数据描述',
                'data_description_colon' => '数据描述：',
                'record_count' => '记录数量',
                'record_count_colon' => '记录数量：',
                'cancel' => '取消',
                'generate_data' => '生成数据',
                'generating' => '生成中...',
                'please_enter_description' => '请输入数据描述',
                'unable_get_db_info' => '无法获取数据库或表信息',
                'generation_successful' => 'AI测试数据生成成功！已生成',
                'records' => '条记录',
                'generation_failed' => '生成失败',
                'generation_failed_colon' => '生成失败：',
                'unknown_error' => '未知错误',
                'request_failed_retry' => '请求失败，请稍后重试',
                'request_failed_network' => '请求失败，请检查网络连接',
                'debug_info_console' => '调试信息已输出到控制台',
                'placeholder_description' => '请描述您想要生成的测试数据，例如：用户信息，包含姓名、邮箱、注册时间等'
            ],
            'zh_TW' => [
                'generate_ai_test_data' => '產生AI測試資料',
                'data_description' => '資料描述',
                'data_description_colon' => '資料描述：',
                'record_count' => '記錄數量',
                'record_count_colon' => '記錄數量：',
                'cancel' => '取消',
                'generate_data' => '產生資料',
                'generating' => '產生中...',
                'please_enter_description' => '請輸入資料描述',
                'unable_get_db_info' => '無法取得資料庫或表格資訊',
                'generation_successful' => 'AI測試資料產生成功！已產生',
                'records' => '筆記錄',
                'generation_failed' => '產生失敗',
                'generation_failed_colon' => '產生失敗：',
                'unknown_error' => '未知錯誤',
                'request_failed_retry' => '請求失敗，請稍後重試',
                'request_failed_network' => '請求失敗，請檢查網路連線',
                'debug_info_console' => '調試資訊已輸出到控制台',
                'placeholder_description' => '請描述您想要產生的測試資料，例如：使用者資訊，包含姓名、電子郵件、註冊時間等'
            ],
            'ja' => [
                'generate_ai_test_data' => 'AIテストデータを生成',
                'data_description' => 'データ説明',
                'data_description_colon' => 'データ説明：',
                'record_count' => 'レコード数',
                'record_count_colon' => 'レコード数：',
                'cancel' => 'キャンセル',
                'generate_data' => 'データを生成',
                'generating' => '生成中...',
                'please_enter_description' => 'データ説明を入力してください',
                'unable_get_db_info' => 'データベースまたはテーブル情報を取得できません',
                'generation_successful' => 'AIテストデータの生成が成功しました！生成済み',
                'records' => '件のレコード',
                'generation_failed' => '生成に失敗しました',
                'generation_failed_colon' => '生成に失敗しました：',
                'unknown_error' => '不明なエラー',
                'request_failed_retry' => 'リクエストが失敗しました。後でもう一度お試しください',
                'request_failed_network' => 'リクエストが失敗しました。ネットワーク接続を確認してください',
                'debug_info_console' => 'デバッグ情報がコンソールに出力されました',
                'placeholder_description' => '生成したいテストデータを説明してください。例：名前、メール、登録時間などを含むユーザー情報'
            ]
        ];
        
        if (isset($translations[$lang][$key])) {
            return $translations[$lang][$key];
        } elseif (isset($translations['en'][$key])) {
            return $translations['en'][$key]; // 默认返回英文
        }
        
        return $key; // 如果找不到翻译，返回原key
    }
}

/**
 * 简化的翻译函数
 */
function ai_trans($key, $lang = null) {
    return AiI18nHelper::translate($key, $lang);
}
?> 