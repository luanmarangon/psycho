<?php

namespace Source\Models;

use Source\Core\Model;

class SettingsGenre extends Model
{
    public function __construct()
    {
        parent::__construct("settingsGenre", ["id"],["genre"]);
    }
}