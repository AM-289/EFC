<?php

class Dbh {
    
    protected function connect() {
        try {
            $username = 'root';
            $password = '';
            $dbh = new PDO('mysql:host=localhost;dbname=ecoride_db', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print 'Erreur : ' . $e->getMessage();
            die();
        }
    }
}