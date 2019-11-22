<?php
require_once 'model/postManager.php';
require_once 'model/commentManager.php';
require_once 'model/loginManager.php';

//fonctions de base 
function admin() {
    $username = $_SESSION["username"];

    require('view/backend/adminView.php');
}

function disconnect() {
    session_destroy();
    require ('view/frontend/loginView.php');
}

function adminIndex(){
	$chapterManager = new PostManager(); 
    $chapters = $chapterManager->getPosts(); 

    require('view/backend/adminView.php');
}
function moderate($id){
    $commentManager = new CommentManager;
    $comments = $commentManager->censor($id);

    header('Location: index.php?action=adminComments');}

function publish($id){
    $commentManager = new CommentManager;
    $comments = $commentManager->activate($id);

    header('Location: index.php?action=adminComments');}
    
function writeChapter(){
	$chapterManager = new PostManager(); // Création d'un objet
    $chapters = $chapterManager->getPosts(); // Appel d'une fonction de cet objet

    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();

    require('view/backend/writeChapterView.php');
}

function writeChapterIndex(){
	$chapterManager = new PostManager(); // Création d'un objet
    $chapters = $chapterManager->getPosts(); // Appel d'une fonction de cet objet


    require('view/backend/editChapterView.php');
}

function adminCommentsIndex(){
	
    $chapterManager = new PostManager(); // Création d'un objet
    $chapters = $chapterManager->getPosts(); // Appel d'une fonction de cet objet

    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();

    require('view/backend/commentsView.php');
}

function chaptersIndex(){
	$chapterManager = new PostManager(); // Création d'un objet
    $chapters = $chapterManager->getPosts(); // Appel d'une fonction de cet objet



    require('view/backend/chaptersView.php');
}


function chapter()
{
	$chapterManager = new PostManager(); // Création d'un objet

    $chapter = $chapterManager->getPost($_GET['id']);

    require('view/backend/postChapter.php');
}
function editChapterView()
{
    $postManager = new PostManager();

    $post = $postManager->getPost($_GET['id']);
    require('view/backend/editChapter.php');
}

function addChapter($id, $title, $content)
{
    $chapterManager = new PostManager();

    $affectedLines = $chapterManager->postChapter($id, $title, $content);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le chapitre !');
    }
    else {
        header('Location: index.php?action=adminChapters');
    }
}
function editChapter($id,$content)
{
    $chapterManager = new PostManager();

    $affectedLines = $chapterManager->updateChapter($_GET['id'],$content);
   
    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le chapitre !');
    }
    else {
        header('Location: index?action=adminChapters');
    }
    
}
function eraseChapter(){
    $chapterManager = new PostManager();
    $affectedLines = $chapterManager->deleteChapter($_GET['id']);
    
    header('Location: index?action=adminChapters');
    
    }

