<?php

namespace App;

use PDO;

class Connection {

    public static function getPDO()
    {
        return new PDO('mysql:host=127.0.0.1;dbname=flash_card', 'htanguy', 'Hugoelsamathis29', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}