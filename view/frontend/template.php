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
      <link href="public/css/admin.css" rel="stylesheet" /> 

      <link rel="shortcut icon" type="image/png" href="../public/images/jean.jpg"/>
      <link href="https://fonts.googleapis.com/css?family=Clicker+Script&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    </head>
        
    <body >
    <div class='row'>
       	<!--Top-Bar-->
         <nav class="navbar navbar-expand-lg navbar-light bg-light col-lg-12">
            <a class="navbar-brand" href="index.php">ACCUEIL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarColor03">
              <ul class="navbar-nav mr-auto">


              <li class="nav-item">
              <a href="index.php?action=admin"class="nav-link">Administration</a>
              </li>

              </ul>
            </div>
      </nav>
    </div>
    <div class="jumbotron">
        <h1 class="display-3">Billet simple pour l'Alaska</h1>
        <h1 class="display-3">Jean Forteroche</h1>

        <h3 class="lead">Une épopée tragique au coeur du grand froid</h3>
    </div>
    
        <div><?= $content ?></div>
      
</div>     
      </div>      
       </div>
      </div>
    </div>
      
      
      </div>

      <footer  id="footer">
        <div class="container">
          <div class="row text-center d-flex justify-content-center">
            <div class="col-md-12 ">
              <a href="https://www.oceanpolaire.org/expedition-pole-nord/">A propos</a>  
              <a href="index.php?action=mentionsLegales">Envoyer un mail</a>
            </div>
          </div>
        </div>

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
<script src="vendor/tinymce/js/tinymce/tiny_init.js"></script>

    </body>
</html>