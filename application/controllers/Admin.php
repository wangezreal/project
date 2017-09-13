<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-8-27
 * Time: 上午10:59
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper('login');
        $this->load->library('session');
        $this->load->view('admin');
    }
}