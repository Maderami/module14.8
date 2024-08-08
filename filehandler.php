<?php

class Files{
    private $users = array();
    private $usersMain = array();
    public function getUserListOFile($filename){
        foreach(explode('|', file_get_contents($filename)) AS $str) {
            $this->users[] = array_combine(array('login','id','password','birthday'), explode(';', $str));
            foreach($this->users as $key=>$value){
                $this->usersMain[$this->users[$key]['login']] = array('id'=>$this->users[$key]['id'],'password'=>$this->users[$key]['password'], 'birthday'=>$this->users[$key]['birthday']);
            };
        }
        return $this->usersMain;
    }
}
?>