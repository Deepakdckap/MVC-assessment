<?php

class DATABASE
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=localhost;dbname=stocks',
                'admin',
                'welcome'
            );

        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}