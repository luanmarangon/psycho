<?php

namespace Source\Models;

use Source\Core\Model;

class Contact extends Model
{
    public function __construct()
    {
        parent::__construct("contact", ["id"], ["type", "contact"]);
    }

   



}
