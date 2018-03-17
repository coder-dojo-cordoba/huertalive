<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="google-signin-client_id" content="820318990187-85tc46djiurr5c8poobe510sv23n1mm7.apps.googleusercontent.com">


    <title>HuertaLive | Home</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #1C2331;
        }
        
        footer.page-footer {
            background-color: #1C2331;
            margin-top: -1px;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("img/fondo.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

</head>

<body class="banneroscuro">

    <!--Navbar-->
    <!--Hola :v-->
    <nav class="navbar navbar-toggleable-md navbar-dark scrolling-navbar success-color-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img style=" width: 20%; margin-top: ;" src="img/logo4.png">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a href="categoria.php" class="nav-link">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Paises</a>
                    </li>
                   
                </ul>
                
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
	    
	    

   

    <!--Mask-->
    <div class="view hm-black-strong banneroscuro">
        <div class="full-bg-img flex-center">
            <ul class="animated fadeInUp">
                <li>
                   <center><img style=" width: 40%; margin-top: -40px;" src="img/logo4.png"></center>
                <li>
                    <p><strong>Crea tu propia huerta en casa!</strong></p>
                </li>
                <li>
                   <center><div class="g-signin2" data-onsuccess="onSignIn"></div></center>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only success-color-dark">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 offset-lg-1 hidden-lg-down">
                    <img style=" width: 80%; margin-top:-4px; margin-left: -17px;" src="img/logo4.png">
                    <p>Crea tu huerta en casa guiandote desde aquí</p>

                    <p>Versíon: 0.1.1</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                

            </div>

        </div>
           <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
              <strong>CoderDojo 2017</strong>

            </div>
        </div>

     
        <!--/.Copyright-->

    </footer>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript">
function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
</script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script></center>                 



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>