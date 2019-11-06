<?php
require_once 'model/postManager.php';
require_once 'model/commentManager.php';
require_once 'model/loginManager.php';
require_once 'model/chapterManager.php';


function admin() {
    $username = $_SESSION["username"];

    require('view/backend/adminView.php');
}

function disconnect() {
    session_destroy();
    require ('view/frontend/loginView.php');
}
function listChapters(){
	$chapterManager = new ChapterManager(); // Création d'un objet
    $chapters = $chapterManager->getChapters(); // Appel d'une fonction de cet objet

    require('view/backend/adminView.php');
}



function chapter()
{
	$chapterManager = new ChapterManager(); // Création d'un objet

    $post = $chapterManager->getchapter($_GET['id']);
    require('view/backend/adminView.php');
}