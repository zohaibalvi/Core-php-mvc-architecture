<?php

namespace Core;

use Core\config\Database;


abstract class Model
{
    /**
     * Get the Mysqli connection database connection
     *
     * @return mixed
     */
    protected static function getDB()
    {
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
   
        return $mysqli;
    }
}
