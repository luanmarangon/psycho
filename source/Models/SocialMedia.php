<?php

namespace Source\Models;

use Source\Core\Model;

class SocialMedia extends Model
{
    public function __construct()
    {
        parent::__construct("socialmedia", ["id"], ["socialMedia", "link"]);
    }


    



}