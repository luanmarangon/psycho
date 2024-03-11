<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * @package Source\Models
 */
class User extends Model
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("users", ["id"], ["username", "password", "level"]);
    }


    public function bootstrap(
        string $username,
        string $password,
        string $level
    ): User {
        $this->username = $username;
        $this->password = $password;
        $this->level = $level;
        return $this;
    }


    /**
     * @param string $email
     * @param string $columns
     * @return null|User
     */
    // public function findByEmail(string $email, string $columns = "*"): ?User
    // {
    //     $find = $this->find("email = :email", "email={$email}", $columns);
    //     return $find->fetch();
    // }
    public function findByLogin(string $username, string $columns = "*"): ?User
    {
        $find = $this->find("username = :username", "username={$username}", $columns);
        return $find->fetch();
    }

    /**
     * @return string
     */
    public function fullName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * @return string|null
     */
    public function photo(): ?string
    {
        if ($this->photo && file_exists(__DIR__ . "/../../" . CONF_UPLOAD_DIR . "/{$this->photo}"));
        return $this->photo;
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        if (!$this->required()) {
            $this->message->warning("Usuário e senha são obrigatórios");
            return false;
        }

        // if (!is_email($this->email)) {
        //     $this->message->warning("O e-mail informado não tem um formato válido");
        //     return false;
        // }

        if (!is_passwd($this->password)) {
            $min = CONF_PASSWD_MIN_LEN;
            $max = CONF_PASSWD_MAX_LEN;
            $this->message->warning("A senha deve ter entre {$min} e {$max} caracteres");
            return false;
        } else {
            $this->password = passwd($this->password);
        }

        /** User Update */
        if (!empty($this->id)) {
            $userId = $this->id;

            // if ($this->find("email = :e AND id != :i", "e={$this->email}&i={$userId}", "id")->fetch()) {
            //     $this->message->warning("O e-mail informado já está cadastrado");
            //     return false;
            // }

            $this->update($this->safe(), "id = :id", "id={$userId}");
            if ($this->fail()) {
                $this->message->error("Erro ao atualizar, verifique os dados");
                return false;
            }
        }

        /** User Create */
        if (empty($this->id)) {
            if ($this->findByLogin($this->username, "id")) {
                $this->message->warning("O Login informado já está cadastrado");
                return false;
            }

            $userId = $this->create($this->safe());
            if ($this->fail()) {
                $this->message->error("Erro ao cadastrar, verifique os dados");
                return false;
            }
        }

        $this->data = ($this->findById($userId))->data();
        return true;
    }

    public function findUser(?string $where = null)
    {
        $this->query = "SELECT u.id AS usersId, p.id AS peopleId, u.*, e.*, py.*, p.* FROM people p
                            LEFT JOIN psychologist py ON p.id = py.people_id
                            LEFT JOIN employee e ON p.id = e.people_id
                            LEFT JOIN users u ON u.id = COALESCE(py.users_id, e.users_id)
                            WHERE COALESCE(py.users_id, e.users_id) IS NOT NULL";

        if ($where) {
            $this->query .= " and {$where}";
        }


        return $this;
    }

    public function findUserFull(?string $where = null)
    {
        $this->query = "SELECT u.id AS usersId, p.id AS peopleId, u.*, e.*, py.*, p.* , COALESCE(py.people_id, e.people_id) AS people_id
                            FROM users u
                            LEFT JOIN psychologist py ON py.users_id = u.id
                            LEFT JOIN employee e ON e.users_id = u.id
                            LEFT JOIN people p ON p.id = COALESCE(py.people_id, e.people_id)";
        return $this;
    }

    public function level($level)
    {
        switch ($level) {
            case $level == 10:
                $level = "ADM Sistema";
                break;
            case $level == 8:
                $level = "Administrador";
                break;
            case $level == 6:
                $level = "Psicologo (a)";
                break;
            case $level == 4:
                $level = "Secretario";
                break;
            default:
                $level = "Cliente";
                break;
        }

        return $level;
    }

    public function userPeople($userId)
    {

        $this->query = "SELECT u.id AS userId, p.*, py.*, e.*, u.* FROM people p
                            LEFT JOIN psychologist py ON p.id = py.people_id
                            LEFT JOIN employee e ON p.id = e.people_id
                            LEFT JOIN users u ON u.id = COALESCE(py.users_id, e.users_id)
                            WHERE u.id = $userId";

        return $this;
    }
}
