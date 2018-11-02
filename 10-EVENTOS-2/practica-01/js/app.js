function crearAlertaOnBlur() {
  var formGroup = document.querySelectorAll(".form-group");
  for (unForm of formGroup) {
    //console.log(unForm)
    var input = unForm.querySelector('input');
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
    //console.log(unForm)
    var input = unForm.querySelector('input');
    if (input != null) {

      if( input.value == "" ) {
        event.preventDefault();
        input.classList.add('is-invalid');
        input.parentElement.querySelector('.invalid-feedback').innerText = "¡Llename el campito por el amor de Jebus!";
      }

    }
  }
}

crearAlertaOnBlur();

var formulario = document.querySelector('.contact-form');
formulario.addEventListener('submit', crearAlertaOnSubmit);
