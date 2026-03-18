<?php
class Router
{
    public function dispatch($url)
    {
        $url = trim($url,'/');
        $parts = $url ? explode('/',$url) : [];
        $controllerName = $parts[0] ?? 'Home'; 
        $controllerName = ucfirst($controllerName).'Controller';
        $controllerPath =  __DIR__ . "/../controllers/$controllerName".'.php';

        // var_dump($controllerPath);
        // var_dump($controllerName);
        try{
            if(file_exists($controllerPath)){
                $method = $parts[1] ?? 'index';

                if($controllerName == 'AdminController'){
                    $this->httpError('notPermission');
                    return;
                }

                
                require_once $controllerPath;
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
        } catch(Throwable $e){
            $this->httpError('notServer',$e->getMessage());
        }
    }

    private function httpError($error, $error_message = null)
    {
        $controllerPath = __DIR__ . "/../controllers/HttpResponseError.php";
        require_once $controllerPath;
        $controller = new HttpResponseError();
        $controller->$error($error_message);
    }
}