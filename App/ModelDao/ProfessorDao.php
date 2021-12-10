<?php

namespace App\ModelDao;

use App\DbConfig\Connection;
use App\Model\Professor;
use PDO;

class ProfessorDao
{

    public function createProfessor(Professor $p)
    {
        $sql = 'INSERT INTO `tb_professor`(`nome`, `dt_nascimento`) VALUES (?,?) ';

        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDtNascimento());
        $stmt->execute();
    }

    public function findAll()
    {
    }

    public function updateProfessor()
    {
    }

    public function deleteId($id)
    {
    }
}
