<?php

namespace Source\Models;

use Source\Core\Model;

class Address extends Model
{
    public function __construct()
    {
        parent::__construct("address",["id"],["zipcode", "street", "number", "complement", "district", "city", "state"]);        
    }
}