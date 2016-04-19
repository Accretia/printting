<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

    public function __construct() {
    	parent::__construct();
		$this->load->database();
		$this->load->model('authen_model');
		$this->load->helper('url');
        $this->load->model('roles_model');


	}

	public function index()
	{
		if(!$this->authen_model->stillLogin()){
			redirect(base_url()."authen/logout");

		}

		$this->load->view('v_test');
	}
    function roles(){
        if(!$this->authen_model->stillLogin()){
			redirect(base_url()."authen/logout");

		}

        $rolesList = $this->roles_model->getRolesList();
        if($rolesList != 0){

            $data['list'] = $rolesList;
            $this->load->view('roles/v_roles',$data);
        }
    }
}
?>