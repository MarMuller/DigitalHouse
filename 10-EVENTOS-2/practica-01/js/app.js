function crearAlertaOnBlur() {
  var formGroup = document.querySelectorAll(".form-group");
  for (unForm of formGroup) {
    //console.log(unForm)
    var input = unForm.querySelector('input');

    // var inputName = input.getAttribute("name");
    // console.log(inputName);


    if (input != null) {

      input.onblur = function() { //usamos "this" porq es una funcion (anonima?) dentro de una funcion.
        if( this.value == "" ) {
          this.classList.add('is-invalid');
          this.parentElement.querySelector('.invalid-feedback').innerText = "¡Llename el campito por el amor de Jebus!";
        }
      }

      input.onfocus = function() { //usamos "this" porq es una funcion (anonima?) dentro de una funcion.
        if( this.value == "" ) {
          this.classList.remove('is-invalid');
          this.parentElement.querySelector('.invalid-feedback').display = "none";
        }
      }

    }

  }
}

function crearAlertaOnSubmit(event) {

  var formGroup = document.querySelectorAll(".form-group");
  for (unForm of formGroup) {
    //console.log(unForm);
    var input = unForm.querySelector('input');

    //console.log(input);

    if (input != null) {

      var inputName = input.getAttribute("name");
      console.log(inputName);

      if( input.value == "" ) {
        event.preventDefault();
        input.classList.add('is-invalid');
        input.parentElement.querySelector('.invalid-feedback').innerText = "¡Llename el campito por el amor de Jebus!";
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

    }

  }
}

crearAlertaOnBlur();

var formulario = document.querySelector('.contact-form');
formulario.addEventListener('submit', crearAlertaOnSubmit);
