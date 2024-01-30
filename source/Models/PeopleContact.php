<?php

namespace Source\Models;

use Source\Core\Model;

class PeopleContact extends Model
{

    public function __construct()
    {
        parent::__construct("peoplecontact", [""], ["people_id", "contact_id"]);
    }


    public function contact(): ?Contact
    {
        return (new Contact())->findById($this->contact_id);
    }

    public function findByContacts(int $id, string $columns = "*"): ?Model
    {
        $find = $this->find("people_id = :id", "id={$id}", $columns);
        return $find;
    }

}
