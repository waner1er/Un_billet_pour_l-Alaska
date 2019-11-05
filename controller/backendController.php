<?php
require_once 'model/postManager.php';
require_once 'model/commentManager.php';
require_once 'model/loginManager.php';


function admin() {
    $username = $_SESSION["username"];

    require('view/backend/adminView.php');
}

function disconnect() {
    session_destroy();
    require ('view/frontend/loginView.php');
}