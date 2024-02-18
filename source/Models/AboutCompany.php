<?php

namespace Source\Models;

use Source\Core\Model;

class AboutCompany extends Model
{
    public function __construct()
    {
        parent::__construct("aboutcompany",["id"],["inspiration", "currentSituation", "experience", "someWords"]);        
    }
}