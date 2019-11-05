<?php

// Chargement des classes
require_once 'model/postManager.php';
require_once 'model/commentManager.php';
require_once 'model/loginManager.php';

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
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

    function updateComment($postId, $author, $comment)

{
    $modifCommentManager = new CommentManager();

    $affectedLines = $commentManager->editComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=Post&id=' . $postId);
    }
}
    
    function login()
{
    require('view/frontend/loginView.php');
}
function connect($username, $password)
{
    $userManager = new UserManager();

    $user = $userManager->getUser($username);
    
    //$user = getUser($username);

    if($user === false) {
        throw new Exception("L'utilisateur n'existe pas.");
        var_dump($username);
    }

    $isPasswordValid = password_verify($password, $user["password"]);

    if($isPasswordValid) {
        $_SESSION['username'] = $user['username'];

        require('view/backend/adminView.php');
    }
    else {
        throw new Exception("La combinaison nom d'utilisateur / mot de passe n'est pas bonne.");
    }
}