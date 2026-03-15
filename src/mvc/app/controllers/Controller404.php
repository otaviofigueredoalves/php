<?php
require_once __DIR__ . '/../core/Controller.php';

class Controller404 extends Controller
{
    public function index()
    {
        $this->view('404/404');
    }
}