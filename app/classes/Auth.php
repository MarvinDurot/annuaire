<?php

/**
 * Class Auth
 * Gère les sessions utilisateur
 */
class Auth
{
    /**
     * Connecte un utilisateur en lui créant une session
     * @param $login : login de l'utilisateur
     * @param $password : mot de passe de l'utilisateur
     * @return bool
     */
    public static function login($login, $password)
    {
        if ($login === Config::get('admin.username') && $password !== Config::get('admin.password')) {
            return false;
        }

        $_SESSION['login'] = $login;
        return true;
    }

    /**
     * Déconnecte un utilisateur
     */
    public static function logout()
    {
        unset($_SESSION['login']);
    }

    /**
     * Teste si l'utilisateur courant est connecté
     * @return bool
     */
    public static function isLogged()
    {
        return isset($_SESSION['login']);
    }

    /**
     * Récupère le login de l'utilisateur connecté
     * @return mixed
     */
    public static function getUser() {
        return $_SESSION['login'];
    }
}