<?php

namespace Daw\models;

class Sesion
{

    public function start()
    {
        session_start();
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        if (isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
    }

    public function destroy()
    {
        session_unset();
        session_destroy();
    }
}
?>