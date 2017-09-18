<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-9-16
 * Time: 下午8:47
 */
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model("user_model");
    }

    public function index()
    {
        $this->load->view("register");
    }

    public function registe()
    {
        $data['user_name'] = $_POST['user_name'];
        $data['name'] = $_POST['name'];
        $data['password'] = $_POST['password'];

    }
}