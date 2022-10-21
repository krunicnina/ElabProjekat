<?php
class Prijava{
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;


    public function __construct($id=null,$predmet=null,$katedra=null,$sala=null,$datum=null){

        $this->id=$id;
        $this->predmet=$predmet;
        $this->sala=$sala;
        $this->katedra=$katedra;
        $this->datum=$datum;
    }
//vrati sve prijave iz baze
    public static function getAll(mysqli $conn)
{
    $query= "SELECT * FROM prijave";
return $conn->query($query);
}

}

?>