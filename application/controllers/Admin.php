<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-8-27
 * Time: 上午10:59
 */
class Admin extends CI_Controller{
    public function index(){
        $this->load->view('admin');
    }
}