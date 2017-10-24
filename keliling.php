<?php
class Bangun_datar{

	public $panjang1,$lebar1;

function set_kelilingpersegipanjang($panjang1,$lebar1){

 		$this->panjang1 = $panjang1;
 		$this->lebar1 = $lebar1;
 	}

function get_kelilingpersegipanjang(){
 		return  ($this->panjang1 + $this->lebar1)*2 ;
 	}
 } 
 	$persegipanjang1 = new Bangun_datar;
	$persegipanjang1->set_kelilingpersegipanjang(2,2);
    echo"<h3> Bangun datar persegi panjang </h3>";
    echo "Keliling : ".$persegipanjang1->get_kelilingpersegipanjang().'cm','<br>';
?>