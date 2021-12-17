<?php

namespace App\ModelDAO;

use App\DbConfig\Connection;
use App\Model\Curso;

class CursoDAO
{

    public function createCurso(Curso $curso)
    {

        $sql = 'INSERT INTO `tb_curso`(`nome`, `id_prof`) VALUES (?,?)';
        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1, $curso->getNome());
        $stmt->bindValue(2, $curso->getProfId());
        $stmt->execute();
    }

    public function findAll()
    {
        $sql = 'SELECT `c.id`, `c.nome`,`p.id`, `p.nome` from `tb_curso c` , `tb_professor p` WHERE `c.id_prof` = ? == `p.id` = ?';
        $stmt = Connection::getConnection()->prepare($sql);
        
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return [];
        endif;

    }
}
