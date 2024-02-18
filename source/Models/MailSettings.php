<?php

namespace Source\Models;

use Source\Core\Model;
use Source\Models\Companies;

class MailSettings extends Model
{
    public function __construct()
    {
        parent::__construct("mailsettings", ["id"], ["company_id", "mail", "password", "sender", "smtp", "port"]);
    }

    public function company(): ?Companies
    {
        if ($this->company_id) {
            return (new Companies())->findById($this->company_id);
        }
        return null;
        
    }
}
