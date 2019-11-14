<?php $title = 'ADMIN'; ?>
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
      <div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <div id="close-sidebar">
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
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
      </div>
      <!-- sidebar-header  -->
     
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Administration</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Rédaction</span>
              <span></span>
            </a>
            <div class="sidebar-submenu">
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
              </ul>
            </div>
          </li>
          
         
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Messagerie</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">les messages reçus</a>
                </li>
              </ul>
            </div>
          </li>
          <div class="sidebar-footer">
      
      <a href="index.php?action=disconnect">
      Se Déconnecter
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <!-- sidebar-wrapper  -->

  <main class="page-content">

<!--Les commentaires-->


 <div class="tab-pane fade" id="comments">
 <h2>Liste des commentaires </h2>
 <table class="table">
   <thead>
     <tr>
       <th>Titre</th>
       <th>Auteur</th>
       <th>Commentaire</th>
       <th>nombre de signalements</th>
       <th>censuré</th>
       <th></th>
  </trait>
   </thead>
   <tbody>
    <?php

    while ($data = $comments->fetch())
    {
    ?>
    <tr>

      <td>
        <a href="index.php?action=post&id=<?= $data["post_id"] ?>" class="btn btn-info"><?= $data["title"] ?></a>  
      </td>
      <td>
        <?= $data["author"] ?>
        </td>
      <td>
      <?= $data["comment"] ?></td>

      </td>
      <td>
      <div ></div><p  class="alert-danger"><?= $data["signaled"] ?></p>
      <td>

    </td>
            <td>
        <div class="custom-control custom-switch">
      <input type="checkbox" name="" value="0">
      <label >Modérer</label>
    </div>

        </td>
     </tr>
    <?php
    }
    $comments->closeCursor();
    ?>
   </tbody>
 </table>
 </div>
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
  <script src="public/js/test.js"></script>
  <script src="public/js/admin.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src='vendor/tinymce/js/tinymce/tinymce.min.js' referrerpolicy="origin"></script>
<script src="vendor/tinymce/js/tinymce/tiny_init.js">
  
  </script>
  <main>

    </body>
</html>