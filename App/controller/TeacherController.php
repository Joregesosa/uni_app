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

            header('location: ?controller=teacherController&action=list_students');

        endif;
    }

    function list_messages()
    {
        if ($_SESSION['user']['role_id'] === 2 || $_SESSION['user']['role_id'] === 3) :

            $id = $_GET['record'];

            $query = "SELECT * from messages WHERE subject_record_id=$id";

            $res = $this->admin->List($query);

            return $res;

        endif;
    }

    function send_message()
    {
        if ($_SESSION['user']['role_id'] === 2 || $_SESSION['user']['role_id'] === 3) :

            $id = $_GET['record'];
            $row = $_GET['row'];
            $sender = $_SESSION['user']['id'];

            $params = [$_POST['message'], $id, $sender];

            $query = "INSERT INTO messages (`message`, `subject_record_id`, `sender`) Values (?,?,?)";

            $this->admin->Edit($query, $params);



        header("location: ?controller=TeacherController&action=list_students&modal=messages&modal_act=list_messages&row=$row&record=$id");
        

        endif;
    }
}
