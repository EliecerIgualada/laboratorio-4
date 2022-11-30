<?php
class horas {
private $horasTrab;

public function setHorasTrab($horasTrab){
   $this->horasTrab=$horasTrab;
}
public function getHorasTrab(){
    return $this->horasTrab;
}

public function calcular (){
    $salarioB=$this->horasTrab*8;
    $desc=$salarioB*0.2;
    $neto=$salarioB-$desc;
    return "Horas trabajadas: ".$this->horasTrab."<br>". "Salario por horas de 8.00 $"."<br>"."Salario bruto de ".$salarioB."<br>"."Obtuvo un descuento de ".$desc."<br>"."Y su salario Neto es de ".$neto;
   }
}
?>
