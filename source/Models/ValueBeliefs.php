<?php

namespace Source\Models;

use Source\Core\Model;

class ValueBeliefs extends Model
{
    public function __construct()
    {
        parent::__construct("valuebeliefs",["id"],["value", "description"]);        
    }
}