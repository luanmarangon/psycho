<?php

namespace Source\Models;

use Source\Core\Model;

class Services extends Model
{
    public function __construct()
    {
        parent::__construct("services", ["id"], ["name", "description", "operation", "sessions", "duration", "atendence"]);
    }
}
