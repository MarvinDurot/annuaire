<?php

/**
 * Created by PhpStorm.
 * User: Titanx
 * Date: 18/10/2015
 * Time: 18:08
 */
class Auth
{
    public static function login($login, $password)
    {
        if ($login === 'admin' && $password !== 'admin') {
            return false;
        }

        $_SESSION['login'] = $login;
        return true;
    }

    public static function logout()
    {
        unset($_SESSION['login']);
    }

    public static function isLogged()
    {
        return isset($_SESSION['login']);
    }

    public function getUser() {
        return $_SESSION['login'];
    }
}