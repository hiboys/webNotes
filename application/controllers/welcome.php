<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		//load helper
		//$this->load->helper("url");
		//load library
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	/*test*/
	public function hello()
	{
		$this->load->library("mytest");
		//use library function
		$str = $this->mytest->hello();
		echo $str;
	}
	/*test template argu*/
	public function show()
	{
		$numArray = array(1,2,3,4,5);
		$dict = array();
		$dict['nums'] = $numArray;
		$this->load->view('show_num', $dict);
	}
	public function logout()
	{
		session_start();
		unset($_SESSION["username"]);
		session_destroy();
		echo "注销成功";
	}
	/*test post requset*/
	public function handle_post()
	{
		$this->load->model("user_model");
		echo "your name is:".$_POST['name'].'<hr />';
		echo "your password is:".$_POST['password'].'<hr />';
		if($this->user_model->log_in())
		{
			//启动session
			session_start();
			$_SESSION["username"] = $_POST['name'];
			echo "登陆成功, session 启动";
		}
	}
	public function signup()
	{
		$this->load->view('signup/reg');
	}
	public function signup1()
	{
		$this->load->model("user_model");
		$this->user_model->sign_up();
		echo "注册成功!";
	}
	/*create database*/
	public function create_db()
	{
		$this->load->model("user_model");
		$this->user_model->create_db();
	}
	/*drop database*/
	public function drop_db()
	{
		$this->load->model("user_model");
		$this->user_model->drop_db();
	}
	public function getsnapshot()
	{	
		$url = "http://www.technologyreview.com/";
		$this->load->library("webthumb");
		$this->webthumb->setApi("a8bab2d51850d5005553ae176199ff0c");
		$job = $this->webthumb->requestThumbnail($url);
		$job_id = $job[0]['id'];
		while (true){
			$job_status = $this->webthumb->requestStatus($job_id);
			$status = $job_status['status'];
			if ($status=="Complete")
				break;
			else
			{
				sleep(5);
				continue;
			}
		}
		$data = $this->webthumb->getThumbnail($job_id, "medium");
		$path = "s_tech.jpg";
		file_put_contents($path,$data);
	}
	public function tags()
	{
		$this->load->model("tag_model");
		$this->tag_model->tags();
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
