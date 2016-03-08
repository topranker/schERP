<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class My_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function check_login() {
        $this->db->where('USERNAME_', $this->input->post('txtUser__'));
        $this->db->where('PASSWORD_', $this->input->post('txtPwd__'));
        $query = $this->db->get('login');

        if ($query->num_rows() != 0) {
            $row_ = $query->row();
            $this->session->set_userdata('_user___', $row_->USERNAME_);
            $this->session->set_userdata('_user_status___', $row_->USER_STATUS);
            $this->session->set_userdata('_current_year___', date('Y'));
            $flag_ = TRUE;
        } else {
            $flag_ = FALSE;
        }

        return $flag_;
    }

    function last_registration() {
        $query = $this->db->get('_id_');
        if ($query->num_rows() != 0) {
            $row_ = $query->row();
            $reg___ = $row_->regid_;
        } else {
            $reg___ = 0;
        }
        return $reg___;
    }

    function do_upload_reg_photo($file_reg_name) {
        $config = array(
            'upload_path' => './nitnav/reg_student_photo',
            'allowed_types' => 'jpg|png',
            'overwrite' => TRUE,
            'max_size' => 70,
            'file_name' => $file_reg_name
        );
        $file_element_name = 'txtregPhoto';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['file_name'];
        } else {
            $path_ = 'no-image.jpg';
        }
        return $path_;
    }

    function registerStudent() {
        $query = $this->db->get('_id_');

        $regid__ = date('Y') . date('m');

        if ($query->num_rows() != 0) {
            $item = $query->row();
            $pid_ = $id_ = $item->ID_;
            $id_ = $id_ + 1;
            $flag_ = TRUE;
        } else {
            $id_ = 1001;
            $flag_ = FALSE;
        }

        $file_reg_name = $regid__ = $regid__ . $id_;
        $file_name = $this->do_upload_reg_photo($regid__);

        $this->db->where('REGION', $this->input->post('txtState'));
        $q = $this->db->get('master_2_zone_region');
        if ($q->num_rows() != 0) {
            $r_ = $q->row();
            $zone__ = $r_->ZONE_;
        } else {
            $zone__ = 'x';
        }
        $data = array(
            'regid' => $regid__,
            'FULLNAME' => $this->input->post('txtFullName'),
            'GENDER' => $this->input->post('optStuGender'),
            'DOB_' => $this->input->post('txtStudDOB'),
            'PHOTO_' => $file_name,
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
            'ZONE_' => $zone__,
            'STATE_' => $this->input->post('txtState'),
            'COUNTRY_' => $this->input->post('txtCountry'),
            'MOBILE_' => $this->input->post('txtMobile'),
            'EMAIL_' => $this->input->post('txtEmail'),
            'DOR_' => date('Y-m-d H:i:s'),
            'KNOWN_SOURCE_' => $this->input->post('cmbSourceKnowing'),
            'USERNAME_' => $this->session->userdata('_user___')
        );

        $query = $this->db->insert('register_with_us', $data);

        if ($query) {
            if ($flag_ == TRUE) {
                $this->db->where('ID_', $pid_);
                $data = array('ID_' => $id_, 'regid_' => $regid__);
                $this->db->update('_id_', $data);
            } else {
                $data = array('ID_' => $id_, 'regid_' => $regid__);
                $this->db->insert('_id_', $data);
            }
            $bool_ = array('res_' => TRUE, 'reg_no' => $regid__);

            $this->put_city($this->input->post('txtCity'));
        } else {
            $bool_ = array('res_' => FALSE, 'reg_no' => 'x');
        }

        return $bool_;
    }

    function update_registration($regid__) {

        $file_reg_name = $regid__;
        $file_name = $this->do_upload_reg_photo($regid__);

        $this->db->where('REGION', $this->input->post('txtState'));
        $q = $this->db->get('master_2_zone_region');
        if ($q->num_rows() != 0) {
            $r_ = $q->row();
            $zone__ = $r_->ZONE_;
        } else {
            $zone__ = 'x';
        }
        if ($file_name == 'no-image.jpg') {
            $data = array(
                'regid' => $regid__,
                'FULLNAME' => $this->input->post('txtFullName'),
                'GENDER' => $this->input->post('optStuGender'),
                'DOB_' => $this->input->post('txtStudDOB'),
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
                'ZONE_' => $zone__,
                'STATE_' => $this->input->post('txtState'),
                'COUNTRY_' => $this->input->post('txtCountry'),
                'MOBILE_' => $this->input->post('txtMobile'),
                'EMAIL_' => $this->input->post('txtEmail'),
                'DOR_' => date('Y-m-d H:i:s'),
                'KNOWN_SOURCE_' => $this->input->post('cmbSourceKnowing'),
                'USERNAME_' => $this->session->userdata('_user___')
            );
        } else {
            $data = array(
                'regid' => $regid__,
                'FULLNAME' => $this->input->post('txtFullName'),
                'GENDER' => $this->input->post('optStuGender'),
                'DOB_' => $this->input->post('txtStudDOB'),
                'PHOTO_' => $file_name,
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
                'ZONE_' => $zone__,
                'STATE_' => $this->input->post('txtState'),
                'COUNTRY_' => $this->input->post('txtCountry'),
                'MOBILE_' => $this->input->post('txtMobile'),
                'EMAIL_' => $this->input->post('txtEmail'),
                'DOR_' => date('Y-m-d H:i:s'),
                'KNOWN_SOURCE_' => $this->input->post('cmbSourceKnowing'),
                'USERNAME_' => $this->session->userdata('_user___')
            );
        }
        $this->db->where('regid', $regid__);
        $query = $this->db->update('register_with_us', $data);

        if ($query) {
            $bool_ = array('res_' => TRUE, 'reg_no' => $regid__);

            $this->put_city($this->input->post('txtCity'));
        } else {
            $bool_ = array('res_' => FALSE, 'nothing updated');
        }

        return $bool_;
    }

    function get_registration_details($regid__, $year__) {
        $this->db->select('register_with_us.*, master_1_zone_.ZONE, master_2_zone_region.REG_NAME');
        $this->db->from('register_with_us');
        $this->db->join('master_1_zone_', 'register_with_us.ZONE_ = master_1_zone_.ID AND register_with_us.regid = ' . $regid__, 'inner');
        $this->db->join('master_2_zone_region', 'register_with_us.STATE_ = master_2_zone_region.REGION', 'inner');
        $this->db->where('YEAR(DOR_)', $year__);
        $query = $this->db->get();

        if ($query->num_rows() != 0) {
            $row_ = $query->row();
            $record_ = array('res_' => TRUE, 'data_' => $query->row());
        } else {
            $record_ = array('res_' => FALSE, 'data_' => 'No Data Found');
        }

        return $record_;
    }

    function get_fees_status($regid__, $year__) {
        $this->db->where('regID', $regid__);
        $this->db->where('feetype', 'Registration');
        $this->db->where('YEAR(DOE_)', $year__);
        $query = $this->db->get('fee_2');

        if ($query->num_rows() != 0) {
            $record_ = array('res_' => TRUE, 'data_' => $query->row());
        } else {
            $record_ = array('res_' => FALSE, 'data_' => '0');
        }

        return $record_;
    }

    function get_states() {
        //$this -> db -> order_by('ZONE_');
        $this->db->order_by('REG_NAME');
        $query = $this->db->get('master_2_zone_region');
        return $query->result();
    }

    function get_country() {
        $this->db->order_by('NAME_');
        $query = $this->db->get('master_0_country_');
        return $query->result();
    }

    function get_city() {
        $query = $this->db->get('master_4_city_');
        return $query->result();
    }

    function put_city($city) {
        $this->db->where('NAME_', strtoupper($city));
        $query = $this->db->get('master_4_city_');
        if ($query->num_rows() == 0) {
            $data = array('NAME_' => strtoupper($city));
            $this->db->insert('master_4_city_', $data);
        }
    }

    function submit_fee($regid__) {
        $this->db->where('regid', $regid__);
        $query = $this->db->get('register_with_us');
        if ($query->num_rows()) {
            $row = $query->row();
            $mob_no = $row->MOBILE_;
        } else {
            $mob_no = '9760020667';
        }

        $data = array(
            'regID' => $regid__,
            'date' => date('d/m/Y'),
            'Amount' => $this->input->post('txtAmount'),
            'username' => $this->session->userdata('_user___'),
            'feetype' => $this->input->post('optFeeCategory'),
            'feemode' => $this->input->post('optFeeMode'),
            'bankname' => $this->input->post('txtBank'),
            'dd_ch_no' => $this->input->post('txtDDChequeNo'),
            'dd_ch_date' => $this->input->post('txtDate'),
            'DOE_' => date('Y-m-d H:i:s')
        );
        $bool_ = $this->db->insert('fee_2', $data);
        if ($bool_ == TRUE && $this->session->userdata('_user___')) {
            $username = "migsrdr";
            $password = "123456";
            $number = $mob_no;
            $sender = "oMIGSo";

            $message = "Thank you for registering with Mother India Global School, Rudrapur. Your registration number is : " . $regid__;
            $url = "login.bulksmsgateway.in/sendmessage.php?user=" . urlencode($username) . "&password=" . urlencode($password) . "&mobile=" . urlencode($number) . "&sender=" . urlencode($sender) . "&message=" . urlencode($message) . "&type=" . urlencode('3');

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $curl_scraped_page = curl_exec($ch);
            curl_close($ch);
        }
        return $bool_;
    }

    function count_registrations($year_) {
        $this->db->where('YEAR(DOR_)', $year_);
        $query = $this->db->get('register_with_us');

        return $query->num_rows();
    }

    function count_fees($feetype_, $year_) {

        $query = $this->db->get('fee_2');

        if ($query->num_rows() != 0) {
            $this->db->select('SUM(Amount) as amt');
            if ($feetype_ != 'all')
                $this->db->where('feetype', $feetype_);
            $this->db->where("YEAR(DOE_)", $year_);
            $query = $this->db->get('fee_2');
            if ($query->num_rows() != 0) {
                $row = $query->row();
                $amt = $row->amt;
            } else {
                $amt = 0;
            }
        } else {
            $amt = 0;
        }
        return $amt;
    }

    function seek_registered_cities($year_) {
        $query = $this->db->get('master_4_city_');
        if ($query->num_rows() != 0) {
            $this->db->select('count(distinct(CITY_)) as cnt_city');
            $this->db->where('YEAR(DOR_)', $year_);
            $query = $this->db->get('register_with_us');
            if ($query->num_rows() != 0) {
                $rows = $query->row();
                $city_cnt = $rows->cnt_city;
            } else {
                $city_cnt = 0;
            }
        } else {
            $city_cnt = 0;
        }
        return $city_cnt;
    }

    function seek_registered_states($year_) {
        $query = $this->db->get('master_3_state_');
        if ($query->num_rows() != 0) {
            $this->db->select('count(distinct(STATE_)) as cnt_state');
            $this->db->where('YEAR(DOR_)', $year_);
            $query = $this->db->get('register_with_us');
            if ($query->num_rows() != 0) {
                $rows = $query->row();
                $state_cnt = $rows->cnt_state;
            } else {
                $state_cnt = 0;
            }
        } else {
            $state_cnt = 0;
        }
        return $state_cnt;
    }

    function seek_online_enquiries($year_) {
        $this->db->where('YEAR(DOR_)', $year_);
        $query = $this->db->get('online_registration');

        return $query->num_rows();
    }

    function get_total_registration_detail($year__) {
        $this->db->where('YEAR(DOR_)', $year__);
        $query = $this->db->get('register_with_us');

        return $query->result();
    }

    function get_total_registration_fee($year__) {
        $this->db->where('YEAR(DOE_)', $year__);
        $this->db->where('feetype', 'Registration');
        $query = $this->db->get('fee_2');

        return $query->result();
    }

}
