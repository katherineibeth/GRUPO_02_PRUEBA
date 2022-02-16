<?php

class trapecio extends figura implements formulas{

	private $lado1 =0;
	private $lado2 =0;
	private $lado3 =0;
	private $lado4 =0;
	private $altura =0;
	

	public function __construct($l1, $l2, $l3, $l4, $altura){
		$this->lado1 = $l1;
		$this->lado2 = $l2;
		$this->lado3 = $l3;
		$this->lado4 = $l4;
		$this->altura = $altura;

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
		$area = (($this->lado1 * $this->lado2)/2)*$this->altura;

		return $area;
	}
	    
	    
	public function GetPerimetro(){
		$perimetro = ($this->lado1 +$this->lado2 + $this->lado3 + $this->lado4);
		return $perimetro;


	}
	   
	public function GetTipo(){
		return "trapecio";
		
	}  
	
	
}
?>

