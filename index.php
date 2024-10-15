<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="CSS/index.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    /> <!--Media Queri menu-->
    <title>S.A.Z PAPER BROS</title>
  </head>
  <body>
    <section>
      <nav>
        <input type="checkbox" id="check" />
      <!--aporte tipo checkbox id(identificación) como check-->
      <label for="check" class="checkbtn">
        <!--etiqueta para verificar con la calse "checkbtn"-->
        <i class="fa-solid fa-bars"></i>
      </label>
      <a href="../View/ASSOCIATION_SAZP.php" class="enlace">
        <img src="../View/Assets/img/SAZPaperBros.logo.jpg" class="logo" />
      </a>
      <ul>
        <li>
            <li>
              
                <a class="active" href="/index.php">INICIO</a>

                  
             </li>
             <!--lista de clase "active" enlace a (Inicio)-->
             <li>
              <li>
                    <a href="../View/REGISTER.php">REGISTRATE</a>
              
              </li>
          </li>
          <!--REGISTER/****************************************-->
          <li>
            <li>
                  <div class="dropdown-item"><a href="../View/LOGIN.php">LOGIN</a>
                  </div>
            </li>
        </li>
          <!--LOGIN/*******************************************-->
             <li>
                  <div class="dropdown-item"><a href="menu">CLASIFICACIONES</a>
                    <div class="menu">
                         <ul>
                            <li><a href="ShadowC.php">SHADOW COFFEE</a></li>
                            <li><a href="ShadowG.php">SHADOW GAMER</a></li>
                            <li><a href="ShadowM.php">SHADOW MANGA</a></li>
                            <li><a href="ShadowP.php">SHADOW PAPER</a></li>
                            <li><a href="Productos.php">PRODUCTOS</a></li>
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
      <main> <!--*****************************************************************************************************-->
          <article class="article">
          <h2>Bienvenido usuario a Shadow Association Zone PaperBros</h2>

          <div class="slider-frame">
            <ul>
              <li><img src="Index/imagemnes(C).jpg" alt="" class="juventus1"></li>
              <li><img src="Index/imagenes(G).jpg" alt="" class="juventus1"></li>
              <li><img src="Index/imagen(p).jpg" alt=""class="juventus1"></li>
              <li><img src="shadowIMGmanga/opex.png" alt=""class="juventus1"></li>
            </ul>
          </div>
        </article>
        <!--*************************************************************-->
      </main>
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
