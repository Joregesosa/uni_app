<?php
/* Controller */
require_once "./App/models/User.php";

class UserController
{
    public $view;

    function __construct()
    {
        $this->view = 'login';
        $this->user = new User;
    }

    function  create($values)
    {
        // $user = new User;
        $this->user->create_user($values['email'], $values['name'], $values['pass']);

        $this->view = 'registro_exitoso';
    }



   
}
