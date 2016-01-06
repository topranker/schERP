<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct(){
        parent::__construct();
    }
    function index() {
        $this -> load -> model('my_model', 'mm');
        //$this -> check_login();

        $data['breadCrumb'] = 'DashBoard';
        $data['title'] = 'DashBoard';
        $data['last_reg_'] = $this -> mm -> last_registration();
        
        $this -> load -> view('templates/header', $data);
        $this -> load -> view('home', $data);
        $this -> load -> view('templates/footer');
	}
        
    function check_login(){
        if(! $this -> session -> userdata('_user___')) $this -> logout();
    }
    function stuRegistration() {
        $this -> load -> model('my_model', 'mm');
        $this -> check_login();

        $data['breadCrumb'] = 'Register Student';
        $data['title'] = 'Student Registration';

        $data['last_reg_'] = $this -> mm -> last_registration();
        $data['country_'] = $this -> mm -> get_country();
        $data['states_'] = $this -> mm -> get_states();
        $this -> load -> view('templates/header', $data);
        $this -> load -> view('registration/index',$data);
        $this -> load -> view('templates/footer');
	}

    function login(){
        $data['breadCrumb'] = 'Login';
        $data['title'] = 'Login';
        
        $this -> load -> view('login/header');
        $this -> load -> view('login/index', $data);
        $this -> load -> view('login/footer');
    }

    function logout(){
        $this -> session -> unset_userdata('_user___');
        $this -> session -> unset_userdata('_user_status___');
        redirect('web/login');
    }
    
    function getRegistrationSlip($reg_id__) {
        $this -> load -> model('my_model', 'mm');
        $this -> check_login();

        $data['breadCrumb'] = 'Registration Slip';
        $data['title'] = 'Student Registration Slip for Print';

        $data['last_reg_'] = $this -> mm -> last_registration();
        $data['record_'] = $this -> mm -> get_registration_details($reg_id__);
        $data['fee_rec'] = $this -> mm -> get_fees_status($reg_id__);

        $this -> load -> view('templates/header', $data);
        $this -> load -> view('registration/regSlip',$data);
        $this -> load -> view('templates/footer');
	}

    function feedfee_($reg_id__){
        $this -> load -> model ('my_model', 'mm');
        $this -> check_login();

        $data['breadCrumb'] = 'Registration Fee';
        $data['title'] = 'Student Registration Fee Form';  

        $data['last_reg_'] = $this -> mm -> last_registration();
        $data['record_'] = $this -> mm -> get_registration_details($reg_id__);
        $data['fee_rec'] = $this -> mm -> get_fees_status($reg_id__);

        $this -> load -> view('templates/header', $data);
        $this -> load -> view('registration/ff',$data);
        $this -> load -> view('templates/footer');
    }
}