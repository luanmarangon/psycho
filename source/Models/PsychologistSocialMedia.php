<?php

namespace Source\Models;

use Source\Core\Model;

class PsychologistSocialMedia extends Model
{

    public function __construct()
    {
        parent::__construct("psychologistsocialmedia", ["id"], ["psychologist_id", "socialMedia_id"]);
    }

    
    // public function psychologistMedia(int $socialMediaId)
    // {
    //     $this->query = "SELECT csm.company_id AS companyId, c.*  from companysocialMedia csm
    //                         join company c on csm.company_id = c.id
    //                         where csm.socialMedia_id = {$socialMediaId}";

    //     return $this;
    // }



}