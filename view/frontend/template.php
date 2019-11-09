<!DOCTYPE html>
<html>
    <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="">
	  <meta name="author" content="">

        <title><?= $title ?></title>
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="public/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="../public/images/icon.jpg"/>
  <link href="https://fonts.googleapis.com/css?family=Clicker+Script&display=swap" rel="stylesheet">



  

    </head>
        
    <body>

    	<!--Top-Bar-->
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">ACCUEIL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="#">Jean Forteroche </a>
      </li>
      <li class="nav-item">
        <a href="index.php?action=admin"class="nav-link">Espace Administration</a>
      </li>

    </ul>
 
  </div>
</nav>




        <div><?= $content ?></div>



        
<footer  id="footer">
            <div class="container">
                <div class="row text-center d-flex justify-content-center">
                    <div class="col-md-12 ">
                        <a href="">A propos</a>  
                        <a href="mailto:J-Forteroche@Caramail.fr">Contact</a>  
                        <a href="MentionsLegales.php">Mentions légales</a>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
                <span>©<script>document.write(new Date().getFullYear());</script>

            Erwan RIVET - basé sur un template <a href="https://bootswatch.com/sketchy/" target="_blank">sketchy bootswatch </a>
                </span>
            </div>
        </footer>
  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.js"></script>
  <script src="public/js/popup.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='vendor/tinymce/js/tinymce/tinymce.min.js' referrerpolicy="origin"></script>
 <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>

    </body>
</html>