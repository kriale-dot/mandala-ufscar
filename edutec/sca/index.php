
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/mandala-debug.log');


// Caminho do Yii instalado pelo Composer
$yii = dirname(__FILE__) . '/../../vendor/yiisoft/yii/framework/yii.php';

// Configuração da aplicação
$config = dirname(__FILE__) . '/protected/config/main.php';

// Modo de desenvolvimento
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

// Verificar se o framework existe
if (!file_exists($yii)) {
    die('ERRO: Framework Yii não encontrado em: ' . $yii);
}

// Inicializar aplicação
require_once($yii);
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);
Yii::createWebApplication($config)->run();
