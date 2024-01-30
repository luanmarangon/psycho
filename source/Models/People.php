<?php

namespace Source\Models;

use Source\Core\Model;

class People extends Model
{
    public function __construct()
    {
        parent::__construct("people", ["id"], ["address_id", "firstName", "lastName", "cpf", "rg", "genre", "dateBirth", "status"]);
    }

    public function contactPeople(int $peopleId): ?PeopleContact
    {
        if ($peopleId) {
            return (new PeopleContact())->findByContacts($peopleId);
        }
        return null;
    }
}
