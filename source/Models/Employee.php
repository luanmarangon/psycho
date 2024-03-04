<?php

namespace Source\Models;

use Source\Core\Model;

class Employee extends Model
{
    public function __construct()
    {
        parent::__construct("employee", ["id"], ["people_id", "users_id"]);
    }

    public function userEmployee($employeeId)
    {
        if ($employeeId) {
            return (new User())->find("id = {$employeeId}")->fetch();
        }
        return null;
    }
}