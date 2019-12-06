<?php
require_once "model/Manager.php";

class CommentManager extends Manager
{
    public function getComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT c.id, p.title, c.post_id, c.author, c.comment,c.nb_signalements,c.censored,  DATE_FORMAT(c.comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments c INNER JOIN posts p ON p.id = c.post_id ORDER BY nb_signalements DESC, c.post_id');

        return $comments;
    }

    public function getCommentsByPost($id)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment,nb_signalements,censored, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC ');
        $comments->execute(array($id));

        return $comments;
    }

    public function postComment($id, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($id, $author, $comment));
  
        return $affectedLines;
    }
    public function postSignal($id)
    {
        $db = $this->dbConnect();
        $signal = $db->prepare('UPDATE comments SET nb_signalements = nb_signalements + 1 WHERE id = ?');
        $affectedLines = $signal->execute(array($id));
  
        return $signal;
    }
 
    public function censor($id)
    {
        $db =$this->dbConnect();
        $censored = $db->prepare('UPDATE comments SET censored = censored+1 WHERE id = ?');
        $affectedLines = $censored->execute(array($id));
        return $censored;
    }
    
    public function activate($id)
    {
        $db =$this->dbConnect();
        $activate = $db->prepare('UPDATE comments SET censored = 0 WHERE id = ?');
        $affectedLines = $activate->execute(array($id));
        return $activate;
    }

    

}