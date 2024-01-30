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

    public function fullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function personalInformation($peopleId)
    {
        $this->query = "SELECT * FROM people p
                            INNER JOIN address a ON a.id = p.address_id
                            INNER JOIN peoplecontact pc ON pc.people_id = p.id
                            INNER JOIN contact c ON pc.contact_id = c.id
                            WHERE p.id = {$peopleId}";

        return $this;
    }
}
