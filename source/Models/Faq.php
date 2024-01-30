<?php

namespace Source\Models;

use Source\Core\Model;

class Faq extends Model
{
    public function __construct()
    {
    parent::__construct("faq", ["id"], ["question", "response", "status"]);
    }
}
