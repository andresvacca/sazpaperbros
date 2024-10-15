<?php
    

?>




<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <link rel="stylesheet" href="../View/Assets/Css/LOGIN.css">
    <title>Formulario login</title>
      <link rel="shortcut icon" href="ajustes.ico">
          <style>
            body{
              background-image: url("img/Cazado.png");
            }
          </style>
  </head>
  <nav>
  <label for="check" class="checkbtn">
    <i class="fa-solid fa-bars"></i>
  </label>
  <a href="../View/ASSOCIATION_SAZP.php" class="enlace">
    <img src="../View/Assets/img/SAZPaperBros.logo.jpg" class="logo" />
  </a>
  <ul>
    <li>
        <li>
          
            <a class="active" href="../index.php">INICIO</a>

              
         </li>
         <!--lista de clase "active" enlace a (Inicio)-->
         <li>
          <li>
                <a href="REGISTER.php">REGISTRATE</a>
          
          </li>
      </li>
      <!--REGISTER/****************************************-->
      <li>
        <li>
              <div class="dropdown-item"><a href="LOGIN.php">LOGIN</a>
              </div>
        </li>
    </li>
      <!--LOGIN/*******************************************-->
         <li>
              <div class="dropdown-item"><a href="menu">CLASIFICACIONES</a>
                <div class="menu">
                     <ul>
                        <li><a href="../View/ShadowC.php">SHADOW COFFEE</a></li>
                        <li><a href="../View/ShadowG.php">SHADOW GAMER</a></li>
                        <li><a href="../View/ShadowM.php">SHADOW MANGA</a></li>
                        <li><a href="../View/ShadowP.php">SHADOW PAPER</a></li>
                        <li><a href="Productos.html">PRODUCTOS</a></li>
                     </ul>
                </div>
              </div>
        </li>
    </li>
        <!--lista de clase "active" enlace a (Clasificaciones)-->
    <li>
        <li>
              <div class="dropdown-item"><a href="#">COMUNIDAD</a>
                <div class="menu">
                     <ul>
                        <li><a href="#">¿QUE HAY DE NUEVO?</a></li>
                        <li><a href="#">CONTENIDO</a></li>
                        <li><a href="#">ACERCA</a></li>
                     </ul>
                </div>
              </div>
         </li>
    </li>
        <!--lista de clase "active" enlace a (Comunidad)-->
    <li>
        <li>
              <div class="dropdown-item"><a href="menu">MÁS</a>
                <div class="menu">
                     <ul>
                        <li><a href="#">¿COMO FUNCIONA?</a></li>
                        <li><a href="#">INFO</a></li>
                        <li><a href="#">OPCIONES</a></li>
                     </ul>
                </div>
              </div>
        </li>
    </li>
        <!--lista de clase "active" enlace a (Más)-->
    <li>
        <li>
              <div class="dropdown-item"><a href="menu">ATENCIÓN</a>
                <div class="menu">
                     <ul>
                        <li><a href="#">USUARIO</a></li>
                        <li><a href="#">FAVORITOS</a></li>
                     </ul>
                </div>
              </div>
        </li>
    </li>
        <!--lista de clase "active" enlace a (Atención)-->
      </ul>
  </nav>
<!---->
  <body>
      <section class="form-login">
        <h4>Iniciar sesion</h4>
        <form action="INTRODUCCION.html"method="GET">

      <input  
             class="controls"
             type="text" 
             name="usuario" 
             value="" 
             id="Usuario"
              placeholder="Usuario" 
              required />
          </br>
      <input 
             class="controls" 
             type="password" 
             name="Contraseña"
             id="Contraseña" 
             placeholder="Contraseña" 
             required />
           </br>  
      <input 
          class="buttom" 
          type="submit" 
          id="boton"
          value="ingresar" />
        </form>
          <br>
          <p>
          <a href="REGISTER.html">
          Registrate aqui
          </a>
          </p>
          <br>
          <p>
          <a href="#">
          ¿olvidaste tu contraseña?
           </a>
          </p>
         </section>

         <footer class="footer">
          <div class="container">
            <div class="footer-row">
              <div class="footer-links">
                <h4>NUESTRA PAGINA</h4>
                <ul>
                  <li><a href="#">Quienes somos</a></li>
                  <li><a href="#">Como funcionamos</a></li>
                  <li><a href="#">Que hacemos</a></li>
                  <li><a href="#">Eventos</a></li>
                </ul>
              </div>
              <div class="footer-links">
                <h4>CONTACTOS</h4>
                <ul>
                  <li><a href="#">Movil</a></li>
                  <li><a href="#">Gmail</a></li>
                  <li><a href="#">Afiliados</a></li>
                  <li><a href="#">Asociados</a></li>
                </ul>
              </div>
              <div class="footer-links">
                <h4>GRUPOS</h4>
                <div class="social-link">
                <ul>
                  <li><a href="https://chat.whatsapp.com/L9scjarIbBg2Q3drcOYrRg">WhatsApp</a></li>
                  <li><a href="https://discord.gg/ngyHaQ6B">Discord</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Facebook</a></li>
                </ul>
                </div>
              </div>
              <div class="footer-links">
                <h4>CLASIFICACIONES</h4>
                <ul>
                  <li><a href="#">Pais</a></li>
                  <li><a href="#">Sugerencias</a></li>
                  <li><a href="#">Politicas de privacidad</a></li>
                  <li><a href="#">Nuestros servicios</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
  </body>
</html>
