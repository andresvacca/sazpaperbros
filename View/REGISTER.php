<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="Css/REGISTER.css">
    <title>Formulario Registro</title>
    <style>
      body{
        background-image: url("img/Shivumeo.png");
      }
    </style>
  </head>
  <nav>
    <label for="check" class="checkbtn">
      <i class="fa-solid fa-bars"></i>
    </label>
    <a href="/Html/ASSOCIATION_SAZP.html" class="enlace">
      <img src="../View/Assets/img/SAZPaperBros.logo.jpg" class="logo" />
    </a>
    <ul>
      <li>
          <li>
            
              <a class="active" href="index.html">INICIO</a>
  
                
           </li>
           <!--lista de clase "active" enlace a (Inicio)-->
           <li>
            <li>
                  <a href="REGISTER.html">REGISTRATE</a>
            
            </li>
        </li>
        <!--REGISTER/****************************************-->
        <li>
          <li>
                <div class="dropdown-item"><a href="LOGIN.html">LOGIN</a>
                </div>
          </li>
      </li>
        <!--LOGIN/*******************************************-->
           <li>
                <div class="dropdown-item"><a href="menu">CLASIFICACIONES</a>
                  <div class="menu">
                       <ul>
                          <li><a href="../View/ShadowC.html">SHADOW COFFEE</a></li>
                          <li><a href="../View/ShadowG.html">SHADOW GAMER</a></li>
                          <li><a href="../View/ShadowM.html">SHADOW MANGA</a></li>
                          <li><a href="../View/ShadowP.html">SHADOW PAPER</a></li>
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
  <body>
    <section class="form-register">
        <h4>Formulario Registro</h4 >    
<br>
          <input class="controls"
          type="text" 
          name="Ingrese Nombres" 
          id="Ingrese Nombres" 
          placeholder="Ingrese Nombres" 
          />
<br>
          <input class="controls"
            type="text"
            name="Ingrese Apellidos"
            id="Ingrese Apellidos"
            placeholder="Ingrese Apellidos"
          />
<br>
          <input class="controls"
            type="text"
            name="Ingrese Documento"
            id="Ingrese Documento"
            placeholder="Ingrese documento"
          />
<br>
          <input class="controls"
            type="email"
            name="Ingrese Correo"
            id="Ingrese Correo"
            placeholder="Ingrese Correo electronico"
          />
<br>
          <input class="controls"
            type="password"
            name="Confirmar Contraseña"
            id="Confirmar Contraseña"
            placeholder="Confirmar Contraseña"
          />
        <br>
<br>
      <p>Estoy de acuerdo <a href="#">Terminos y Condiciones </p>
        <a hre  f="INTRODUCCION.html"><input class="botons" type="submit" value="Registrar"></a>
          <p>
      <a href="LOGIN.html">¿Ya estas registrado?</a>
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
