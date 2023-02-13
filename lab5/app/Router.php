<?php

namespace App;

class Router{
     public static $routes=[];
     

     public static function get($path, $callback){
        static::$routes['get'][$path] = $callback;
     }

     public static function post($path, $callback){
        static::$routes['post'][$path] = $callback;
     }

     public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = str_replace("/lab5/public/", '/', $path);
        $position = strpos($path, '?');

        if($position){

            $path = substr($path, 0, $position);
            // return $path;
        }
        return $path;
     }

     public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
     }

     public function resolve(){
        $path = $this->getPath();
        $method = $this->getMethod();

        
        $callback = static::$routes[$method][$path] ?? false;

        // echo "<pre>";
        // var_dump(static::$routes);
        // echo $path;
        if($callback === false){
            echo "404 FILE NOT FOUND";
            exit;
        }
        

        // Nếu $callback là 1 function
        if(is_callable($callback)){
            return $callback();
        }


        // Nếu $callback là 1 Array
        if(is_array($callback)){
            $class = new $callback[0];
            $action = $callback[1];
            return call_user_func_array([$class, $action], []);
        }
     }
}