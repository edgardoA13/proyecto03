const formulario = document.getElementById('form_registro');
const inputs = document.querySelectorAll('#form_registro input');

const expresiones = {
	nombre: /^[a-zA-Z\s]{15,45}$/,
	correo:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-.]+$/,
	password: /^[a-zA-Z0-9]{4,12}$/,
}

const validarForm = (e) => {
	switch(e.target.name){
		case "nombre":
			if(expresiones.nombre.test(e.target.value)){
				document.getElementById('nombre').classList.remove('incorrecto');
				document.getElementById('nombre').classList.add('correcto');
				document.getElementById('spanName').classList.remove('spanText');
			} else{
				document.getElementById('nombre').classList.remove('correcto');
				document.getElementById('nombre').classList.add('incorrecto');
				document.getElementById('spanName').classList.add('spanText');
			}
		break;
		case "correo":
			if(expresiones.correo.test(e.target.value)){
				document.getElementById('correo').classList.remove('incorrecto');
				document.getElementById('correo').classList.add('correcto');
				document.getElementById('spanEmail').classList.remove('spanText');
			} else{
				document.getElementById('correo').classList.add('incorrecto');
				document.getElementById('correo').classList.remove('correcto');
				document.getElementById('spanEmail').classList.add('spanText');
			}
		break;
		case "contraseña":
			if(expresiones.password.test(e.target.value)){
				document.getElementById('contraseña').classList.remove('incorrecto');
				document.getElementById('contraseña').classList.add('correcto');
				document.getElementById('spanPass').classList.remove('spanText');
			} else {
				document.getElementById('contraseña').classList.add('incorrecto');
				document.getElementById('contraseña').classList.remove('correcto');
				document.getElementById('spanPass').classList.add('spanText');
			}
		break;
	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarForm);
	input.addEventListener('blur', validarForm);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const nombre = $('#nombre').val();
	const correo = $('#correo').val();
	const contraseña = $('#contraseña').val();

	var isChecked = document.getElementById('formCheck').checked;

	if(isChecked){
		if(nombre && correo && contraseña){

			var datos = $('#form_registro').serialize();
				$.ajax({
					type: 'POST',
					url: '../connection/save-users.php',				
					data: datos,
					success: function(r){
						if(r == 1){
							document.getElementById('msg-exito').style.display="block";
							setTimeout(() =>{
								document.getElementById('msg-exito').style.display="none";
							}, 3000);

							document.querySelectorAll('#form_registro input').forEach((input) =>{
								input.classList.remove('correcto');
							});

							location.href = 'login.php';

						} else{
							document.getElementById('msg-existe').style.display="block";
							setTimeout(() =>{
								document.getElementById('msg-existe').style.display="none";
							}, 3000);

							document.querySelectorAll('#form_registro input').forEach((input) =>{
								input.classList.remove('correcto');
							});
						}
					}
				});

			formulario.reset();
			
		} else {
			document.getElementById('msg-error').style.display="block";
			setTimeout(() =>{
				document.getElementById('msg-error').style.display="none";
			}, 3000);
		}
	} else{
		document.getElementById('terminos').style.display="block";
		setTimeout(() =>{
								document.getElementById('terminos').style.display="none";
							}, 3000);
	}
	
});