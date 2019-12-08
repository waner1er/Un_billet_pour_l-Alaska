<?php 
require_once "model/Manager.php";

class UserManager extends Manager {
 public function getUser($username)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM users WHERE username = ?');
        $req->execute([$username]);
        $user = $req->fetch();

        return $user;
    }
}

