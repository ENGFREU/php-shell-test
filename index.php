<?php
// Простой одностраничный сайт с проверкой работы PHP-FPM
$server_ip = $_SERVER['SERVER_ADDR'] ?? '127.0.0.1';
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
$php_version = phpversion();
$sapi = php_sapi_name(); // Должно выводить "fpm-fcgi"
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-FPM + Nginx Setup</title>
    <style>
        body { font-family: monospace; background: #0d1117; color: #c9d1d9; padding: 2rem; }
        .card { background: #161b22; border: 1px solid #30363d; padding: 1.5rem; border-radius: 8px; max-width: 600px; }
        h1 { color: #58a6ff; font-size: 1.5rem; margin-top: 0; }
        .status { color: #7ee787; font-weight: bold; }
        .info-item { margin: 8px 0; }
    </style>
</head>
<body>
    <div class="card">
        <h1>[ SYSTEM OK ]</h1>
        <div class="info-item">Architecture: <span class="status">Nginx -> FastCGI Socket -> PHP-FPM</span></div>
        <div class="info-item">PHP SAPI: <strong><?= htmlspecialchars($sapi) ?></strong></div>
        <div class="info-item">PHP Version: <strong><?= htmlspecialchars($php_version) ?></strong></div>
        <hr style="border-color: #30363d; margin: 15px 0;">
        <div class="info-item">Client Agent: <?= htmlspecialchars($user_agent) ?></div>
        <div class="info-item">Time: <?= date('Y-m-d H:i:s') ?></div>
    </div>
</body>
</html>
