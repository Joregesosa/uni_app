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
        default:
            $defoultController = "SessionController";
            break;

    endswitch;
endif;

// define('DEFAULT_ACTION', "login");