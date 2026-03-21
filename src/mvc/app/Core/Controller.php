<?php
namespace App\Core;
use Exception;
abstract class Controller
{
    protected function view($view, $viewData = [])
    {
        /**
         * extract() substitui a necessidade ter que acessar o array pela view
         * ex: ['indice' => 'valor'];
         *      $indice = valor
         */
        extract($viewData);
        $viewFile = __DIR__ . "/../views/$view.php";

        if(!file_exists($viewFile)){
            throw new Exception("VISH MARIA, EXISTE ESSA TELA NÃO!");
        }

        require_once $viewFile;
        
    }
}

// Agora temos uma classe nova que serve de base para fazer o require de todos os controllers