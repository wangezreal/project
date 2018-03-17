<?php
/**
 * Created by PhpStorm.
 * User: 60110
 * Date: 2018/3/10
 * Time: 0:30
 */
class Log extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('login');
		$this->load->library('session');
	}

	public function index()
	{
		$data['title'] = '日志列表';
		$data['lists'] = '';
		$this->load->view("loglist",$data);
	}

	public function addlog()
	{
		$data['title'] = '添加日志';
		$this->load->view("addlog",$data);
	}
}
