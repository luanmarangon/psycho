<?php

namespace Source\Models;

use Source\Core\Model;

class Psychologist extends Model
{
    public function __construct()
    {
        parent::__construct("psychologist", ["id"], ["people_id", "users_id", "crp", "registration"]);
    }

    public function psychologistSocialMeida(int $psycologistId)
    {
        $this->query = "SELECT sm.id, sm.socialMedia, sm.link FROM psychologist py
                        JOIN psychologistsocialmedia psm ON py.id = psm.psychologist_id
                        JOIN socialMedia sm ON psm.socialMedia_id = sm.id
                        WHERE py.id = {$psycologistId}";

        return $this;
    }

    public function userPsycho($psychoId)
    {
        if ($psychoId) {
            return (new User())->find("id = {$psychoId}")->fetch();
        }
        return null;
    }

    public function people(): ?People
    {
        if ($this->people_id) {
            return (new People())->findById($this->people_id);
        }
        return null;
    }
}
