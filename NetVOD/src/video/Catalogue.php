<?php
namespace NetVOD\video;

use NetVOD\db\ConnectionFactory;

class Catalogue {
    protected array $series;

    public function __construct()
    {
        $this->series = [];
        $sql = "SELECT id,titre,descriptif,img,annee,date_ajout FROM serie";
        $res = ConnectionFactory::$db->prepare($sql);
        $res->execute();

        while ($data = $res->fetch()){
            $s = new Serie($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],[]);
            array_push($this->series,$s);
        }
    }

    public function render():string{
        $res = "<ul>";

        foreach ($this->series as $tS => $v) {
            $res .= <<<END
            <li>"."<a href="index.php?action=DisplaySerieAction&$v->id">$v->titre</a> : <img src='/../../img/$v->img' alt='img de la série'></img></li>
            END;
        }

        return $res."</ul>";
    }
}