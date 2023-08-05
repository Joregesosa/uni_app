<?php
require_once "./App/models/Session.php";

class SessionController
{

    public $view;

    // public $action;

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

                unset($_GET['action']);
                unset($_GET['controller']);
                $_SESSION['user'] = $res;

                header('location: index.php');
            else :

                header('location: index.php');
                $_SESSION['invalidCredentials'] = 'wrong email or password';

            endif;

        else :

            header('location: index.php');
            $_SESSION['invalidCredentials'] = 'wrong email or password';
        endif;
    }

    function logout()
    {
        session_destroy();
        header('location: index.php');
    }
    // function update(){
    //     $this->user->changePassword();
    // }
}
