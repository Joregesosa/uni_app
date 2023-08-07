<?php
session_start();

$data = array();
$modal_data = array();
require __DIR__ . "/config/config.php";

require_once __DIR__ . "/App/views/components/header.php";

$path = __DIR__ . "/App/controller/";

if (isset($_SESSION['user'])) :

  if (isset($_GET['controller']) && file_exists($path . $_GET['controller'] . '.php')) :
    $controller = $_GET['controller'];
  else :
    $controller = $defoultController;
  endif;

  require_once   __DIR__ . "/App/controller/$controller.php";

  $ctrl = new $controller;

  if (isset($_GET['action']) && method_exists($ctrl, $_GET['action'])) :

    $action = $_GET['action'];

    $data = $ctrl->$action();

  endif;


  if (isset($_GET['modal']) && file_exists(__DIR__ . "/App/views/modals/" . $_GET['modal'] . ".php")) :

    if (isset($_GET['modal_act']) && method_exists($ctrl, $_GET['modal_act'])) :

      $action = $_GET['modal_act'];

      $modal_data =  $ctrl->$action();

    endif;

    require_once __DIR__ . "/App/views/modals/" . $_GET['modal'] . ".php";

  endif;

  require_once __DIR__ . "/App/views/components/side_nav.php";
  require_once __DIR__ . "/App/views/components/top_nav.php";
  require_once __DIR__ . "/App/views/components/user_menu.php";
  require_once __DIR__ . "/App/views/$ctrl->view.php";

/* login */
else :

  require_once __DIR__ . "/App/views/login.php";

  require   __DIR__ . "/App/controller/SessionController.php";

  $session = new SessionController;

  if (isset($_POST['email']) && isset($_POST['pass'])) {

    $session->login($_POST);
  }

endif;

require_once __DIR__ . "/App/views/components/footer.php";
