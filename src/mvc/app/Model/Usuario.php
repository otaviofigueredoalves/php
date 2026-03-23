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

    public function createUser($name)
    {
        $sql = "INSERT INTO usuarios (nome) VALUES (:nome)";
        $params = ['nome' => $name];
        return $this->db->execute($sql,$params);
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM usuarios";
        return $this->db->fetchAll($sql);
    }
}