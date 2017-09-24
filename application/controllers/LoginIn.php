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
   }

    public function index()
   {
      $this->load->view("welcome_message");
   }
}