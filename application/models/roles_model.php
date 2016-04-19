<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Roles_model extends CI_Model{
	function __construct()
    {
        // Call the Model constructor
        //session_start();
        parent::__construct();
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

		
}
?>
