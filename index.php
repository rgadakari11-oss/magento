<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

use Magento\Framework\App\Bootstrap;

try {
    require __DIR__ . '/app/bootstrap.php';
} catch (\Exception $e) {
    echo <<<HTML
<html>
<head>
    <title>Autoload error</title>
</head>
<body>
<h1>Autoload error</h1>
<p>
    {$e->getMessage()}
</p>
</body>
</html>
HTML;
    exit(1);
}

$params = $_SERVER;
$bootstrap = Bootstrap::create(BP, $params);
$app = $bootstrap->createApplication('Magento\Framework\App\Http');
$bootstrap->run($app);
