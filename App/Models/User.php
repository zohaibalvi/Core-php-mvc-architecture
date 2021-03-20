<?php

namespace App\Models;
use \Core\Model;

class User extends Model
{
  
    public static function getUsers()
    {
        $db = self::getDB();
        $sql = 'SELECT *  FROM users';
        $stmt = $db->query($sql);
        return $stmt->fetch_all(MYSQLI_ASSOC);
    }
}
