<?php
/* Controller */
require_once "./App/models/User.php";

class UserController
{
    public $view;
    private $user;
    public $title;

    function __construct()
    {
        $this->title = 'User Profile';
        $this->view = 'profile';
        $this->user = new User;
    }

    function  edit_profile()
    {
        if (isset($_SESSION['user'])) :

            $dni = isset($_POST['dni']) ? $_POST['dni'] : '';
            $user_id = $_SESSION['user']['id'];
            $hash =  $_POST['pass'] ? password_hash($_POST['pass'], PASSWORD_DEFAULT) : '';

            $birthday = $_POST['birthday'] ? $_POST['birthday'] : null;

            $params = [
                $dni,
                $_POST['email'],
                $hash,
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['address'],
                $birthday,
                $user_id
            ];

            $query = "CALL edit_profile(?,?,?,?,?,?,?,?)";

            $res =  $this->user->Edit($query, $params);

            $_SESSION['user'] = $res;

        endif;
    }
}
