<?php
require_once __DIR__ . '/../core/Controller.php';
class HomeController extends Controller
{
  
    public function index()
    {
        $this->view('home/index', 
        [
          'nome' => 'Otávio',
          'idade' => 19
        ]
        ); // agora só passar a rota pro controller montar/renderizar a view
    } 

    public function contact()
    {
        $this->view('home/contact');
    }
}