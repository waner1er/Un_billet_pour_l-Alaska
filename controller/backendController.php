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

    $chapter = $chapterManager->getchapter($_GET['id']);
    require('view/backend/adminView.php');
}

function addChapter($id, $title, $content)
{
    $chapterManager = new ChapterManager();

    $affectedLines = $chapterManager->postChapter($id, $title, $content);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le chapitre !');
    }
    else {
        header('Location: index.php?action=admin');
    }
}