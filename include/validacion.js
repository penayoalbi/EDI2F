function validar(){
    var titulo,descripcion;
	titulo=document.getElementById("titulo").value;
	descripcion=document.getElementById("descripcion").value;
	var rs = document.getElementById('rs');
	if (titulo=="" || descripcion==""){
		//alert("Todos los campos son obligatorios");
        noti("Los campos son obligatorios","danger");
		return false;
	}else if(titulo.length <=3 || titulo >=50 || descripcion.length <= 3 || descripcion>50){
		noti("Longitud no valido. Debe ser de 3 a 50","danger");
		return false;
	}
    function noti(mensaje, tipo){
        var alertas = document.createElement('div');
        alertas.innerHTML = '<div class="alert alert-'+tipo +' alert-dismissible" role="alert">' + mensaje + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button></div>';
        rs.append(alertas);
    }
}