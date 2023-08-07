<?php
require_once "./App/models/Admin.php";


class AdminController
{
    public $title;
    public $view;
    private $admin;

    function __construct()
    {

        $this->view = 'dashboard';
        $this->title = 'DashBoard';
        $this->admin = new Admin;
    }

    function list_teachers()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $teachers = $this->admin->list("SELECT * FROM admin_teacher_table");

            $this->title = 'Lista de Maestros';
            $this->view = 'admin_list_teachers';

            return $teachers;

        endif;
    }

    function list_students()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $teachers = $this->admin->list('SELECT * FROM admin_student_table');

            $this->title = 'Lista de Estudiantes';
            $this->view = 'admin_list_students';

            return $teachers;

        endif;
    }

    function list_subjects()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $teachers = $this->admin->list('SELECT * FROM admin_subject_table');

            $this->title = 'Lista de Clases';
            $this->view = 'admin_list_subjects';

            return $teachers;

        endif;
    }

    function list_roles()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $teachers = $this->admin->list('SELECT * FROM admin_role_table');

            $this->title = 'Lista de Permisos';

            $this->view = 'admin_list_roles';

            return $teachers;

        endif;
    }

    function edit_role()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $state = isset($_POST['state']) ? 1 : 0;
            $params = [$_POST['role'], $state, $_POST['email']];

            $query = "UPDATE users set  `role_id` = ?, `state`=? Where email = ?";

            $this->admin->Edit($query, $params);

            header('location: ?controller=AdminController&action=list_roles');


        endif;
    }

    function edit_subject()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $teacher = $_POST['teacher'] ? $_POST['teacher'] : NULL;

            $params = [$_POST['subject'], $teacher, $id = $_GET['subject']];

            $query = "UPDATE subjects set  `subject` = ?, `teacher_id`=? Where `id` = ?";

            $this->admin->Edit($query, $params);

            header('location: ?controller=AdminController&action=list_subjects');

        endif;
    }

    function without_subjects()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $teachers = $this->admin->list('SELECT * FROM teachers_availables');

            return $teachers;

        endif;
    }

    function create_subject()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $teacher = $_POST['teacher'] ? $_POST['teacher'] : NULL;

            $params = [$_POST['subject'], $teacher];

            $query = "INSERT INTO subjects (`subject`, `teacher_id`) VALUES (?,?)";

            $this->admin->Edit($query, $params);

            header('location: ?controller=AdminController&action=list_subjects');

        endif;
    }

    function without_teacher()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $teachers = $this->admin->list('SELECT * FROM subjects 
            WHERE teacher_id is NULL');

            return $teachers;

        endif;
    }

    function create_teacher()
    {
        if ($_SESSION['user']['role_id'] === 1) :

            $hash = password_hash('123456', PASSWORD_DEFAULT);


            $subjec_id = $_POST['subject'] ? $_POST['subject'] : null;
            $params = [
                $_POST['email'],
                $hash,
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['address'],
                $_POST['birthday'],
                $subjec_id
            ];

            $query = "CALL new_teacher(?,?,?,?,?,?,?)";

            $this->admin->Edit($query, $params);

            header('location: ?controller=AdminController&action=list_teachers');

        endif;
    }

    function edit_teacher()
    {
        if ($_SESSION['user']['role_id'] === 1) :


            $teacher_id = $_GET['id'];

            $subjec_id = $_POST['subject'] ? $_POST['subject'] : null;
            $params = [
                $_POST['email'],
                $teacher_id,
                $_POST['first_name'],
                $_POST['last_name'],
                $_POST['address'],
                $_POST['birthday'],
                $subjec_id
            ];

            $query = "CALL edit_teacher(?,?,?,?,?,?,?)";

            $this->admin->Edit($query, $params);

            header('location: ?controller=AdminController&action=list_teachers');

        endif;
    }

    
}
