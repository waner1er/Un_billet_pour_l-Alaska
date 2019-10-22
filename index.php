<?php
//vérification et affichage des éventuelles erreurs
error_reporting(E_ALL); 
ini_set("display_errors", 1);

//appel du controller
require('controller/frontend.php');

//lorsque la page s'affiche on essaie une liste de consditions 
try {
    //On vérifie qu'il existe une variable  'action'
    if (isset($_GET['action'])) {
        //si elle contient listPosts 
        if ($_GET['action'] == 'listPosts') {
            //le controller envoie listPosts (la liste de toutes les publications)
            listPosts();
        }


        //si elle contient post
        elseif ($_GET['action'] == 'post') {
            //on vérifie qu'il existe un id et qu'il est supérieur à Zéro
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                //le controller envoie post()
                post();
            }


            //si l'id = 0 ou et négatif on affiche l'erreur 
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }


        //si elle contient 'addComment'
        elseif ($_GET['action'] == 'addComment') {
            //on vérifie qu'il existe un id et qu'il est supérieur à Zéro
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

        //si elle contient 'admin' 
        elseif ($_GET['action'] == 'admin') {
            //le controller envoie adminView (la liste de toutes les publications)
            admin();
        }

        elseif ($_GET['action'] == 'register') {
            //le controller envoie adminView (la liste de toutes les publications)
        register();        }

        elseif ($_GET['action'] == 'addChapter') {
            //on vérifie qu'il existe un id et qu'il est supérieur à Zéro
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                //si les 2 champs sont remplis
                if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    //le controller envoie 'addChapter' 
                    addChapter($_GET['id'], $_POST['title'], $_POST['content']);
                }
                else {
                    //sinon : Erreur
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                //si l'id = 0 ou et négatif on affiche l'erreur 
                throw new Exception('Aucun identifiant ');
            }
        }


    }

    //si aucune de toutes les conditions n'ont été vérifiées on affiche listPosts (l'ensemble des posts = page d'acceui du site)
    else {
        listPosts();
    }
//si le script capte une erreur il renvoie vers la page 'errorView' et affiche le message adapté
}catch(Exception $e) {
    require('view/frontend/errorView.php');
}
