<?php
/**
 * Created by PhpStorm.
 * User: ezreal
 * Date: 17-10-21
 * Time: 下午5:29
 */
class Log extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index($user_id)
    {
        $data['loglist'] = $this->user_model->getlists($user_id);
        $this->load->view('log_lists',$data);
    }

    public function add($ajaxRequest = false)
    {
        if (!$ajaxRequest){
            $this->load->view('add_log');
        }  else  {
            return;
        }
    }
}