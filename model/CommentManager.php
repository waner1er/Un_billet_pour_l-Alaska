<?php
require_once "model/manager.php";

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC LIMIT 0, 3');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function editComment($postid, $comment)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET comment = ?, comment_date = NOW() WHERE id = ?');
        $newComment = $req->execute(array($comment, $id));
   
        return $newComment;
    }
}