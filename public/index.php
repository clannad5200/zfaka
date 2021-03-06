<?php
if (!extension_loaded('yaf')) {
    if (!dl('yaf.so')) {
		echo "请先安装yaf扩展";
        exit;
    }
}
header('content-Type:text/html;charset=utf-8;');
define('APP_PATH',  dirname(dirname(__FILE__)));
\Yaf\Loader::import(APP_PATH.'/application/init.php');
$app = new \Yaf\Application(APP_PATH.'/conf/application.ini');
$app->getDispatcher()->throwException(TRUE);
$app->bootstrap()->run();