<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct() {
    	parent::__construct();
		$this->load->database();
		$this->load->model('authen_model');
		$this->load->helper('url');

	}

    function paperlist(){

        if(!$this->authen_model->stillLogin()){
            redirect(base_url()."authen/logout");
        }
        

    }

}
?>