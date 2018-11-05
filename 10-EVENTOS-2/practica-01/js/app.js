function crearAlertaOnBlur() {
  var formGroup = document.querySelectorAll(".form-group");
  for (unForm of formGroup) {
    //console.log(unForm)
    var input = unForm.querySelector('input');

    // var inputName = input.getAttribute("name");
    // console.log(inputName);


    if (input != null) {

      input.onblur = function() { //usamos "this" porq es una funcion (anonima?).

        var inputName = this.getAttribute("name");

        if( this.value == "" ) {
          this.classList.add('is-invalid');
          this.parentElement.querySelector('.invalid-feedback').innerText = "Este es campo es obligatorio";
        } else {

          if( inputName == "email" ) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if ( !(this.value.match(mailformat)) ) {
              this.classList.add('is-invalid');
              this.parentElement.querySelector('.invalid-feedback').innerText = "El email es invalido";
            }
          }

          if( inputName == "phone" ) {
            if ( isNaN(this.value) ) {
              this.classList.add('is-invalid');
              this.parentElement.querySelector('.invalid-feedback').innerText = "No es un número";
            }
          }

          if (inputName == "password") {
            var formulario = document.querySelector('.contact-form');
            var password = formulario.querySelector('input[name=password]').value;
            //console.log(password);
            //console.log(rePassword);
            if (password.length < 4) {
              this.classList.add('is-invalid');
              this.parentElement.querySelector('.invalid-feedback').innerText = "Las contraseñas deben tener mínimo 4 caracteres";
            }
          }

          if (inputName == "rePassword") {
            var formulario = document.querySelector('.contact-form');
            var password = formulario.querySelector('input[name=password]').value;
            var rePassword = formulario.querySelector('input[name=rePassword]').value;
            var passwordInput = formulario.querySelector('input[name=password]');
            //console.log(password);
            //console.log(rePassword);
            if (rePassword != password) {
              this.classList.add('is-invalid');
              //passwordInput.classList.add('is-invalid');
              this.parentElement.querySelector('.invalid-feedback').innerText = "Las contraseñas no coinciden";
            }
            if (rePassword.length < 4) {
              this.classList.add('is-invalid');
              this.parentElement.querySelector('.invalid-feedback').innerText = "Las contraseñas deben tener mínimo 4 caracteres";
            }
          }

        } //fin else

      } //fin input.onblur

      input.onchange  = function() { //usamos "this" porq es una funcion (anonima?).
        this.classList.remove('is-invalid');
        this.parentElement.querySelector('.invalid-feedback').display = "none";
      } //fin input.onchange

    }
  }
}

var valid;

function crearAlertaOnSubmit(event) {

  var formGroup = document.querySelectorAll(".form-group");
  for (unForm of formGroup) {
    //console.log(unForm);
    var input = unForm.querySelector('input');

    //console.log(input);

    if (input != null) {

      var inputName = input.getAttribute("name");
      //console.log(inputName);

      if( input.value == "" ) {
        event.preventDefault();
        input.classList.add('is-invalid');
        input.parentElement.querySelector('.invalid-feedback').innerText = "Este es campo es obligatorio";
      }

      if( inputName == "email" ) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if ( !(input.value.match(mailformat)) ) {
          event.preventDefault();
          input.classList.add('is-invalid');
          input.parentElement.querySelector('.invalid-feedback').innerText = "El email es invalido";
        }
      }

      if( inputName == "phone" ) {
        if ( isNaN(input.value) ) {
          event.preventDefault();
          input.classList.add('is-invalid');
          input.parentElement.querySelector('.invalid-feedback').innerText = "No es un número";
        }
      }

      if ( (inputName == "password") || (inputName == "rePassword") ) {
        var formulario = document.querySelector('.contact-form');
        var password = formulario.querySelector('input[name=password]').value;
        var rePassword = formulario.querySelector('input[name=rePassword]').value;
        //console.log(password);
        //console.log(rePassword);
        if ( rePassword != password ) {
          event.preventDefault();
          input.classList.add('is-invalid');
          input.parentElement.querySelector('.invalid-feedback').innerText = "Las contraseñas no coinciden";
        } else if ( (rePassword.length < 4) || (password.length < 4) ) {
          event.preventDefault();
          input.classList.add('is-invalid');
          input.parentElement.querySelector('.invalid-feedback').innerText = "Las contraseñas deben tener mínimo 4 caracteres";
        }
      }

      var valid = true;
      desaparecerFormulario();

    } else {
      valid = false;
    }

  }
}

function desaparecerFormulario() {
  console.log(valid);
  if (valid == true) {
    var form = document.querySelector('.contact-form');
    form.style.display = "none";
    console.log('Chau Formulario!');
  } else {
    console.log('NOP');
  }
}

function resultadoInscrip() {
  var listadoDatos = document.createElement('h1');
  listadoDatos.innerText = "HOLLLAA";
  var contenedor = document.querySelector('.col-md-8');
  contenedor.appendChild(listadoDatos);
}

resultadoInscrip();

crearAlertaOnBlur();

var formulario = document.querySelector('.contact-form');
formulario.addEventListener('submit', crearAlertaOnSubmit);
//formulario.addEventListener('submit', desaparecerFormulario);

// a. Deberá desaparecer / ocultarse el formulario.
// b. Deberá mostrar en pantalla un listado <ul> con los valores de cada
// uno de los campos a excepción de las contraseñas.
// c. Un texto adicional que diga "Gracias por registrarte"
