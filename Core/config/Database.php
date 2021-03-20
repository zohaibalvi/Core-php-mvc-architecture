<?php

namespace Core\config;

use mysqli;

class Database
{
    private $_connection;
    private static $_instance;          //The single instance
    private $_host;
    private $_username;
    private $_password;
    private $_database;
    private $_port;
    /*
        Get an instance of the Database
        @return Instance
        */
    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct()
    {
        $this->_host = $_ENV['DB_HOST'];
        $this->_database = $_ENV['DB_NAME'];
        $this->_username = $_ENV['DB_USER'];
        $this->_password = $_ENV['DB_PASSWORD'];
        $this->_port = $_ENV['DB_PORT'];
        $this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database, $this->_port);

        // Error handling
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit;
        }
    }

    // Get mysqli connection
    public function getConnection()
    {
        return $this->_connection;
    }
}
