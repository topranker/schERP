<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct(){
        parent::__construct();
    }
    function index() {
        $this -> load -> model('my_model', 'mm');
        if(! $this -> session -> userdata('_user___')) redirect('web/login');

        $data['breadCrumb'] = 'DashBoard';
        $data['title'] = 'DashBoard';
        $data['last_reg_'] = $this -> mm -> last_registration();

        $this -> load -> view('templates/header', $data);
        $this -> load -> view('home', $data);
        $this -> load -> view('templates/footer');
	}
        
    function stuRegistration() {
        $this -> load -> model('my_model', 'mm');

        $data['breadCrumb'] = 'Register Student';
        $data['title'] = 'Student Registration';

        $data['last_reg_'] = $this -> mm -> last_registration();
        $data['country_'] = $this -> mm -> get_country();
        $data['states_'] = $this -> mm -> get_states();
        $this -> load -> view('templates/header', $data);
        $this -> load -> view('Registration/index',$data);
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
        //$this -> session -> unset_userdata('_user___');
        //$this -> session -> unset_userdata('_user_status___');
        redirect('web/login');
    }
}