<?php
require_once"model/manager.php";

class SignalManager extends Manager
{   
    

    public function getSignal($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, signaled FROM comments WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;
    }

}