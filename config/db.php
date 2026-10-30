<?php
$envPath = dirname(__DIR__) . '/.env';
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

return [
    'host' => getenv('DB_HOST') ?: ($_ENV['DB_HOST'] ?? '127.0.0.1'),
    'name' => getenv('DB_NAME') ?: ($_ENV['DB_NAME'] ?? 'kelompok_db'),
    'user' => getenv('DB_USER') ?: ($_ENV['DB_USER'] ?? 'app_local'),
    'pass' => getenv('DB_PASS') !== false ? getenv('DB_PASS') : ($_ENV['DB_PASS'] ?? ''),
    'port' => getenv('DB_PORT') ?: ($_ENV['DB_PORT'] ?? '3306'),
];