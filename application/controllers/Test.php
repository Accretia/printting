<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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
		$this->load->model('authen_model');
		$this->load->helper('url');
		

	}
	
	public function index()
	{
		if(!$this->authen_model->stillLogin()){
			redirect(base_url()."authen/logout");

		}
		
		$this->load->view('v_test');
	}
    function encodeemail(){
        //ijlegcod
        //data = {'a','b','c','d','e','f','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'};
        //echo $this->getposition('b');
        /*
        $data1 = array('l','u','n','a');
        $data2 = array('l','i','n','a');
        $data = array('t','m','f','a','f','j');
        */

        $data = array('l','u','n' ,'a');
        /* dota + is
        $data1 = array('d','o','t','a');
        $data2 = array('i','s');
        */

        /* dota + is + ijlegcod
        $data2 = array('i','j','l','e','g','c','o','d');
        $data1 = array('d','p','b','s'); // dota + is
        */

        /* (dota + is + ijlegcod)*zanroo
        $data1 = array('i','j','l','e','p','t','p','v');  //dota + is + ijlegcod
        $data2 = array('z','a','n','r','o','o');
        */


        $data1 = array('a','b','p','b','o','e','d','i'); //(dota + is + ijlegcod)*zanroo
        $data2 = array('t','m','f','a','f','j');


        /*
        $data1 = array('z','a','n','r','o','o');
        $data2 = array('i','j','l','e','j','r','p','v');
        $data3 = array('t','m','f','a','f','g');
        $data = array('i','j','l','e','g','c','o','d');
        */

        if((sizeof($data1) > sizeof($data2)) || (sizeof($data1) == sizeof($data2))) {
            $size =  sizeof($data1);
        }
        else{
            $size = sizeof($data2);
        }

        foreach($data as $a){

            echo $this->getposition($a)."|";
        }
        //die();
        $text = "";
        $text .= $this->getvalue(8);
        $text .= $this->getvalue(10);
        $text .=$this->getvalue(4);
        $text .=$this->getvalue(12);
        $text .=$this->getvalue(14);
        $text .=$this->getvalue(17);
        $text .=$this->getvalue(11);
        $text .=$this->getvalue(4);
        //$text .=$this->getvalue(4);
        //echo $this->getvalue(17);

        $text .= "@ibgcompany.com";
        $x = 1424660190;
        $y =  1423555200;
        echo $text;
        date('Y-m-d h:i:s',$x);
        echo"</br>";
        date('Y-m-d h:i:s',$y);
        echo ($x-$y)/3600;
        die();

        $data3 = array();
        for($i=0;$i<$size;$i++){

            //echo $data1[$i];
            if(!isset($data1[$i])){
               array_unshift($data1 , 'a');
            }
            if(!isset($data2[$i])){
               array_unshift($data2 , 'a');
            }

        }
        if(sizeof($data1) == sizeof($data2)){
            //echo "xxx";
            for($i=0;$i<$size;$i++){
                $a = $data1[$i];
                $b = $data2[$i];
                $val1 = $this->getposition($a);
                $val2 = $this->getposition($b);
                $result = $val1 + $val2;

                array_push($data3 , $result);
            }
            //print_r($data1);
            //echo $data1[0];
            $start = 0;
            if($data1[0] == 'a' && $data2[0]== 'a'){
                //echo "xx";
                unset($data3[0]);
                $start = 1;
                //array_
            }

        }
        //print_r($data3);

        $result_arr = array();
        $flag = FALSE;



        for($j=sizeof($data3); $j>=$start; $j--){

            //echo $data3[$j];
            if(isset($data3[$j])){
                $res1 = $data3[$j];
            //$val = $this->getvalue($mo);

                if(($res1/26) >= 1){
                    //echo $res1;
                    $mo = $res1 % 26;
                    if($flag){

                        $val = $this->getvalue($mo + 1);
                    }
                    else{

                        $val = $this->getvalue($mo);
                    }

                    array_push($result_arr , $val);
                    $flag = TRUE;
                    //die();
                }
                else{

                    if($flag){
                        $val = $this->getvalue($res1 + 1);
                        array_push($result_arr,$val);
                    }
                    else{
                        $val = $this->getvalue($res1);
                        array_push($result_arr,$val);
                    }
                    $flag = FALSE;

                }

            }

        }
        print_r($this->convertArr($result_arr));
        //echo $this->getvalue(3);

        //echo mktime();
    }

    function getposition($char){
        $data = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        //$data = {'a','b','c','d','e','f','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'};

        return array_search($char,$data);


    }
    function getvalue($a){
        $data = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        if($a > 25){
            $a = ($a % 26);
        }
        return $data[$a];

    }
    function convertArr($arr){

        $size = sizeof($arr);
        $data = array();
        for($j=$size; $j>=0; $j--){
            if(isset($arr[$j])){
                array_push($data , $arr[$j]);
            }

        }
        return $data;
    }
    function encodetest($code){

        //$data = $code;
        $arr1 = str_split($code);
        $text = "";
        //print_r($arr1);
        foreach($arr1 as $a){
          $text .= $this->getvalue($a);

        }
        //echo $text;
        return base64_encode($text);
        //echo sizeof($data);

    }

    function testcbox(){

       $this->load->view('v_cbox');
    }

}
?>