<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authen_model extends CI_Model{
	function __construct()
    {
        // Call the Model constructor
        //session_start();
        parent::__construct();
    }
	
	function test(){
		return 1;
	}
    function getRolesList(){

        $sql = "SELECT * FROM `roles`";
        $query = $this->db->query($sql);
        $data = array();

        if ($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
        else{
            return 0;
        }
        //print_r($data);

    }
	
	function checkLogin($username,$password){
		$sql = "SELECT * FROM user WHERE user_name = '$username' AND password = '$password'";
		$query = $this->db->query($sql);
        $data = array();

        if ($query->num_rows() > 0)
        {
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
        else{
            return 0;
        }
	}
	
	function stillLogin(){
		
		//print_r($_SESSION);
		if($this->session->userdata('logged_in')){
			return true;
		}
		else{
			return false;
		}
	}

		
}
?>
