<?php
namespace App\Model;
use App\Core\Model;
class Usuario extends Model
{
    public function getDataUser()
    {
        return [
            'nome' => "Otávio",
            'idade' => 19,
            'email' => "otavio@gmail.com"
        ];
    }

    public function testDb()
    {
        $sql = 'SELECT 1+4 AS teste';
        $resultado = $this->db->fetch($sql);
        return $resultado;
    }
}