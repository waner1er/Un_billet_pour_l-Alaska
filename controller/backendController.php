<?php
require_once 'model/PostManager.php';
require_once 'model/CommentManager.php';
require_once 'model/UserManager.php';

//fonctions de base 
function admin() {
    $username = $_SESSION["username"];

    require('view/backend/adminView.php');
}
function listPostsAdmin()
{

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
	

    require('view/backend/writeChapterView.php');
}


function adminCommentsIndex(){
	
    $chapterManager = new PostManager(); 
    $chapters = $chapterManager->getPosts();

    $commentManager = new CommentManager();
    $comments = $commentManager->getComments();

    require('view/backend/commentsView.php');
}

function chaptersIndex(){
	$chapterManager = new PostManager(); 
    $chapters = $chapterManager->getPostsAdmin();



    require('view/backend/chaptersView.php');
}


function chapter()
{
	$chapterManager = new PostManager(); 

    $chapter = $chapterManager->getPost($_GET['id']);

    require('view/backend/postChapter.php');
}

function editChapterView()
{
    $postManager = new PostManager();

    $post = $postManager->getPost($_GET['id']);
    require('view/backend/editChapter.php');
}

function addChapter($title, $content)
{
    $chapterManager = new PostManager();

    $affectedLines = $chapterManager->postChapter($title, $content);

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

