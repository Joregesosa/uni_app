<?php
require_once "./App/models/Admin.php";
class StudentController
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

    function list_record()
    {
        if ($_SESSION['user']['role_id'] === 3) :
            $id = $_SESSION['user']['id'];

            $students = $this->admin->list("SELECT * FROM student_subject_table WHERE student_id = $id");

            $this->title = 'Calificaciones';
            $this->view = 'student_list_record';

            return $students;

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



            header("location: ?controller=StudentController&action=list_record&modal=messages&modal_act=list_messages&row=$row&record=$id");


        endif;
    }

    function delete_record()
    {
        if ($_SESSION['user']['role_id'] === 2 || $_SESSION['user']['role_id'] === 3) :

            $id = $_GET['record'];
            $row = $_GET['row'];
            $sender = $_SESSION['user']['id'];

            $params = [$id];

            $query = "DELETE FROM subjects_record where  id = ?";

            $this->admin->Edit($query, $params);



            header("location: ?controller=StudentController&action=list_record");


        endif;
    }
}
