<?php
    //FRONT CONTROLLER
    
    //1. Общие настройки
    ini_set('display_errors', 1);
    
    
    //2. Подключение файлов к системе
	date_default_timezone_set("Europe/Moscow");
    define('ROOT', dirname(__FILE__));
    require_once ROOT . '/component/Router.php';
    
    //3. Установка соединения с БД
    
    //4. Вызов Роутер
    
    $router = new Router;
    $router->run();