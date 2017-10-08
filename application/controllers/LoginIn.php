<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-9-16
 * Time: 下午8:47
 */
class LoginIn extends CI_Controller
{
   public function __construct()
   {
       parent::__construct();
       $this->load->library("session");
       $this->load->model('user_model');
   }

    public function index()
   {
      $this->load->view("login");
   }

   public function check()
   {
       if (isset($_POST['password']) && $_POST['password']) {
           $status = $this->user_model->checkUser($_POST , true);
           var_dump($status);
       }  else  {
           $status = $this->user_model->checkUser($_POST );
           var_dump($status);
       }
   }
}