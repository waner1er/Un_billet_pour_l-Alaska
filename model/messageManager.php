<?php
require_once"model/manager.php";

class MessageManager extends Manager
{
    public function postMessage($post_id, $user, $messages)
    {
        $db = $this->dbConnect();
        $message = $db->prepare('INSERT INTO messages(post_id, user, messages) VALUES(?, ?, ?)');
        $affectedLines = $message->execute(array($post_id, $user, $messages));

        return $affectedLines;
    }
 
    public function getMessage($post_id, $user, $messages)
    {
        $db = $this->dbConnect();
        $message = $db->prepare('SELECT  post_id, user,messages, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM message WHERE post_id = ? ORDER BY comment_date DESC ');
        $message->execute(array($id));

        return $message;
    }
}