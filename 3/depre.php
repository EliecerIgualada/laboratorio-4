<?php
class depre{
    private $original;
    private $ano;
    private $anual;
    private $cero;

    public function setCero($cero){
        $this->cero=$cero;
    }
    public function getCero(){
       return $this->cero;
    }
    public function setOriginal($original){
        $this->original=$original;
    }
    public function setAno($ano){
        $this->ano=$ano;
    }
    public function setAnual($anual){
        $this->anual=$anual;
    }

    public function getOriginal(){
       return $this->original;
    }
    public function getAno(){
       return $this->ano;
    }
    public function getAnual(){
       return $this->anual;
    }

    public function calculo1 (){
        for($i=0;$i<=$this->ano;$i++){
            $this->original = $this->original - $this->anual;
            return $this->original;
    }
}

public function calculo2 (){
    for($i=0;$i<=$this->ano;$i++){
        $this->cero = $this->cero + $this->anual;
        return $this->cero;
}
}
}
?>