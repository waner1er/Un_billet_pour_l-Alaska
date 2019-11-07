<?php
require_once"model/manager.php";

class ChapterManager extends Manager
{   
    //requete pour chercher l'ensemble des posts
    public function getchapters()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts ORDER BY creation_date_fr ');

        return $req;
    }

    public function getchapter($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $chapter = $req->fetch();

        return $chapter;
    }
    public function postChapter($id, $title, $content)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare('INSERT INTO posts(id, title, content, creation_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $chapter->execute(array($id, $title, $content));

        return $affectedLines;
    }
}