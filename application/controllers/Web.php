<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Web extends CI_Controller {
        public function index() {
            $data['breadCrumb'] = '<li><i class="fa fa-laptop"></i>DashBoard</li>';
            $data['title'] = '<i class="fa fa-laptop"></i> DashBoard';
            
            $this -> load -> view('templates/header');
            $this -> load -> view('home', $data);
            $this -> load -> view('templates/footer');
	}
        
        public function stuRegistration() {
            $data['breadCrumb'] = '<li><i class="fa fa-users"></i></li><li> Register Student</li>';
            $data['title'] = '<i class="fa fa-users"></i> Student Registration';
            
            $this -> load -> view('templates/header');
            $this -> load -> view('stuRegistration',$data);
            $this -> load -> view('templates/footer');
	}
}