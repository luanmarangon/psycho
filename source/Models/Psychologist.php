<?php

namespace Source\Models;

use Source\Core\Model;

class Psychologist extends Model
{
    public function __construct()
    {
        parent::__construct("psychologist", ["id"], ["people_id", "users_id", "crp", "standard"]);
    }

    public function psychologistSocialMeida(int $psycologistId)
    {
        $this->query = "SELECT sm.socialMedia, sm.link FROM psychologist py
                        JOIN psychologistsocialmedia psm ON py.id = psm.psychologist_id
                        JOIN socialMedia sm ON psm.socialMedia_id = sm.id
                        WHERE py.id = {$psycologistId}";

        return $this;
    }
}
