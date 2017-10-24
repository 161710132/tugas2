<?php
class Bangun_datar{

 	public $panjang1,$lebar1;

 	function set_luaspersegipanjang($panjang1,$lebar1){

 		$this->panjang1 = $panjang1;
 		$this->lebar1 = $lebar1;
 	}

 	function get_luaspersegipanjang(){
 		return $this->panjang1 * $this->lebar1;
 	}
 }
 $persegipanjang1 = new Bangun_datar;
 $persegipanjang1->set_luaspersegipanjang(5,2);
 echo"<h3> Bangun datar persegi panjang </h3>";
 echo"Luas : " .$persegipanjang1->get_luaspersegipanjang().'<br>';
 ?>