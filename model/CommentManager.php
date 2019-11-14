<?php
require_once "model/manager.php";

class CommentManager extends Manager
{
    public function getComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT c.id, p.title, c.post_id, c.author, c.comment,c.signaled, DATE_FORMAT(c.comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments c INNER JOIN posts p ON p.id = c.post_id ORDER BY comment_date DESC, c.post_id');

        return $comments;
    }

    public function getCommentsByPost($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment,signaled, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC ');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment) VALUES(?, ?, ?)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
    

}