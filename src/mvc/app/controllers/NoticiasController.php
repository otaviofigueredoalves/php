<?php
require_once __DIR__ . '/../core/Controller.php';
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
