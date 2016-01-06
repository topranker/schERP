<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Put_ extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
    
    function register_() {
        $this -> load -> model ('my_model', 'mm');

        $res_ = $this -> mm -> registerStudent();

        if($res_['res_'] == TRUE){
        	$this -> session -> set_flashdata('reg_msg_', 'Success !! The Student Registration No. is [<b style="color: #0000ff; font-size: 15px"> '. $res_['reg_no'] . ' </b>]');
        } else {
        	$this -> session -> set_flashdata('reg_msg_', '<b>X</b>: Something goes wrong. Please try again !!! ');
        }
        redirect('web/getRegistrationSlip/'.$res_['reg_no']);
	}
    
    function feed_fee_($regid__){
        $this -> load -> model ('my_model', 'mm');

        $this -> mm -> submit_fee($regid__);

    }
    function check_login(){
        $this -> load -> model('my_model' , 'mm');
        $res_ = $this -> mm -> check_login();
        
        redirect('web');
    }
}