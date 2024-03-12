<?php

require 'admin/DB.php';

class spLogin extends DB {

    public function login() {
        $user_account = $_POST['username'];
        $pass_account = $_POST['password'];
        $remember_me = isset($_POST['remember_me']) ? 1: 0;

        $sql = "select * from accounts where user_account like '".$user_account."' and pass_account like '".$pass_account."';";
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }
}


$sp = new spLogin();
if (isset($_POST['login'])) {
    if (@$sp->login()) {
        $account = $sp->login()[0]['user_account'];
        setcookie('account', $account);
        header('location: index.php');
    }
}
?>