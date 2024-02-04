<?php

namespace Source\Models;

use Source\Core\Model;

class People extends Model
{
    public function __construct()
    {
        parent::__construct("people", ["id"], ["address_id", "firstName", "lastName", "cpf", "rg", "settingsGenre_id", "dateBirth", "status"]);
    }

    public function contactPeople(int $peopleId)
    {
        // if ($peopleId) {
        //     return (new PeopleContact())->findByContacts($peopleId);
        // }
        // return null;
        $this->query = "SELECT * FROM contact c
        INNER JOIN peoplecontact pc ON pc.contact_id= c.id
        WHERE pc.people_id = {$peopleId}";

        return $this;
    }

    public function fullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function personalInformation($peopleId)
    {
        $this->query = "SELECT p.id AS peopleId, p.*, a.*, pc.*, c.* FROM people p
                            INNER JOIN address a ON a.id = p.address_id
                            INNER JOIN peoplecontact pc ON pc.people_id = p.id
                            INNER JOIN contact c ON pc.contact_id = c.id
                            WHERE p.id = {$peopleId}";

        return $this;
    }

    public function peopleAddres($peopleId)
    {
        $this->query = "SELECT p.id AS peopleId, p.*, a.* FROM people p
                            INNER JOIN address a ON a.id = p.address_id
                            WHERE p.id = {$peopleId}";

        return $this;
    }

    public function psychologistPeople($peopleId)
    {
        $this->query = "SELECT py.id AS psychoId, p.*, py.*, u.* from people p
                            join psychologist py on py.people_id = p.id
                            join users u on py.users_id = u.id
                            where p.id =  {$peopleId}";

        return $this->fetch(true);
    }

    public function psycho($peopleId)
    {
        if ($peopleId) {
            return (new People())->findById($peopleId);
        }
        return null;
    }

    public function genre($genreId)
    {
        if ($genreId) {
            return (new SettingsGenre())->findById($genreId);
        }
        return null;
    }
}
