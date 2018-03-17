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
	public function index($user_id)
	{
		echo $user_id;
	}
	public function login()
	{
		$data['title'] = '用户登录';
		$this->load->view('login',$data);
	}
	public function loginIn()
	{
		$data = array(
			'user_name'=>$_POST['username'],
			'password'=>$_POST['password'],
			'remember'=>$_POST['remember']
		);
		if (isset($data['user_name']) && !empty($data['user_name'])){
			$res = $this->user_model->getpd($data['user_name']);
			if (!$res){
				$msg = '账号不存在';
				echo json_encode(array('status'=>false,'msg'=>$msg));
			} elseif ($data['password'] == $res['password']){
				$this->session->set_userdata('username',$res['user_name']);
				$this->session->set_userdata('userID',$res['user_id']);
				$this->session->set_userdata('name',$res['name']);
				$msg = $res['name'].'欢迎登陆';
				echo json_encode(array('status'=>true,'msg'=>$msg));
			}else{
				$msg = '密码错误';
				echo json_encode(array('status'=>false,'msg'=>$msg));
			}
		}else {
			$msg = '请输入用户名';
			echo json_encode(array('status'=>false,'msg'=>$msg));
		}
	}

	public function register()
	{
		$data['title'] = '用户注册';
		$this->load->view('register',$data);
	}

	public function adduser()
	{
		$result = $this->user_model->insertUser($_POST);
		if ($result){
			$res = $this->user_model->getpd($_POST['user_name']);
			$this->session->set_userdata('username',$res['user_name']);
			$this->session->set_userdata('userID',$res['user_id']);
			$this->session->set_userdata('name',$res['name']);
			echo json_encode(array('status'=>true,'msg'=>'注册成功'));
		}else{
			echo json_encode(array('status'=>false,'msg'=>'注册失败'));
		}
	}

	public function loginout()
	{
		$this->session->sess_destroy();
		header('Location:/admin');
	}

}
