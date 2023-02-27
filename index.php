<?php

session_start();

if(isset($_POST['submit'])){
  // Verificar el valor del captcha
  if($_POST['captcha_code'] == $_SESSION["captcha_code"]){
      $message = '<p id="msg">CORRECTO</p>';

  }else{
      // Captcha es incorrecto
      $message = '<p id="msg">INCORRECTO</p>';
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/estilos.css">
    <link rel="stylesheet" href="/login-de-banco/main.js">
    <title>Login de usuario</title>
  </head>
  
  

  <body>
  <div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4 text-center p-5 estiloh3">BANCA POR INTERNET</h3>
  
        
              <form action="" method="post">

                <div class="formulario-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bcp" id="borrar">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Persona
                    </label>
                  </div>
                  <div class="form-check mb-3 formulario2">
                    <input class="form-check-input" type="radio" name="bcp" id="empresa" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Empresa
                    </label>
                  </div>

                </div>
                


                <div class="input-group mb-5">
                  <div class="input-group-prepend">
                    <select class="form-select" id="basic-addon1">
                    <option value="1">DNI</option>
                    <option value="2">CE</option>
                    <option value="3">PAS</option>
                  </select>
                  </div>
                  <input type="text" class="form-control" placeholder="Nro Documento" aria-label="Username"  aria-describedby="basic-addon1" required="required" maxlength="8" onkeypress= "return solonumeros(event) ">
                </div>
                  

                <div class="form-floating mb-5 ">
                  <input type="text" class="form-control" placeholder="Usuario" name="numeroDocumento"  id="numeroDocumento"  required="required" maxlength="19"  onkeypress= "return solonumeros(event)" >
                  <label for="usuario">Numero de Tarjeta</label>
                </div>

                <div class="form-check mb-5">
                  <input class="form-check-input" type="checkbox" name="#" id="input">
                  <label class="form-check-label" for="gridCheck1">
                    Recordar Datos
                  </label>
                </div>



                <div class="form-floating mb-5">
                  <input type="password" id="number-input" on-screen-keyboard="true" onfocus="showKeyboard()" class="form-control" required="required" name="password" id="password" placeholder="Password"  onkeypress= "return solonumeros(event)" >
                  <label for="number">Clave de 6 Digitos</label>
                  <div id="keyboard-container" style="display: none;">
                   <table maxlength="6">
                      <tr>
                        <td><button onclick="document.getElementById('number-input').value += '1'">1</button></td>
                        <td><button onclick="document.getElementById('number-input').value += '2'">2</button></td>
                        <td><button onclick="document.getElementById('number-input').value += '3'">3</button></td>
                      </tr>
                      <tr>
                        <td><button onclick="document.getElementById('number-input').value += '4'">4</button></td>
                        <td><button onclick="document.getElementById('number-input').value += '5'">5</button></td>
                        <td><button onclick="document.getElementById('number-input').value += '6'">6</button></td>
                      </tr>
                      <tr>
                        <td><button onclick="document.getElementById('number-input').value += '7'">7</button></td>
                        <td><button onclick="document.getElementById('number-input').value += '8'">8</button></td>
                        <td><button onclick="document.getElementById('number-input').value += '9'">9</button></td>
                      </tr>
                      <tr>
                        <td><button onclick="document.getElementById('number-input').value = ''">C</button></td>
                        <td><button onclick="document.getElementById('number-input').value += '0'">0</button></td>
                        <td><button onclick="document.getElementById('number-input').value = document.getElementById('number-input').value.slice(0, -1)">Eliminar</button></td>
                      </tr>
                    </table>
                  </div>

                  <script>
                  function showKeyboard() {
                    var keyboard = document.getElementById("keyboard-container");
                    keyboard.style.display = "block";
                  }
                  </script>
                </div>
                <div class="form-group mb-1">
                            <img src="captcha_gen.php" />
                            <input type="text" name="captcha_code" class="form-control mb-3 "  autocomplete="off"/>
                            
                              <a href="" id="cl" class="cambiar">Cambiar</a>
                            
                            <input type="submit" name='submit' value="submit" id="st" class="btn btn-outline-warning probarc " />                          
                            <p id="show" style="text-align:center;">
                            <?php
                                if(isset($message)){
                                    echo $message;
                                }else{

                                }
                                session_unset();
                             ?></p>
                 </div>
                              <script>
                                          console.log("error");

                                          $(document).ready(function(){

                                            $("#st").on('click',function(){
                                                    $("#msg").css('display','block');

                                                });
                                                $("#cl").on('click',function(){

                                                      location.reload();
                                                });


                                          });
                                </script>

                <div class="d-grid mb-1">
                  <button type="submit" class="btn btn-primary btn-lg btn-block botton">Continuar</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>    
    <script src="/js/empresa.js""></script>         
    <script src="/js/validaciones.js"></script>  
  </body>
</html>