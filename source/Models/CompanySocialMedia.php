<?php

namespace Source\Models;

use Source\Core\Model;

class CompanySocialMedia extends Model
{

    public function __construct()
    {
        parent::__construct("companysocialmedia", [], ["company_id", "socialMedia_id"]);
    }

    
}