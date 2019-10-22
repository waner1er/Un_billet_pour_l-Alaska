<?php

class Manager
{
    protected function dbConnect()
    {
    	
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '',);
        return $db;

        /*$db = new PDO('mysql:host=riveterwwvocr.mysql.db;dbname=riveterwwvocr;charset=utf8', 'riveterwwvocr', 'Krevaaard44');
        return $db;*/
    }
}