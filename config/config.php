<?php

define('DB_HOST', "localhost");
define('DB', "uni_app");
define('PORT', 3306);
define('DB_USER', "root");
define('DB_PASS', "tupassword");

$defaultController = "SessionController";

if (isset($_SESSION['user'])) :

    switch ($_SESSION['user']['role_id']):

        case 1:
            $defoultController = "AdminController";
            break;
        case 2:
            $defoultController = "TeacherController";
            break;

        case 3:
            $defoultController = "StudentController";
            break;
        default:

            header('location: ?controller=SessionController&action=logout');
            break;

    endswitch;
endif;

// define('DEFAULT_ACTION', "login");