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
       $this->load->helper('login');
   }

    public function index()
   {
      $this->load->view("login");
   }

   public function check()
   {
       if (isset($_POST['password']) && $_POST['password']) {
           $status = $this->user_model->checkUser($_POST , true);
           $this->test($status);
           print_r($this->session->userdata('name'));
           echo $status?json_encode(array('status'=>1 ,'message'=>'登陆成功')):json_encode(array('status'=>0,'message'=>"帐号或密码错误"));
       }  else  {
           $status = $this->user_model->checkUser($_POST );
           echo !$status?json_encode(array('status'=>1 ,'message'=>'帐号可使用')):json_encode(array('status'=>0,'message'=>"帐号已存在"));
       }
   }

    function test($data)
    {
        $this->load->library("session");
        if ($data){
            $this->session->set_userdata('username',$data['user_name']);
            $this->session->set_userdata('name',$data['name']);
            $this->session->set_userdata('userID',$data['user_id']);
        }
    }
}