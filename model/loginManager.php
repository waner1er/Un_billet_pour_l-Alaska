<?php 
class UserManager extends Manager {
 public function getUser($username)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE username = ?');
        $req->execute(array($username));
        $post = $req->fetch();

        return $post;
    }

    
}

