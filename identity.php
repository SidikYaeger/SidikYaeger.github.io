<?php
$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) continue;
        $parts = explode('=', $line, 2);
        if (count($parts) === 2) {
            $k = trim($parts[0]);
            $v = trim($parts[1], " \t\n\r\0\x0B\"'");
            putenv("$k=$v");
            $_ENV[$k] = $v;
        }
    }
}

if (!defined('MEMBER_ROUTE')) {
    define('MEMBER_ROUTE', getenv('MEMBER_ROUTE') ?: ($_ENV['MEMBER_ROUTE'] ?? 'm0'));
}
if (!defined('MEMBER_NAMA')) {
    define('MEMBER_NAMA', getenv('MEMBER_NAMA') ?: ($_ENV['MEMBER_NAMA'] ?? 'Zhafir Muhammad Tectona Grandito'));
}
if (!defined('MEMBER_NIM')) {
    define('MEMBER_NIM', getenv('MEMBER_NIM') ?: ($_ENV['MEMBER_NIM'] ?? '103012400147'));
}