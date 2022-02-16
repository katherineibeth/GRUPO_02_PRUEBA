<?php

class rombo extends figura implements formulas{

	private $lado1 =0;
	private $lado2 =0;
	private $lado3 =0;

	public function __construct($l1, $l2, $l3){
		$this->lado1 = $l1;
		$this->lado2 = $l2;
		$this->lado3 = $l3;
	}



	public function area(){
		$area = ($this->lado1 * $this->lado2)/2;
		return $area;
	}

	public function perimetro(){
		$perimetro = ($this->lado3 * 4);
		return $perimetro;

	}

	public function GetArea(){
		$area = ($this->lado1 * $this->lado2)/2;

		return $area;
	}
	    
	    
	public function GetPerimetro(){
		$perimetro = ($this->lado3 * 4);
		return $perimetro;


	}
	   
	public function GetTipo(){
		return "Rombo";
		
	}  
	
	
}
?>

