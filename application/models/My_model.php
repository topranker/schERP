<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class My_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

    function check_login() {
        $this -> db -> where('USERNAME_', $this -> input -> post ('txtUser__'));
        $this -> db -> where('PASSWORD_', $this -> input -> post ('txtPwd__'));
        $query = $this -> db -> get('login');

        if($query -> num_rows() != 0) {
            $row_ = $query -> row();
            $this -> session -> set_userdata('_user___', $row_ -> USERNAME_);
            $this -> session -> set_userdata('_user_status___', $row_ -> USER_STATUS);
            $flag_ = TRUE;
        } else {
            $flag_ = FALSE;
        }

        return $flag_;
    }
    function last_registration(){
        $query = $this -> db -> get('_id_');
        if($query -> num_rows() != 0) {
            $row_ = $query -> row();
            $reg___ = $row_ -> regid_;
        } else {
            $reg___ = 0;
        }
    return $reg___;
    }
	function registerStudent(){
        $query = $this -> db -> get('_id_');

        $regid__ = date('Y') . date('m');

        if($query->num_rows() != 0){
            $item = $query -> row();
            $pid_ = $id_ = $item -> ID_;
            $id_ = $id_ + 1;
            $flag_ = TRUE;
        } else {
            $id_ = 1001;
            $flag_ = FALSE;
        }

        $regid__ = $regid__ . $id_;
        
        $data = array(
            'regid' => $regid__,
            'FULLNAME' => $this->input->post('txtFullName'),
            'GENDER' => $this->input->post('optStuGender'),
            'FATHER' => $this->input->post('txtFthrName'),
            'ADMISSION_FOR' => $this->input->post('cmbAdmFor'),
            'CLASS_FOR_ADMISSION' => $this->input->post('cmbClassForAdm'),
            'APPLIED_YEAR' => $this->input->post('cmbAppliedYear'),
            'TRANSPORT_REQUIRED' => $this->input->post('cmbTransportNeeded'),
            'LAST_SCHOOL_NAME' => $this->input->post('txtLastSchoolName'),
            'LAST_SCHOOL_GRADE' => $this->input->post('txtLastSchoolGrade'),
            'ADDRESS_' => $this->input->post('txtAddress'),
            'CITY_' => $this->input->post('txtCity'),
            'PINCODE_' => $this->input->post('txtPinCode'),
            'STATE_' => $this->input->post('txtState'),
            'COUNTRY_' => $this->input->post('txtCountry'),
            'MOBILE_' => $this->input->post('txtMobile'),
            'EMAIL_' => $this->input->post('txtEmail'),
            'DOR_' => date('d/m/Y')
        );

        $query = $this->db->insert('register_with_us', $data);

        if($query){
            if($flag_ == TRUE) {
                $this -> db -> where ('ID_', $pid_);
                $data = array('ID_' => $id_, 'regid_' => $regid__);
                $this -> db -> update ('_id_', $data);
            } else {
                $data = array('ID_'=> $id_);
                $this -> db -> insert('_id_', $data);
            }
            $bool_ = array('res_' => TRUE, 'reg_no' => $regid__);

            $this -> put_city($this->input->post('txtCity'));
        } else {
            $bool_ = array('res_' => FALSE, 'reg_no' => 'x');
        }

        return $bool_ ;
	}

    function get_states(){
        //$this -> db -> order_by('ZONE_');
        $this -> db -> order_by('REG_NAME');
        $query = $this -> db -> get('zone_region');
        return $query->result();
    }

    function get_country(){
        $this -> db -> order_by('NAME_');
        $query = $this -> db -> get('country_');
        return $query->result();
    }

    function get_city(){
        $query = $this -> db -> get('city_');
        return $query -> result();
    }

    function put_city($city){
        $this -> db -> where('NAME_', strtoupper($city));
        $query = $this -> db -> get('city_');
        if($query -> num_rows() == 0){
            $data = array('NAME_'=> strtoupper($city));
            $this -> db -> insert('city_', $data);
        }
    }
}