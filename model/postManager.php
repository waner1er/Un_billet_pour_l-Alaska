<?php
require_once "model/Manager.php";

class PostManager extends Manager
{   
    //requete pour chercher l'ensemble des posts
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts ORDER BY creation_date ASC');

        return $req;
    }
    public function getPostsAdmin()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts ORDER BY creation_date ASC ');

        return $req;
    }

    public function getPost($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;
    }
    public function postChapter($id, $title, $content)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare('INSERT INTO posts(id, title, content, creation_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $chapter->execute(array($id, $title, $content));

        return $affectedLines;
    }
    public function updateChapter($id,$content)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare('UPDATE posts SET content=? WHERE id=?');
        $affectedLines = $chapter->execute(array($content,$id));

        return $affectedLines;
    }
    
    public function deleteChapter($id){
    $db =$this->dbConnect();
    $chapter = $db->prepare('DELETE FROM posts   WHERE `id` = ?');
    $affectedLines = $chapter->execute(array($id));

    return $chapter;   
     }

}