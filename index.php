<?php
session_start();
error_reporting(E_ALL); 
ini_set("display_errors", 1);

require('controller/frontendController.php');
require('controller/backendController.php');

// SCRIPT ---------------------------------
try{
    if(isset($_GET['action'])) {
        switch($_GET['action']) {
            //FRONT
            case 'listPosts': 
                listPostsAction(); 
                break;
            case 'post': 
                postAction(); 
                break;
            case 'addComment': 
                addCommentAction(); 
                break;
            case 'signal': 
                signalAction(); 
                break;
            case 'login': 
                loginAction();
                break;
            case 'mentionsLegales': 
                mentionsLegalesAction(); 
                break;


            //BACK


            case 'addChapter': 
                addChapterAction(); 
                break;
            case 'postChapter': 
                postChapterAction(); 
                break;
            case 'updateChapter': 
                updateChapterAction(); 
                break;
            case 'moderate': 
                moderateAction();
                break;
            case 'publish': 
                publishAction();
                break;
            case 'admin': 
                chaptersAction(); 
            break;
            
            case 'writeChapter': 
                writeChapter(); 
                break;
            case 'adminChapters': 
                chaptersAction(); 
                break;
            case 'editChapterView': 
                editChapterAction(); 
                break;
            case 'eraseChapter': 
                eraseChapterAction(); 
                break;
            case 'adminComments': 
                adminCommentsAction(); 
                break;
       
            case 'disconnect': 
                disconnectAction(); 
                break;
        }
    }else {
        listPosts();
    }

}
catch(Exception $e) {
    require('view/frontend/errorView.php');

}



//FONCTIONS  ----------------------------------------------------
//FRONT----------------------------------------------------------

function listPostsAction() {
    listPosts();
}

function postAction() {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        post($_GET['id']);
    }
    else {
        echo 'Erreur : aucun identifiant de billet envoyé';
    }
}

function addCommentAction(){
    if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
    }else {
        throw new Exception('Aucun identifiant de billet envoyé');
        }
}
        
function signalAction(){
        signal($_GET['id'], $_GET['postId']);
}

function loginAction() {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        connect($_POST['username'], $_POST['password']);
    }
    else {
       login();
    }
}

function mentionsLegalesAction() {
    mentionsLegales();
}


//BACK--------------------------------------------------------------------------

function addChapterAction(){
    if (!empty($_POST['title']) && !empty($_POST['content'])) {
        addChapter($_GET['id'], $_POST['title'], $_POST['content']);
    }
    else {
        throw new Exception('Tous les champs ne sont pas remplis !');
    }      
}

function postChapterAction(){
    chapter();      
}

function updateChapterAction(){
    editChapter($_POST['id'],$_POST['content']);

}
    
function moderateAction(){
    moderate($_GET['id']);

}

function publishAction(){
    publish($_GET['id']);

}

function adminAction() {
    if(isset($_SESSION['username'])) {
        adminIndex();       
    }
    else {
        login();
    }
}

function writeChapterAction() {
    if(isset($_SESSION['username'])) {
        writeChapterIndex();       
    }
    else {
        login();
    }
}

function chaptersAction() {
    if(isset($_SESSION['username'])) {
        chaptersIndex();       
    }
    else {
        login();
    }
}

function editChapterAction()
{
    if(isset($_SESSION['username'])) {
        editChapterView();       
    }
    else {
        login();
    }
}

function eraseChapterAction()
{
    if(isset($_SESSION['username'])) {
        eraseChapter();       
    }
    else {
        login();
    }
}

function adminCommentsAction() 
{
    if(isset($_SESSION['username'])) {
        adminCommentsIndex();       
    }
    else {
        login();
    }
}


function disconnectAction() {
    disconnect();
}