<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/3/18
 * Time: 22:19
 */
class Travel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('login');
		$this->load->library('session');
		$this->load->model('travel_model');
	}
	public function index($page=1)
	{
		if (isset($_SESSION['userID'])){
			$data['title'] = '旅行安排';
			$data['list'] = $this->travel_model->getlist($_SESSION['userID'],$page);
			$data['page'] = $page;
			$res = $this->travel_model->getlist($_SESSION['userID'],$page,true);
			$data['total'] = $res[0]['num'];
			$data['pagecount'] = intval($data['total']/11)+1;
			$this->load->view("travel",$data);
		}else{
			header("location:http://localhost/admin");
		}
	}
	public function addtravel()
	{
		$data['title'] = '添加安排';
		$this->load->view("addtravel",$data);
	}

	public function  addt()
	{
		$data['user_id'] = $_SESSION['userID'];
		$data['cid'] = $this->travel_model->getmcid($data['user_id']);
		$data['create_date'] = date('Y-m-d H:i:s');
		foreach ($_POST as $key=>$value){
			$data[$key] = $_POST[$key];
		}
		$result = $this->travel_model->inserttravel($data);
		if ($result){
			echo json_encode(array('status'=>true,'msg'=>'添加成功'));
		}else{
			echo json_encode(array('status'=>false,'msg'=>'添加失败'));
		}
	}
}
