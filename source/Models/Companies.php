<?php

namespace Source\Models;

use Source\Core\Model;

class companies extends Model
{

    public function __construct()
    {
        parent::__construct("company", ["id"], ["address_id", "cnpj", "socialReason", "name", "stateRegistration", "responsible"]);
    }



    public function companySocialMeida(int $companyId)
    {
        $this->query = "SELECT sm.socialMedia, sm.link FROM company c
                            JOIN companysocialmedia csm ON c.id = csm.company_id
                            JOIN socialMedia sm ON csm.socialMedia_id = sm.id
                            WHERE c.id = {$companyId};";

        return $this;
    }


   

    
}
