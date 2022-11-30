<?php
class salon{
    private $hombres;
    private $mujeres;

    public function __constructor($hombre,$mujerers){
        $this->hombres=$hombres;
        $this->mujeres=$mujeres;
    }
    public function suma(){
        return $this->hombres + $this->mujeres;
    }
    public function setHombres($hombres){
        $this->hombres=$hombres;
    }
    public function getHombres(){
        return $this->hombres;
    }
    
    public function setMujeres($mujeres){
        $this->mujeres=$mujeres;
    }
    public function getMujeres(){
        return $this->mujeres;
    }

    public function porcH(){
        $Suma=$this->hombres + $this->mujeres;
        $PH=($this->hombres/$Suma)*100;
        return $PH."%";
    }
    public function porcM(){
        $Suma=$this->hombres + $this->mujeres;
        $PM=($this->mujeres/$Suma)*100;
        return $PM."%";
    }
}
?>