<?php

  function formularioCiclistas(){
    $title = "Agregar corredor";

?>


  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

      <title><?php  echo $title ?></title>
    </head>
    <body>
      <h1><?php  echo $title ?></h1>

      <div class="container">
      <form action="insert" method="post">
          <div class="form-group">
            <label for="corredor">Corredor</label>
            <input class="form-control" id="corredor" name="input_corredor" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Nombre y apellido del corredor</small>
          </div>
          <div class="form-group">
            <label for="equipo">Equipo</label>
            <input class="form-control" id="equipo" name="input_equipo"> 
          </div>
          <div class="form-group">
          <label for="input_division">Categoria del equipo:</label>
            <select name="input_division" id="catEquipos" >
              <option value="Word-Tour">Word Tour</option>
              <option value="ContPro">Continental Pro</option>
              <option value="Continental">Continental</option>
            </select>
          </div>
          <div class="form-group">
          <label for="especialidad">Especialidad</label>
            <select  id="especialidad"  name="input_especialidad" >
              <option value="Vuelta por etapas">Vuelta por etapas</option>
              <option value="Sprinter">Sprinter</option>
              <option value="Clasicomano">Clasicomano</option>
              <option value="Escalador">Escalador</option>
              <option value="Gregario">Gregario</option>
            </select>
          </div>
          <div class="form-group">
              <label for="edad">Edad</label>
              <input class="form-control" id="edad"  name="input_edad">
          </div>
          
          <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
      </div>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
  </html>

<?php } ?>
