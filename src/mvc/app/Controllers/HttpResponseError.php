<?php
namespace App\Controllers;
use App\Core\Controller;

class HttpResponseError extends Controller
{
    public function notFound()
    {
        http_response_code(404);
        $this->view('error/404');
    }

    public function notServer($dados_erro = null)
    {
        http_response_code(500);
        $this->view('error/500',['error_message' => $dados_erro]);
    }

    public function notPermission()
    {
        http_response_code(403);
        $this->view('error/403');
    }
}