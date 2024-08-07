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
        return $usersList;
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
    function csvstrRead()
    {
        $lines = file('userslist.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// fill the array
        $arr = array();
        foreach($lines as $line) {
            $arr[$line] = $line;
        }
        return $arr;
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