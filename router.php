<?php

// إذا الملف موجود (css, js, images...) خليه يخدم عادي
if (php_sapi_name() == 'cli-server') {
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = __DIR__ . $url;
    if (is_file($file)) {
        return false;
    }
}

// الصفحة الرئيسية
echo "Bot is running 🚀";
