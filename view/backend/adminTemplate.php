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

    <body>
     
      
      <ul class="mobileHeader nav nav-pills">
          <li class="nav-item">
              <a class="nav-link " href="index.php?action=admin"><img src="public/images/jean.jpg" width="150px"alt=""></a>
          </li>

          <li nav-item>    
              <a class="nav-link" href="index.php?action=writeChapter">Rédiger un nouvel article</a>
          </li>

          <li nav-item>    
              <a class="nav-link" href="index.php?action=adminChapters">Liste des chapitres</a>
          </li>

          <li nav-item>    
             <a class="nav-link" href="index.php?action=adminComments">Liste des commentaires</a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="index.php">Retourner sur le Site</a>
          </li>

          <li class="nav-item ">
             <a class="nav-link" href="index.php?action=disconnect">Se Déconnecter</a>
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
          <div class="">
            <img class="img-responsive img-rounded" src="public/images/jean.jpg"alt="User picture">
          </div>
          <div class="user-info">
            <span class="user-name">Jean<strong>FORTEROCHE</strong></span>
            <span class="user-role">Auteur</span>
            <span class="user-status"></span>
          </div>
        </a>
      </div>
    <!-- sidebar-header  -->

    <div class="sidebar-menu">
      <ul>
        <li class="header-menu">
           <h3>Administration</h3>
        </li>
      </ul>
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
     
        <li>
        <span><a href="index.php">Retourner sur le Site</a></span>
        </li>
      </ul>

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
</main>

<!------------------------>

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.js"></script>
<script src="public/js/popup.js"></script>
<script src="public/js/admin.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='vendor/tinymce/js/tinymce/tinymce.min.js' referrerpolicy="origin"></script>
<script src="vendor/tinymce/js/tinymce/tiny_init.js"></script>
  </div>
    </body>

</html>