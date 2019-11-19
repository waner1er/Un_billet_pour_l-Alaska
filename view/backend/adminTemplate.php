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

  <link rel="shortcut icon" type="image/png" href="../public/images/icon.jpg"/>
  <link href="https://fonts.googleapis.com/css?family=Clicker+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    </head>
      <body>
      <ul class="mobileHeader nav nav-pills">
  <li class="nav-item">
    <a class="nav-link alert-success" href="index.php?action=admin">Administration</a>
  </li>
  <li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rédaction</a>
    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
      <a class="dropdown-item" href="index.php?action=writeChapter">Rédiger un nouvel article</a>
      <a class="dropdown-item" href="index.php?action=adminChapters">Liste des chapitres</a>
      <a class="dropdown-item" href="index.php?action=adminComments">Liste des commentaires</a>
    </div>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="index.php">Retourner sur le Site</a>
  </li>

 
</ul>

      <div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      
      <div class="sidebar-header">
      <a href="index.php?action=admin">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="public/images/jean.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jean 
            <strong>FORTEROCHE</strong>
          </span>
          <span class="user-role">Auteur</span>
          <span class="user-status">
          </span>
        </div>
        </a>
      </div>
      <!-- sidebar-header  -->
    
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <h3>Administration</h3>
          </li>
          <li>
          <ul>
                <li>
                  <a href="index.php?action=writeChapter">Rédiger un nouveau Chapitre
                    <span class="badge badge-pill badge-success">+</span>
                  </a>
                </li>
                <li>
                  <a href="index.php?action=adminChapters">Liste des Chapitres</a>
                </li>
                <li>
                  <a href="index.php?action=adminComments">Liste des commentaires</a>
                </li>
              </ul></li>
          
         
        
          <li>
            <span><a href="index.php">Retourner sur le Site</a></span>
          </li>
          <div class="sidebar-footer">
      
      <a href="index.php?action=disconnect">
      Se Déconnecter
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->

  <main class="page-content">

  <div><?= $content ?></div>

<!------------------------>
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
  <script src="public/js/admin.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='vendor/tinymce/js/tinymce/tinymce.min.js' referrerpolicy="origin"></script>
<script src="vendor/tinymce/js/tinymce/tiny_init.js">
  
  </script>
  <main>

    </body>
</html>