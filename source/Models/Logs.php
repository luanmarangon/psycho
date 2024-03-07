<?php


namespace Source\Models;

use Source\Core\Model;

class Logs extends Model
{
    public function __construct()
    {
        parent::__construct("log", ["id"], ["operation", "users_id"]);
    }


    public function insertLog(string $msg)
    {
        $this->operation = $msg . " Usuário: " . Auth::user()->username;
        $this->users_id = Auth::user()->id;
        $this->url = $_SERVER['REQUEST_URI'];
        $this->route =  $_SERVER['QUERY_STRING'];
        $this->serverAddr = $_SERVER['SERVER_ADDR'];
        $this->serverProtocol = $_SERVER['SERVER_PROTOCOL'];
        $this->remoteAddr = $_SERVER['REMOTE_ADDR'];
        $this->save();

        return $this;
    }
}
