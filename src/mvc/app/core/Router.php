<?php

class Router
{
    public function dispatch($url)
    {
        //convenção sobre configuração
        $url = trim($url, '/'); // limpa a / inicial e final da url
        $parts = $url ? explode('/',$url) : []; // splita a url em um array, considerando '/' como separador
        
        $controllerName = $parts[0] ?? 'Home'; // se tiver algum caminho pós /, pegue o primeiro indice do array. Se não, pegue 'Home'
        $controllerName = ucfirst($controllerName). 'Controller'; // nome começa com letra maiuscula e concatena com controller
        $controllerPath = __DIR__ . "/../controllers/$controllerName.php"; // caminho até o controller

        if(file_exists($controllerPath)){ // se o caminho/controller existirem, prossiga. Se não, erro.
            require_once $controllerPath; // chama o arquivo do controller

            // if(class_exists($controllerName)){ // se existir uma classe com o nome do controler, prossiga
                $controller = new $controllerName(); // instancie o novo controller

                $method = $parts[1] ?? 'index'; // se tiver mais um caminho pós o /, guarde o método. Se não, o padrão é index

                if(method_exists($controller, $method)){ // se o método dessa classe existir 'controller' é a classe.

                    $params = array_slice($parts,2); // guarda só os parâmetros
                    call_user_func_array([$controller,$method],$params); // execute o método com parâmetros
                    // $controller->$method(); // execute o método
                } else {
                    $this->notFound();; // método não existe
                }
            // }
        } else {
           $this->notFound();
        }

        // var_dump($controllerName);        
    }

    private function notFound()
    {
        $controllerPath = __DIR__ . "/../controllers/Controller404.php";
        require_once $controllerPath;
        $controller = new Controller404();
        $controller->index();
    }
}