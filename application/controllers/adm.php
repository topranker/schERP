<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Adm extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function check_login() {
        if (!$this->session->userdata('_user___'))
            $this->logout();
    }

    function stuAdmission() {
        $this->check_login();

        $data['breadCrumb'] = 'New Student Admission';
        $data['title'] = 'New Student Admission';

        $data['last_reg_'] = $this->mm->last_registration();
        $data['country_'] = $this->mm->get_country();
        $data['states_'] = $this->mm->get_states();

        $data['menu_'] = $this->mnum->get_menu();
        $data['submenu_'] = $this->mnum->get_submenu();

        $this->load->view('templates/header', $data);
        $this->load->view('admission/index', $data);
        $this->load->view('templates/footer');
    }

    
    function search_registration($reg_id__ = '') {
        if ($reg_id__ == '') {
            $reg_id__ = $this->input->post('txtReg__');
        }
        $this->check_login();
        $data['breadCrumb'] = 'Admission For';
        $data['title'] = 'Admission Screen';

        $data['last_reg_'] = $this->mm->last_registration();
        $data['record_'] = $this->mm->get_registration_details($reg_id__, $this->session->userdata('_current_year___'));
        $data['country_'] = $this->mm->get_country();
        $data['states_'] = $this->mm->get_states();
        $data['fee_rec'] = $this->mm->get_fees_status($reg_id__, $this->session->userdata('_current_year___'));

        if ($data['record_']['res_']) {
            $data['menu_'] = $this->mnum->get_menu();
            $data['submenu_'] = $this->mnum->get_submenu();

            $this->load->view('templates/header', $data);
            $this->load->view('admission/admit_student', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('reg_id_err_', "X: In-Correct Registration No. !! PLEASE, Get Registered before Admission");
            redirect('adm/stuAdmission');
        }
    }

}
