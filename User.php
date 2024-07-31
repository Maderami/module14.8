<?php

class User
{
    public $login;
    public $email;
    private $password;
    public $createdate;
    public $iduser;
    function getUsersList()
    {
        $usersList = User::csvstrRead();
    }
    function getCurrentUser() {

    }
    function csvstrWrite(array $fields) : string
    {
        $f = fopen('users.csv', 'rw+');
        if (fputcsv($f, $fields) === false) {
            return false;
        }
        rewind($f);
        $csv_line = stream_get_contents($f);
        return rtrim($csv_line);
    }
    function csvstrRead(array $fields) : string
    {
        $f = fopen('users.csv', 'r+');
        if (fputcsv($f, $fields) === false) {
            return false;
        }
        rewind($f);
        $csv_line = stream_get_contents($f);
        return rtrim($csv_line);
    }
    function addUser($login, $password, $createdate, $email, $iduser){
            $this->login = $login;
            $this->password = md5($password);
            $this->email = $email;
            $this->createdate = $createdate;
            $this->iduser = $iduser;
            User::csvstrWrite(array($this->iduser, $this->login, $this->email, $this->password, $this->createdate));
    }


}