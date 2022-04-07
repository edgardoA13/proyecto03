const formulario = document.getElementById('form_login');
const inputs = document.querySelectorAll('#form_login input');

const expresiones = {
	correo:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-.]+$/,
	password: /^[a-zA-Z0-9]{4,12}$/,
}

const validarForm = (e) => {
	switch(e.target.name){
		case "correoL":
			if(expresiones.correo.test(e.target.value)){
				document.getElementById('correoL').classList.remove('incorrecto');
				document.getElementById('correoL').classList.add('correcto');
				document.getElementById('spanEmail').classList.remove('spanText');
			} else{
				document.getElementById('correoL').classList.remove('correcto');
				document.getElementById('correoL').classList.add('incorrecto');
				document.getElementById('spanEmail').classList.add('spanText');
			}
		break;
		case "contraseñaL":
			if(expresiones.password.test(e.target.value)){
				document.getElementById('contraseñaL').classList.remove('incorrecto');
				document.getElementById('contraseñaL').classList.add('correcto');
				document.getElementById('spanPass').classList.remove('spanText');
			} else{
				document.getElementById('contraseñaL').classList.remove('correcto');
				document.getElementById('contraseñaL').classList.add('incorrecto');
				document.getElementById('spanPass').classList.add('spanText');
			}
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarForm);
	input.addEventListener('blur', validarForm);
});


window.addEventListener('load', () => {

    let formulario = document.getElementById('form_login');
    let correo = document.getElementById('correoL');
    let password = document.getElementById('contraseñaL');    

    function data() {
        let datos = new FormData();
        datos.append("correoL", correo.value);
        datos.append("contraseñaL", password.value);

        if(correo.value && password.value){
        	fetch('../connection/sesion.php', {
                method: 'POST',
                body: datos
            }).then(Response => Response.json())
            .then(({ success }) => {
                if (success === 1) {
                    location.href = '../views/homepage.php';
                } else {
                    document.getElementById('error-login').style.display="block";
                    setTimeout(() => {
                    	document.getElementById('error-login').style.display="none";
                    }, 3000);

                    document.querySelectorAll('#form_login input').forEach((input)=>{
                    	input.classList.remove('correcto');
                    });
                }
            });
        } else{
        	document.getElementById('login-vacio').style.display="block";
                    setTimeout(() => {
                    	document.getElementById('login-vacio').style.display="none";
                    }, 3000);
        }

        
    }   

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        data();
        formulario.reset();
    });
});