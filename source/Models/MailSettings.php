<?php

namespace Source\Models;

use Source\Core\Model;

class MailSettings extends Model
{
    public function __construct()
    {
        parent::__construct("mailsettings", ["id"], ["company_id", "mail", "password", "sender", "smtp", "port"]);
    }
}
