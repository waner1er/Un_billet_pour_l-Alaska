<?php

// Chargement des classes
require_once 'model/postManager.php';
require_once 'model/commentManager.php';
require_once 'model/loginManager.php';
require_once 'model/chapterManager.php';


function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}

function post($id)
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($id);
    $comments = $commentManager->getCommentsByPost($id);
    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}


    
    function login()
{
    $login = new UserManager();
    require('view/frontend/loginView.php');
}


function message()
{
    //$sendMessage = new MessageManager();

    require('view/backend/messageView.php');

}


function connect($username, $password)
{
    $userManager = new UserManager();

    $user = $userManager->getUser($username);
    

    if($user === false) {
        throw new Exception("L'utilisateur n'existe pas.");
        var_dump($username);
    }

    $isPasswordValid = password_verify($password, $user["password"]);

    if($isPasswordValid) {
        $_SESSION['username'] = $user['username'];

        header('Location: index.php?action=admin');
    }
    else {
        throw new Exception("La combinaison nom d'utilisateur / mot de passe n'est pas bonne.");
    }
}