<?php

class AuthModel {
    
    public $db;
    
    public function __construct($dsn, $user, $pass) {
        
        $this->db = new \PDO($dsn, $user, $pass);
        
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    
    