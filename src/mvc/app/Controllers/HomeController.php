<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Model\Usuario;
class HomeController extends Controller
{
  
    public function index()
    {
        $user = new Usuario();
        $user_data = $user->getDataUser();
        $this->view('home/index',$user_data); // agora só passar a rota pro controller montar/renderizar a view
    } 

    public function contact()
    {
        $this->view('home/contact');
    }
}