<?php


namespace Source\Models;

use Source\Core\Model;

class licenses extends Model
{
    public function __construct()
    {
        parent::__construct("licenses", ["id"], ["code", "expiration"]);
    }
}
