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
        <div class="tiempo" id="countdown">
                <script>
                        var seconds = 120;
                        document.getElementById("countdown").innerHTML = "Esta página se cerrará en " + seconds + " segundos.";
                        var countdown = setInterval(function() {
                            seconds--;
                            document.getElementById("countdown").innerHTML = "Esta página se cerrará en " + seconds + " segundos.";
                            if (seconds == 0) {
                            clearInterval(countdown);
                            location.href= "index2.html";
                            }
                        }, 1000);
                        </script>
            </div>
            <div class="inicio">
             <button class="botoninicio">
                <span>
                    <a href="index2.html">Inicio</a>  
                </span>
            </button>
                        
            </div>
            
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

              

                <div class="form-check  mb-5">
                  <input class="form-check-input check" type="checkbox" name="#" id="input">
                  <label class="form-check-label" for="gridCheck1">
                    Recordar Datos
                  </label>
                </div>



                <div class="form-floating mb-5">
                  
                  <input type="text" id="clave" maxlength="6"  
                       name="Clave"  on-screen-keyboard="true" onfocus="showKeyboard()" class="form-control" required="required" name="password" id="password" placeholder="Password"  onkeypress= "return solonumeros(event)" >
                  <label for="clave">Clave de 6 Digitos</label>

                 
                  
                  <script>


document.addEventListener("DOMContentLoaded", () => {
  const input = document.getElementById("clave");
  let elementAdded = false;
  let grid = null;

  input.addEventListener("click", (e) => {
    if (!elementAdded) {
      e.preventDefault();
      const parentDiv = document.createElement("div");
      e.target.value = "";
      const numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
      parentDiv.classList.add("grid");

      for (let i = 1; i <= 10; i++) {
        const random = document.createElement("div");
        random.id = "random";
        random.textContent = numbers[i - 1];
        random.addEventListener("click", function () {
          let clave = document.getElementById("clave");
          if (clave.value.length < 6) {
            clave.value += this.textContent;
          }
        });

        parentDiv.appendChild(random);
      }

      const newInput = document.getElementById("clave");
      const parentNode = newInput.parentNode;
      parentNode.insertBefore(parentDiv, newInput.nextSibling);
      elementAdded = true;
    }
  });
});

                                          </script>
                                          
                </div>
                <div class="form-group mb-1">
                            <img src="captcha_gen.php" />
                            <input type="text" name="captcha_code" class="form-control mb-3 "  autocomplete="off"/>
                            
                              <a href="" id="cl" class="cambiar">Cambiar</a>
                            
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
                  <button type="submit" class="botton">Continuar</button>
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