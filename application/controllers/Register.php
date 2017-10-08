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
        $data['sex'] = $_POST['sex'];
        $data['email'] = $_POST['email'];
        $data['phone_number'] = $_POST['phone-number'];
        $data['id_card'] = $_POST['id-card'];
        $data['create_time'] = date('Y-m-d G-i-s');
        $this->user_model->insertUser($data);
    }
}