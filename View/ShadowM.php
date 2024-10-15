<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="Css/ShadowM.css" />
    <title>Shadow Manga</title>
  </head>
  <body>


    <div class="paentro">
      <section>
        <nav>
          <input type="checkbox" id="check" />
        <!--aporte tipo checkbox id(identificación) como check-->
        <label for="check" class="checkbtn">
          <!--etiqueta para verificar con la calse "checkbtn"-->
          <i class="fa-solid fa-bars"></i>
        </label>
        <a href="index.php" class="enlace">
          <img src="../View/Assets/img/SAZPaperBros.logo.jpg" class="logo" />
        </a>
        <ul>
          <li>
          <li>
            <a class="active" href="index.php">INICIO</a>
          </li>
          <!--lista de clase "active" enlace a (Inicio)-->
          <li>
            <div class="dropdown-item"><a href="menu4">CLASIFICACIONES</a>
              <div class="menu4">
              <ul>
                <li><a href="../View/ShadowC.php">SHADOW COFFEE</a></li>
                <li><a href="../View/ShadowG.php">SHADOW GAMER</a></li>
                <li><a href="../View/ShadowM.php">SHADOW MANGA</a></li>
                <li><a href="../View/ShadowP.php">SHADOW PAPER</a></li>
              </ul>
              </div>
            </div>
            </li>
            <!--lista de clase "active" enlace a (Clasificaciones)-->
          </li>
          <li>
            <div class="dropdown-item"><a href="#">COMUNIDAD</a>
              <div class="menu4">
              <ul>
                <li><a href="#">¿QUE HAY DE NUEVO?</a></li>
                <li><a href="#">CONTENIDO</a></li>
                <li><a href="#">ACERCA</a></li>
              </ul>
              </div>
            </div>
          </li> <!--lista de clase "active" enlace a (Comunidad)-->
          <li>
            <div class="dropdown-item"><a href="menu4">MÁS</a>
              <div class="menu4">
              <ul>
                <li><a href="#">¿COMO FUNCIONA?</a></li>
                <li><a href="#">INFO</a></li>
                <li><a href="#">OPCIONES</a></li>
              </ul>
              </div>
            </div>
          <!--lista de clase "active" enlace a (Más)-->
          <li>
            <div class="dropdown-item"><a href="menu4">ATENCIÓN</a>
              <div class="menu4">
              <ul>
                <li><a href="#">USUARIO</a></li>
                <li><a href="#">FAVORITOS</a></li>
              </ul>
              </div>
            </div>
          </li>
          <!--lista de clase "active" enlace a (Atención)-->
        </ul>
        </nav>
        <article> 
            <div class="kami"></div>
          </article>
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
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Discord</a></li>
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
    </div>
  </body>
</html>