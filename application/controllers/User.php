<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2017/12/31
 * Time: 20:52
 */
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('login');
		$this->load->library('session');
		$this->load->model('user_model');

	}
	public function loginIn()
	{
		$data = array(
			'username'=>$_POST['username'],
			'password'=>$_POST['password']
		);
		if (isset($data['username']) && !empty($data['username'])){
			$res = $this->user_model->getpd($data['username']);
			if ($data['password'] == $res['password']){
				$this->session->set_data('username',$res['username']);
				$this->session->set_data('userID',$res['userID']);
				$this->session->set_data('name',$res['name']);
				$msg = $res['name'].'欢迎登陆';
				json_encode(array('status'=>true,'msg'=>$msg));
			}else{
				$msg = '密码错误';
				echo json_encode(array('status'=>false,'msg'=>$msg));
			}
		}else {
			$msg = '请输入用户名';
			echo json_encode(array('status'=>false,'msg'=>$msg));
		}
	}

	public function adduser()
	{
		
	}
}
