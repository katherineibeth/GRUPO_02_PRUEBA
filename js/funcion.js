
function seleccionFig(){
	let fig = document.getElementById('fig');
	let figura = fig.value;

	if(figura == "cuadrado"){
		document.getElementById('lado_1').disabled=false;

	}else if(figura == "rectangulo"){
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;

	}else if(figura == "romboide"){
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;
		document.getElementById('altura').disabled=false;

	}
	else if(figura == "trapecio"){
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;
		document.getElementById('lado_3').disabled=false;
		document.getElementById('lado_4').disabled=false;
		document.getElementById('altura').disabled=false;

	}else{
		document.getElementById('lado_1').disabled=false;
		document.getElementById('lado_2').disabled=false;
		document.getElementById('lado_3').disabled=false;
	}

	//document.getElementById('texto').innerText = `HOLA es un ${figura}.`;
}
