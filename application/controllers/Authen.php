<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

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
	public function __construct() {
    	parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('authen_model');
		
		
		

	}
	public function index()
	{
		//$this->load->view('v_test');
		
		$this->login();
	}
	function logout(){


		//session_destroy();
		
		redirect("/authen/login");


	}
	function login(){


        $data['loginfail'] = FALSE;
		$this->load->view('authen/v_login',$data);
	}
	function checklogin(){


		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$check = array();

		$check = $this->authen_model->checkLogin($username,$password);
		//print_r($check);
		//die();
		if($check != 0){
			//print_r($check);
			$userData = array('name'=>"",
								'user_id'=>0,
								'role_id'=>0,
								'logged_in'=>FALSE);
								
			$userData['name'] = $check[0]['name']."-".$check[0]['surname'];
			$userData['user_id'] = $check[0]['user_id'];
			$userData['roles_id'] = $check[0]['roles_id'];
			$userData['logged_in'] = TRUE;

			$this->session->set_userdata($userData);
			//print_r($_SESSION);
			//die();
			//$_SESSION['username'] = $username;
			//echo base_url();
			//header("Location: http://example.com/myOtherPage.php");
			redirect('/test');
		}
		else{
			//echo "XX";
            $data['loginfail'] = TRUE;
			$this->load->view('authen/v_login',$data);
		}

	}
}
?>