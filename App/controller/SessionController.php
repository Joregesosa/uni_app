<?php
require_once "./App/models/Session.php";

class SessionController
{

    public $view;
    private $user;

    function __construct()
    {
        $this->view = 'login';

        $this->user = new Session;
    }


    function login($values)
    {

        $res = $this->user->login($values['email'], $values['pass']);

        if ($res) :

            $passVerify =  password_verify($values['pass'], $res['pass']);

            if ($passVerify) :

                $_SESSION['user'] = $res;
                header('Location: index.php');

            else :


                $_SESSION['invalidCredentials'] = 'wrong email or password';
                $this->view = 'login';
                header('Location: index.php');
            endif;

        else :

            $this->view = 'login';
            $_SESSION['invalidCredentials'] = 'wrong email or password';
            header('Location: index.php');
        endif;
    }

    function logout()
    {
        session_destroy();

        header("Refresh:0");
    }
}
