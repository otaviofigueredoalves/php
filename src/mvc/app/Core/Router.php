<?php
namespace App\Core;
use App\Controllers\HttpResponseError;
use Exception;
class Router
{
    public function dispatch($url)
    {
        $url = trim($url,'/');
        $parts = $url ? explode('/',$url) : [];
        $controllerName = $parts[0] ?? 'Home'; 
        $controllerName = 'App\Controllers\\'. ucfirst($controllerName).'Controller';

        // var_dump($controllerName);
        // die();

        try{
            if(class_exists($controllerName)){
                $method = $parts[1] ?? 'index';

                if($controllerName == 'AdminController'){
                    $this->httpError('notPermission');
                    return;
                }

                $controller = new $controllerName();

                if(!method_exists($controller,$method)){
                    $this->httpError('notFound');
                    return;
                }

                $params = array_slice($parts,2);
                call_user_func_array([$controller,$method],$params);


            } else {
                $this->httpError('notFound');
                return;
            }
        } catch(Exception $e){
            $this->httpError('notServer',$e->getMessage());
        }
    }

    private function httpError($error, $error_message = null)
    {
        $controller = new HttpResponseError();
        $controller->$error($error_message);
    }
}