<?php

class Files{
    private $users = array();
    private $usersMain = array();
    public function getUserListOFile($filename){
        foreach(explode('|', file_get_contents($filename)) AS $str) {
            $users[] = array_combine(array('login','id','password'), explode(';', $str));
            foreach($users as $key=>$value){
                $usersMain[$users[$key]['login']] = array('id'=>$users[$key]['id'],'password'=>$users[$key]['password']);
            };
        }
        return $usersMain;
    }
}
?>