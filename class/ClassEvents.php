<?php
namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect
{
    #Trazer os dados de eventos do banco
    public function getEvents()
    {
        $b=$this->conectDB()->prepare("select id, title, description, start, horario from ifsp_lacif.consultas");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }
}