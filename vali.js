

function validar() {
	var name= document.getElementById('nombre').value;
	if (name=="") 
	{

		alert('Por favor digite su nombre: ');
		return false;
	}
	var eda= document.getElementById('edad').value;
	if (eda=="") 
	{
		alert('Por favor digite su edad: ');
		return false;
	}
	var pes= document.getElementById('peso').value;
	if (pes=="") 
	{
		alert('Por favor digite su peso: ');
		return false;
	}
	

}



function oculta(id) {
	var eldiv = document.getElementById(id);
	eldiv.style.display='none'
}
function muestra(id) {
	var eldiv= document.getElementById(id);
	eldiv.style.display='block';
	
}
window.onload = function() {
	oculta('m');
}