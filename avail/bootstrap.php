<?php
require_once(ROOT.'/avail/config/setting.php');


function autoload($class)
{
    
    // Массив папок, в которых могут находиться необходимые классы
    $array_paths = array(
        '/app/'.APP.'/moduls/',
        '/avail/core/lib/router/',
        '/avail/core/lib/database/',
        '/app/'.APP.'/controller/',
        '/app/'.APP.'/views/',
        '/avail/core/lib/template/'
    );
    // Проходим по массиву папок
    foreach ($array_paths as $path) {
        // Формируем имя и путь к файлу с классом
        $path = ROOT . $path . $class . '.php';
        // Если такой файл существует, подключаем его
        if (is_file($path)) {
            include_once($path);
        }
    }
}
spl_autoload_register('autoload');

$routes = require_once(ROOT.'/app/'.APP.'/router/router.php');

// добавляем все маршруты за раз
RouterLite::addRoute($routes);
RouterLite::dispatch();



ini_set( 'display_errors' ,1 );
error_reporting( E_ALL );