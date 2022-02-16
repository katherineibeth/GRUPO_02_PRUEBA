<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<form name="figuras" id="figuras" method="POST" action="#">
			<table border=0 align="center">
				<tr>
					<th colspan="2" class="fs-title">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
					<br><br>
						<select name="tipo" id="fig" onchange="seleccionFig();">
							<option value="sel">Seleccione una figura</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="romboide">Romboide</option>
							<option value="rombo">Rombo</option>
							<option value="trapecio">Trapecio</option>
						</select>
						<p id="texto"></p>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" id="lado_1"  name="lado_1" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" id="lado_2"   name="lado_2" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" id="lado_3"  name="lado_3" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 4:</td>
					<td><input type="text" id="lado_4"  name="lado_4" size="4" disabled></td>
				</tr>
				<tr>
					<td>Altura:</td>
					<td><input type="text" id="altura"  name="altura" size="4" disabled></td>
				</tr>							
				<tr>
					<th colspan="2"><input class="action-button" type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>

			<script src="js/funcion.js"></script>';
			return $html;
		}
		
		//METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
