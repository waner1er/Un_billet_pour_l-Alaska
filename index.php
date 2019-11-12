<?php
session_start();
error_reporting(E_ALL); 
ini_set("display_errors", 1);
require('controller/frontendController.php');
require('controller/backendController.php');


try{
    if(isset($_GET['action'])) {
        switch($_GET['action']) {
            case 'listPosts': 
                listPostsAction(); 
                break;
            case 'post': 
                postAction(); 
                break;
            case 'addChapter': 
                addChapterAction(); 
                break;
            case 'postChapter': 
                postChapterAction(); 
                break;
            case 'addComment': 
                addCommentAction(); 
                break;
            case 'editComment': 
                editCommentAction(); 
                break;
            case 'login': 
                loginAction();
                break;
            case 'admin': 
                adminAction(); 
                break;
            case 'disconnect': 
                disconnectAction(); 
                break;
        }
    }
    else {
        listPosts();
    }
}   catch(Exception $e) {
        require('view/frontend/errorView.php');

}

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
                //si les 2 champs sont remplis
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    //le controller envoie 'addcomment' 
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    //sinon : Erreur
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                //si l'id = 0 ou et négatif on affiche l'erreur 
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
function editCommentAction(){
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        if (!empty($_POST['comment'])) {
            editComment($_GET['id'], $_POST['comment']);   
           }
        else {
            throw new Exception('Tous les champs ne sont pas remplis !');
        }
    }
    else {
        throw new Exception('Aucun identifiant de billet envoyé');
    }
        }

    function addChapterAction(){
                //si les 2 champs sont remplis
                if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    //le controller envoie 'addcomment' 
                    addChapter($_GET['id'], $_POST['title'], $_POST['content']);
                }
                else {
                    //sinon : Erreur
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
         
}
    function postChapterAction(){
        chapter();
         
}


function loginAction() {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        connect($_POST['username'], $_POST['password']);
    }
    else {
       login();
    }
}

function adminAction() {
    if(isset($_SESSION['username'])) {
        adminIndex();       
    }
    else {
        login();
    }
}

function disconnectAction() {
    disconnect();
}