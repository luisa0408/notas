<?php

namespace Models;

use Core\Model;

class Users extends Model
{
    public function getUsers()
    {
        $Query = "SELECT * FROM user WHERE `is_active` = 1";
        return $this->SelectRow($Query);
    }
}
