<?php 

namespace Source\Models;

use Source\Core\Model;

class Scheduling extends Model
{
    public function __construct()
    {
        parent::__construct("scheduling", ["id"], ["psychologist_id", "people_id", "description", "date", "time"]);
    }

    public function schedulingPeople(): ?People
    {
        if ($this->people_id) {
            return (new People())->findById($this->people_id);
        }
        return null;
    }

    public function schedulingPsycho(): ?People
    {
        if ($this->psychologist_id) {
            $people = (new Psychologist())->findById($this->psychologist_id);
            return (new People())->findById($people->people_id);
        }
        return null;
    }



}