<?php
require_once "model/manager.php";

class ChapterManager extends Manager
{
    public function getChapter($id)
    {
        $db = $this->dbConnect();
        $content = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%i\') AS creation_date_fr FROM posts WHERE id = ? ORDER BY creation_date DESC LIMIT 0, 3');
        $content->execute(array($postId));

        return $content;
    }

    public function postChapter($id, $title, $content)
    {
        $db = $this->dbConnect();
        $content = $db->prepare('INSERT INTO content(id, title, content, creation_date) VALUES(?, ?, ?, NOW())');
        $affectedLinesChapter = $content->execute(array($id, $title, $content));

        return $affectedLinesChapter;
    }
    
}