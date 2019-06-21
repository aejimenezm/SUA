<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>SUA | Ministerio de Econom&iacute;a</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="navbar">
    <div class="container">
      <img src="images/logo-mineco.png" width="90" class="img">
    </div>
  </nav>

  <main role="main" class="container" id="main">
    <form class="needs-validation" novalidate action="prueba.html">
      <h1>
        Ministerio de Econom&iacute;a <br>
        Solicitud de Usuarios y Accesos
        <div><small class="text-muted">- SUA -</small></div>
      </h1>
      <hr>
      <div class="info-personal">
        <div class="form-row">
          <div class="col mb-4">
            <label for="validationTooltip01" class="col-sm-2 col-form-label">Nombres</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombres" required>
            <div class="invalid-feedback">
              Por favor ingrese los nombres del usuario
            </div>
          </div>
          <div class="col mb-4">
            <label for="validationTooltip02" class="col-sm-2 col-form-label">Apellidos</label>
            <input type="text" class="form-control" id="validationTooltip02" placeholder="Apellidos" required>        
            <div class="invalid-feedback">
              Por favor ingrese los apellidos del usuario
            </div>  
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-4">
            <label for="validationTooltip03" class="col-sm-2 col-form-label">Direcci&oacute;n/Unidad</label>
            <input type="text" class="form-control" id="validationTooltip03" placeholder="Direcci&oacute;n" required>
            <div class="invalid-feedback">
              Por favor ingrese la direcci&oacute;n a la que pertenece el usuario
            </div>
          </div>
          <div class="col mb-4">
            <label for="validationTooltip04" class="col-sm-2 col-form-label">Departamento</label>
            <input type="text" class="form-control" id="validationTooltip04" placeholder="Departamento">
          </div>
          <div class="col mb-4">
            <label for="validationTooltip05" class="col-sm-2 col-form-label">Puesto</label>
            <input type="text" class="form-control" id="validationTooltip05" placeholder="Puesto" required>
            <div class="invalid-feedback">
              Por favor ingrese el puesto del usuario
            </div>
          </div>        
        </div>
        <fieldset class="form-group" id="checkbox-renglon">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0"><b>Rengl&oacute;n:</b></legend>
            <div class="invalid-feedback">
              Por favor seleccione un rengl&oacute;n
            </div>
            <!-- Custom radios, pero solo deja seleccionar 1 -->
              <!-- <div class="custom-control custom-radio custom-control-inline col-md-2">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="011">
                <label class="custom-control-label" for="customRadioInline1">011</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline col-md-2">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="022">
                <label class="custom-control-label" for="customRadioInline1">011</label>
              </div>
               <div class="custom-control custom-radio custom-control-inline col-md-2">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="029">
                <label class="custom-control-label" for="customRadioInline1">011</label>
              </div>
               <div class="custom-control custom-radio custom-control-inline col-md-2">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="18">
                <label class="custom-control-label" for="customRadioInline1">011</label>
              </div> -->
              <!-- End custom radios -->

              <!-- Radios estándar -->
              <div class="col-sm-10">
                <div class="form-check form-check-inline col-md-3">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" required>
                  <label class="form-check-label" for="gridRadios1">
                    011
                  </label>                
                </div>
                <div class="form-check form-check-inline col-md-3">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    022
                  </label>
                </div>
                <div class="form-check form-check-inline col-md-3">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                  <label class="form-check-label" for="gridRadios3">
                    029
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                  <label class="form-check-label" for="gridRadios3">
                    Sub grupo 18
                  </label>
                </div>
              </div>
              <!-- Fin Radios estándar -->
            </div>
          </fieldset>
          <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Fecha de Inicio del Contrato</label>
            <div class="col mb-4">
              <input class="form-control" type="date" id="example-date-input" required>
              <div class="invalid-feedback">
                Por favor seleccione la fecha de inicio del contrato
              </div>
            </div>
            <label for="example-date-input" class="col-2 col-form-label">Fecha Final del Contrato</label>
            <div class="col">
              <input class="form-control" type="date" id="example-date-input" required>
              <div class="invalid-feedback">
                Por favor seleccione la fecha final del contrato
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="acceso-red">
          <h2>Solicitud de acceso a usuario de red</h2>
          <fieldset class="form-group" id="checkbox-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0"><b>Usuario de Red:</b></legend>
              <div class="form-check form-check-inline col mb-3">
                <input type="checkbox" class="form-check-input" id="customCheck1">
                <label class="form-check-label" for="customCheck1">Windows</label>
              </div>
              <div class="form-check form-check-inline col mb-3">
                <input type="checkbox" class="form-check-input" id="customCheck1">
                <label class="form-check-label" for="customCheck1">Internet</label>
              </div>
              <div class="form-check form-check-inline col mb-3">
                <input type="checkbox" class="form-check-input" id="customCheck1">
                <label class="form-check-label" for="customCheck1">Correo Electrónico</label>
              </div>
            </fieldset>
          </div>
          <hr>
          <div class="acceso-sistemas">
            <h2>Solicitud de acceso a sistemas</h2>
            <fieldset class="form-group" id="checkbox-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0" id="almacen"><b>Sistema de Almacén</b></legend>
                <div class="form-check form-check-inline col mb-3">
                  <input type="checkbox" class="form-check-input" id="customCheck1">
                  <label class="form-check-label" for="customCheck1">Rol solicitante</label>
                </div>
                <div class="form-check form-check-inline col mb-3">
                  <input type="checkbox" class="form-check-input" id="customCheck1">
                  <label class="form-check-label" for="customCheck1">Rol aprobador</label>
                </div>
              </fieldset>
              <fieldset class="form-group" id="checkbox-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0"><b>Sistema de Access:</b></legend>
                  <div class="form-check form-check-inline col mb-3">
                    <input type="checkbox" class="form-check-input" id="customCheck1">
                    <label class="form-check-label" for="customCheck1">Expedientes</label>
                  </div>
                  <div class="form-check form-check-inline col mb-3">
                    <input type="checkbox" class="form-check-input" id="customCheck1">
                    <label class="form-check-label" for="customCheck1">Inventarios</label>
                  </div>
                </fieldset>
                <fieldset class="form-group" id="checkbox-group" required>
                  <div class="row">
                    <legend class="col-form-label col-sm-2"><b>Portal Institucional del área asignada:</b></legend>
                    <div class="form-check form-check-inline col mb-3">
                      <input type="checkbox" class="form-check-input" id="customCheck1">
                      <label class="form-check-label" for="customCheck1">Editar, publicar y eliminar información del área en la que se encuentra</label>
                    </div>
                    <div class="form-check form-check-inline col mb-3">
                      <input type="checkbox" class="form-check-input" id="customCheck1">
                      <label class="form-check-label" for="customCheck1">Editor de información publicada</label>
                    </div>
                    <div class="form-check form-check-inline col mb-3">
                      <input type="checkbox" class="form-check-input" id="customCheck1">
                      <label class="form-check-label" for="customCheck1">Publicar información</label>
                    </div>
                  </fieldset>
                  <hr>
                </div>
                <div class="d-flex">
                  <button class="btn btn-primary ml-auto" type="submit" id="bttn">Enviar Formulario</button>
                </div>
              </form>
            </main>
            <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
              <div class="container text-center">
                <small>Copyright © Ministerio de Econom&iacute;a</small>
              </div>
            </footer>
          </body>
          <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</html>