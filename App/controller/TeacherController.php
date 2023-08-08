<?php
require_once "./App/models/Admin.php";
class TeacherController
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

    function list_students()
    {
        if ($_SESSION['user']['role_id'] === 2) :
            $id = $_SESSION['user']['id'];
            $students = $this->admin->list("SELECT * FROM teacher_student_table WHERE teacher_id = $id");

            $this->title = 'Lista de Estudiantes';
            $this->view = 'teacher_list_students';

            return $students;

        endif;
    }

    function edit_score()
    {
        if ($_SESSION['user']['role_id'] === 2) :

            $id = $_GET['record'];

            $params = [$_POST['score'], $id];

            $query = "UPDATE subject_record set  `score` = ? Where `id` = ?";

            $this->admin->Edit($query, $params);

            header('location: ?controller=UserController&action=list_students');

        endif;
    }

    function list_messages()
    {
        if ($_SESSION['user']['role_id'] === 2) :

            $id = $_GET['record'];

            $query = "SELECT * from messages WHERE subject_record_id = $id";

            $this->admin->List($query);

            header('location: ?controller=TeacherController&action=list_students');

        endif;
    }
}
