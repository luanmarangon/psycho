<?php

namespace Source\Models;

use Source\Core\Model;

class Category extends Model
{
    public function __construct()
    {
        parent::__construct("category", ["id"],["category"]);
    }
}