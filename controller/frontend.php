<?php

// Chargement des classes
require_once 'model/postManager.php';
require_once 'model/CommentManager.php';
require_once 'model/ChapterManager.php';

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

function admin()
{
    $admin = new PostManager();
    $posts = $admin->getPostsAdmin(); 

    require 'view/admin/adminView.php';
}

function register()
{
    $register = new PostManager();
    $posts = $register->getPostsAdmin(); 

    require 'view/frontend/registerView.php';
}
function chapter()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    require('view/admin/chapterView.php');
}

function addChapter($Id, $title, $content)
{
    $addChapter = new ChapterManager();

    $affectedLinesChapter = $addChapter->postChapter($id, $title, $content);

    if ($affectedLinesChapter === false) {
        throw new Exception('Impossible d\'ajouter le chapitre !');
    }
    else {
        header('Location: index.php?action=post&id=' . $id);
    }
}