<!DOCTYPE html>
<html class="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cierto Global</title>
    <meta name="description" content="Cierto Global Org">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" href="styles/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  </head>
  <body>
    <div class="page">
      <div class="barra">
        <div class="container-fluid">
          <div class="row">
            <div class="columna col-sm-1 col-md-1 col-xs-3 visible-xs visible-sm">
              <div class="menu" id="nav-icon0" onclick="openNav()">
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-sm-2 col-xs-9 col-md-2">
              <div class="cuadrito pull-left hidden-xs hidden-sm">
                &nbsp;
              </div>
              <div class="logo">
                <a href="index.php"><img class="img-responsive" src="img/logo.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-10">
                <nav class="circle hidden-sm hidden-xs text-right">
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Service</a></li>
                    <li><a href="training.php">Training</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="admin">Access</a></li>
                    <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Languages <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="contacto.php">Spanish</a></li>
                        <li><a href="contact.php">English</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>

          </div>
        </div>
      </div>

      <div class="menu">
        <div id="myNav" class="overlay">
          <!-- Button to close the overlay navigation -->
          <div class="container-fluid">
            <div class="row">
              <div class="columna col-sm-1 col-xs-3">
                <div class="menu" style="background: transparent;">
                  <i class="fa fa-times fa-3x pull-left" onclick="closeNav()" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Overlay content -->
          <div class="overlay-content container-fluid">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                <a href="index.php">Home</a>
          	    <a href="about.php">About</a>
                <a href="services.php">Service</a>
                <a href="training.php">Training</a>
                <a href="team.php">Team</a>
                <a href="contact.php">Contact</a>
                <a href="admin">Access</a>
                <li class="dropdown"><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Languages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="contacto.php">Spanish</a></li>
                    <li><a href="contact.php">English</a></li>
                  </ul>
                </li>

              </div>
            </div>

          </div>

        </div>
      </div>










      <section class="seccion contacto">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 fondo">
              <div class="row" style="position: absolute; bottom: 50vh; width: 100%;">
                <div class="col-sm-4 col-sm-offset-4 col-xs-6 colxs-offset-3">
                  <img src="images/ciertocontacto.png" class="img-responsive" alt="" style="width: 100%">
                </div>
              </div>
              <div class="row">

              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="sep-bottom-2x contactform" style="background: #f5f5f5;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 sep-top-2x">
              <div >
                <h3 class=" wow bounceInLeft">CONTACT</h3>
                <p>&nbsp;</p><p>&nbsp;</p>
                <h4 class=" wow bounceInLeft">CIERTO GLOBAL</h4>
                <p class="sep-top-xs wow bounceInLeft">
                  For questions, please send us a message and we will get back to you promptly.
                </p>
                <p>&nbsp;</p><p>&nbsp;</p>
              </div>
            </div>
            <div class="col-md-offset-1 col-md-8 sep-top-2x wow bounceInRight">

              <div class="contact-form">
                <div id="successMessage" style="display:none" class="alert alert-success text-center">
                  <p><i class="fa fa-check-circle fa-2x"></i></p>
                  <p>Gracias por enviar tu mensaje, en breve nos pondremos en contacto.</p>
                </div>
                <div id="failureMessage" style="display:none" class="alert alert-danger text-center">
                  <p><i class="fa fa-times-circle fa-2x"></i></p>
                  <p>Hubo un problema enviando tu mensaje. Por favor, prueba de nuevo.</p>
                </div>
                <div id="incompleteMessage" style="display:none" class="alert alert-warning text-center">
                  <p><i class="fa fa-exclamation-triangle fa-2x"></i></p>
                  <p>Porfavor llena los campos antes de enviar.</p>
                </div>
                <form id="contactForm" action="php/contact.php" method="post" class="form-gray-fields validate">
                  <div class="row">
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="name" class="upper">Name (s)</label>
                        <input id="name" type="text" name="senderName" class="form-control input-lg required">
                      </div>
                    </div>
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="phone" class="upper">Last name (s)</label>
                        <input id="company" type="text" name="senderLastName" class="form-control input-lg required">
                      </div>
                    </div>
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="email" class="upper">E-mail</label>
                        <input id="email" type="email" placeholder="yourmail@example.com" name="senderEmail" class="form-control input-lg required email">
                      </div>
                    </div>
                    <div class="col-md-6 sep-top-xs">
                      <div class="form-group">
                        <label for="phone" class="upper">Telephone</label>
                        <input id="phone" type="text" name="phone" class="form-control input-lg required">
                      </div>
                    </div>
                  </div>
                  <div class="row">


                  </div>
                  <div class="row">
                    <div class="col-md-12 sep-top-xs">
                      <div class="form-group">
                        <label for="comment" class="upper">Message</label>
                        <textarea id="comment" placeholder="Write here" rows="9" name="comment" class="form-control input-lg required"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 sep-top-xs">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>&nbsp;Send</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7664.1666911820585!2d-122.4443420593239!3d47.22260620019326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490ff8cb23f7b23%3A0xff4a0d7aacf3cf81!2sTacoma%2C+Washington+98419%2C+EE.+UU.!5e0!3m2!1ses-419!2smx!4v1508202344566" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe-->


      <section class="seccion footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Menu</h3>
              <br>
              <p>
                <a href="index.php">CIERTO</a><br>
                <a href="about.php">About</a><br>
                <a href="services.php">Service</a><br>
                <a href="training.php">Training</a><br>
                <!--a href="team.php">Team</a><br-->
                <a href="contact.php">Contact Us</a><br>
                <a href="admin">Access</a><br>
                <a href="privacy.php">Privacy Notice</a>
              </p>
            </div>
            <div class="col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Sections</h3>
              <br>
              <p>
                <a href="about.php#wmud">What makes us different</a><br>
                <a href="about.php#yp">Your partners in successfully recruiting a quality workforce</a><br>
                <a href="about.php#wsc">What search CIERTO?</a><br>
                <a href="services.php#ktph2a">Know the program H2A</a><br>
                <a href="training.php">Our Training</a><br>
              </p>
            </div>
            <div class="col-sm-offset-4 col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>Data</h3>
              <br>
              <p>
                <a href="#"> Av. Coyoacán 1622. Edificio 4. Piso 2. Interior A. Colonia del Valle. Delegación Benito Juárez. CDMX, México. C.P. 03100.</a><br>
                <a href="#">Tel: (55) 47744880.</a><br>
              </p>
            </div>
            <div class="col-sm-2 col-xs-12">
              <p class="visible-xs">&nbsp;</p>
              <h3>&nbsp;</h3>
              <br>
              <p>

                <a href="#">P.O. Box 8157  </a><br>
                <a href="#">Tacoma, WA 98419</a><br>
                <a href="mailto:info@ciertoglobal.org">info@ciertoglobal.org</a><br>
                <a href="https://www.facebook.com/ciertoglobal/" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="mailto:info@ciertoglobal.org" target="_blank"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a><br>
              </p>
            </div>
          </div>
        </div>
      </section>


    </div>









    <script src="scripts/vendor/wow.min.js"></script>
    <script src="scripts/vendor/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
