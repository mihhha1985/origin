<?php

    class Router
    {
        private $routes;
        
        public function __construct() {
            $routesPath = ROOT . '/config/router.php';
            $this->routes = include($routesPath);
        }
        
        private function getURI(){
            if(!empty($_SERVER['REQUEST_URI'])){
                return $uri = trim($_SERVER['REQUEST_URI'], '/');
                
            }
        }


        public function run(){
            //получить строку запроса
            $uri = $this->getURI();
            //echo $uri . '<br />';
            
            //Если есть совпадения, определить какой контролер
            // и актион обрабатывают запрос
            foreach($this->routes as $uriPattern => $path){
                if(preg_match("~$uriPattern~", $uri)){
                   $rout = preg_replace("~$uriPattern~", $path, $uri); 
                   $segment = explode('/', $rout);
                   $controllerName = array_shift($segment) . 'Controller';
                   $controllerName = ucfirst($controllerName);
                   $actionName = 'action' . ucfirst(array_shift($segment));
                   //echo $controllerName . '<br />';
                   //echo $actionName . '<br />';
                   $param = $segment;
                   
                   $controllerFile = ROOT . '/controller/' . $controllerName . '.php';
                   if(file_exists($controllerFile)){
                       include_once($controllerFile);
                   }
                   
                   $controllerObject = new $controllerName;
                   $result = call_user_func_array(array($controllerObject, $actionName), $param);
                   if($result != null){
                       break;
                   }
                }
            }
            
            //Создать объект, вызвать метод(т.е актион)
        }
        
    }
?>    
    