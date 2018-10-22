<!DOCTYPE html>
<html class="no-js"> 
<head>
     <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ilmiglioravvocato.it</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="keywords" content="ilmiglioravvocato.it,avvocato,trova avvocato,cerco avvocato,trova,cerca,lawyers,miglior avvocato,aiuto avvocati" />
      <meta name="description" content="Ilmiglioravvocato.it il portale analizza il tuo caso e trova l'avvocato perfetto per te.Ti serve un avvocato? descrivici il tuo caso." />
   


<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>

<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="css/superfish.css">

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/miostile.css">
<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <div id="fh5co-header">
              <header id="fh5co-header-section">
                    <div class="container">
                       @include ('navbar')
                    </div>
                </header>       

                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-12 text-center">
          <h1>Inserisci le credenziali</h1>
                  <div class="form-group">
              <label for="exampleInputEmail1">Indirizzo email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
        
      </div>
    </div>
  </div>
</div>


            </div>
            @yield('content')
             <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row"><a name="about">
                            <div class="col-md-4 col-sm-12 animate-box">
                                <h3 class="section-title">Chi siamo</h3>
                                <p><b><i><a></a>"Ilmiglioravvocato.it" e' un progetto nato nel novembre del 2017 durante un progetto di alternanza scuola-lavoro presso l'istituto tecnico economico Lenoci a Bari. Due ragazzi,<a href="http://lucaalbergo.altervista.org/"> Luca Albergo</a> e <a href="http://giovannitempesta.altervista.org/">Giovanni Tempesta</a>, hanno deciso di far diventare questa semplice idea un prodotto finale.</i></b></p>
                            </div></a>

                            <div class="col-md-4 col-sm-12 animate-box">
                                <h3 class="section-title">Contatti</h3>
                                <ul class="contact-info">
                                    <li><i class="icon-map-marker"></i>Bari,BA</li>
                                    <li><i class="icon-phone"></i>+39 328 219 4238</li>
                                    <li><i class="icon-envelope"></i> <a href="mailto:ilmiglioravvocato@gmail.com">INFO: ilmiglioravvocato@gmail.com</a></li>
                                    <li><i class="icon-globe2"></i><a href="#">www.ilmiglioravvocato.it</a></li>
                                </ul>
                            </div>
                            <a name="contatti"><div class="col-md-4 col-sm-12 animate-box">
                                <h3 class="section-title">Sei un avvocato? <br>Mandaci la tua richiesta d'iscrizione</h3>

                                <form class="contact-form">
                                    <div class="form-group">
                                        <label for="name" class="sr-only">Nome</label>
                                        <input type="name" class="form-control" id="name" placeholder="Nome">
                                    </div>
                                     <div class="form-group">
                                        <label for="name" class="sr-only">Cognome</label>
                                        <input type="name" class="form-control" id="surname" placeholder="Cognome">
                                    </div>
                                       <div class="form-group">
                                        <label for="name" class="sr-only">Citta</label>
                                        <input type="name" class="form-control" id="city" placeholder="Citta'">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="sr-only">Descrizione</label>
                                        <textarea class="form-control" id="message" rows="7" placeholder="Descrizione"></textarea>
                                    </div>

                                    <div class="form-group">
                                        PDF-curriculum<input type="file" name="file1">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" id="btn-submit" class="btn btn-send btn-md" value="Presto disponibile">
                                    </div>
                                </form>
                            </div></a>
                        </div>
                        <div class="row copy-right">
                            <div class="col-md-6 col-md-offset-3 text-center">
                                <p class="fh5co-social-icons">
                                    <a href="https://twitter.com/ilmiglioravvoc1"><i class="icon-twitter2"></i></a>
                                    <a href="https://www.facebook.com/ilmiglioravvocato.it"><i class="icon-facebook2"></i></a>
                                    <a href="https://www.instagram.com/ilmiglioravvocato.it/"><i class="icon-instagram"></i></a>
                                    
                                
                                </p>
                                <p>Copyright 2018. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>

</body>
</html>
