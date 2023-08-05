<?php
session_start();

require_once __DIR__ . "/App/views/components/header.php";

require __DIR__ . "/config/config.php";

isset($_GET['controller']) ? $controller = $_GET['controller'] : $controller = constant('DEFAULT_CONTROLLER');

require   __DIR__ . "/App/controller/$controller.php";

$usuario = new $controller;

if (isset($_GET['action'])) :

  $action = $_GET['action'];

  $usuario->$action($_POST);

endif;

unset($_GET['controller']);

if (!isset($_SESSION['user'])) :

  // $usuario->update(); mas tarde agregar random img

  require_once __DIR__ . "/App/views/$usuario->view.php";

else :
  extract($_SESSION['user']);

  $view = $usuario->view === 'login' ? $view = 'dashboard' : $usuario->view;

  require_once __DIR__ . "/App/views/components/side_nav.php";
  require_once __DIR__ . "/App/views/components/top_nav.php";
  require_once __DIR__ . "/App/views/components/user_menu.php";
  require_once __DIR__ . "/App/views/$view.php";
  require_once __DIR__ . "/App/views/profile.php";

endif;

require_once __DIR__ . "/App/views/components/footer.php";
