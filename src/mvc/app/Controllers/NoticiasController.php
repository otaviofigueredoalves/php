<?php
namespace App\Controllers;
use App\Core\Controller;
class NoticiasController extends Controller
{
    public function index()
    {
        $this->view('noticias/index');
    }
    public function noticia($id_noticia = null)
    {
        $this->view('noticias/noticia',['id_noticia' => $id_noticia]);
    }
}
