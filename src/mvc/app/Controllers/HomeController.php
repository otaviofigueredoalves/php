<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Model\Usuario;
use App\Core\Database;
use Exception;

class HomeController extends Controller
{
  
    public function index()
    {
        try{
            $user = new Usuario();
            $user_data = $user->getDataUser();
            $consulta = $user->testDb();
            dd($consulta);
        } catch (\PDOException $e){
            throw new Exception("algum erro aconteceu no HomeController" . $e->getMessage());
        }

        $this->view('home/index',$user_data); // agora só passar a rota pro controller montar/renderizar a view
    } 

    public function contact()
    {
        $this->view('home/contact');
    }
}