<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fee_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }
    function static_head_exists($head_){
        $this -> db -> where('FEE_HEAD', trim($head_));
        $query = $this -> db -> get('fee_3_static_heads');
        if($query->num_rows() != 0){
            $bool_ = array('res_' => FALSE, 'msg_' => '<span style="color:#ff0000; font-weight: bold">X: Not-Available. Already Exists</span>');
        } else {
            $bool_ = array('res_' => TRUE, 'msg_' => '<span style="color:#0000ff; font-weight: bold">This head is Available. Go ahead.</span>');
        }
        
        return $bool_;
    }
    function submit_static_fee_head(){
        $this -> db -> where('FEE_HEAD', trim($this->input->post('txtFeeStaticHead')));
        $query = $this -> db -> get('fee_3_static_heads');

        if($query->num_rows() != 0){
            $bool_ = array('res_' => FALSE, 'msg_' => 'X: This head is already exists.');
        } else {
            $data = array(
                'FEE_HEAD' => strtoupper($this -> input -> post('txtFeeStaticHead')),
                'USERNAME' => $this -> session -> userdata('_user___'),
                'DATE_' => date('Y-m-d H:i:s')
                );
        	$query = $this->db->insert('fee_3_static_heads', $data);
            if($query == true){
                $bool_ = array('res_' => TRUE, 'msg_' => 'Submitted Successfully..!!');
            } else {
                $bool_ = array('res_' => FALSE, 'msg_' => 'Something goes wrong. Please try again...!!');
            }
        }
        return $bool_;
    }
    function get_static_heads(){
        $query = $this -> db -> get('fee_3_static_heads');

        return $query->result();
    }
    function update_static_head(){
        $data = array(
            'FEE_HEAD' => trim(strtoupper($this->input->post('txtStaticHead_edit'))),
            'USERNAME' => $this -> session -> userdata('_user___'),
            'DATE_' => date('Y-m-d H:i:s')
        );
        $this -> db -> where('ST_HD_ID', $this->input->post('txtID_edit'));
        $query = $this -> db -> update('fee_3_static_heads', $data);

        if($query == true){
            $bool_ = array('res_' => TRUE, 'msg_' => 'Updated Successfully..!!');
        } else {
            $bool_ = array('res_' => FALSE, 'msg_' => 'Something goes wrong. Please try again...!!');
        }
        return $bool_;
    }
    function delete_static_head(){
        $this -> db -> where ('ST_HD_ID', $this -> input -> post('txtFeeStaticHeadID_del'));
        $query = $this -> db -> delete('fee_3_static_heads');

        if($query == true){
            $bool_ = array('res_' => TRUE, 'msg_' => 'Delete Successfully..!!');
        } else {
            $bool_ = array('res_' => FALSE, 'msg_' => 'Something goes wrong. Please try again...!!');
        }
        return $bool_;
    }
    
    //------------------------------------FLEXIBLE HEADS--------------------------------------
    function get_flexible_heads(){
        $query = $this -> db -> get('fee_4_flexible_heads');
        return $query->result();
    }
    
    function flexible_head_exists($head_){
        $this -> db -> where('FEE_HEAD', trim($head_));
        $query = $this -> db -> get('fee_4_flexible_heads');
        if($query->num_rows() != 0){
            $bool_ = array('res_' => FALSE, 'msg_' => '<span style="color:#ff0000; font-weight: bold">X: Not-Available. Already Exists</span>');
        } else {
            $bool_ = array('res_' => TRUE, 'msg_' => '<span style="color:#0000ff; font-weight: bold">This head is Available. Go ahead.</span>');
        }
        
        return $bool_;
    }
    function submit_flexible_fee_head(){
        $this -> db -> where('FEE_HEAD', trim($this->input->post('txtFeeFlexibleHead')));
        $query = $this -> db -> get('fee_4_flexible_heads');

        if($query->num_rows() != 0){
            $bool_ = array('res_' => FALSE, 'msg_' => 'X: This head is already exists.');
        } else {
            $data = array(
                'FEE_HEAD' => strtoupper($this -> input -> post('txtFeeFlexibleHead')),
                'AMOUNT' => strtoupper($this -> input -> post('txtFeeFlexibleHeadAmt')),
                'USERNAME' => $this -> session -> userdata('_user___'),
                'DATE_' => date('Y-m-d H:i:s')
                );
        	$query = $this->db->insert('fee_4_flexible_heads', $data);
            if($query == true){
                $bool_ = array('res_' => TRUE, 'msg_' => 'Submitted Successfully..!!');
            } else {
                $bool_ = array('res_' => FALSE, 'msg_' => 'Something goes wrong. Please try again...!!');
            }
        }
        return $bool_;
    }
 
    function update_flexible_head(){
        $data = array(
            'FEE_HEAD' => trim(strtoupper($this->input->post('txtFlexibleHead_edit'))),
            'AMOUNT' => trim(strtoupper($this->input->post('txtFlexibleHeadAmt_edit'))),
            'USERNAME' => $this -> session -> userdata('_user___'),
            'DATE_' => date('Y-m-d H:i:s')
        );
        $this -> db -> where('FLX_HD_ID', $this->input->post('txtID_edit'));
        $query = $this -> db -> update('fee_4_flexible_heads', $data);

        if($query == true){
            $bool_ = array('res_' => TRUE, 'msg_' => 'Updated Successfully..!!');
        } else {
            $bool_ = array('res_' => FALSE, 'msg_' => 'Something goes wrong. Please try again...!!');
        }
        return $bool_;
    }
    function delete_flexible_head(){
        $this -> db -> where ('FLX_HD_ID', $this -> input -> post('txtFeeFlexibleHeadID_del'));
        $query = $this -> db -> delete('fee_4_flexible_heads');

        if($query == true){
            $bool_ = array('res_' => TRUE, 'msg_' => 'Delete Successfully..!!');
        } else {
            $bool_ = array('res_' => FALSE, 'msg_' => 'Something goes wrong. Please try again...!!');
        }
        return $bool_;
    }
    //------------------------------------Fetch class in selected session/ Year --------------------------------------
    function get_class_in_session($year__){
        if(date('m') <= 3){
            $oldyear = $year__ - 1;
            $session_ = $oldyear . "-" . substr($year__, -2);
        } else {
            $newyear = $year__ + 1;
            $session_ = $year__ . "-" . substr($newyear, -2);
        }
        $year__ = $session_;
        $this -> db -> where ('SESSID', $year__);
        $query = $this -> db -> get('class_2_in_session');

        return $query -> result();
    }

    //------------------------------------ASSOCIATE STATIC HEADS FEE AMT TO CLASS --------------------------------------
    function submit_static_fee_to_class($year__){
        $static_head = $this -> input -> post ('txtStaticHeadSelected');
        $seleted_classes = $this->input->post('class_in_session_');
        $fee_amount = $this -> input -> post ('txtFeeStaticHeadAmt');
        
        for($loop1 = 0; $loop1 < count($seleted_classes); $loop1++){
            $this -> db -> where('CLSSESSID', $seleted_classes[$loop1]);
            $query = $this -> db -> get ('fee_8_class_fee');

            if($query->num_rows($query) != 0){
                $item = $query->row();
                $id__ = $item -> CFEEID;
                $amt__ = $item -> TOTFEE + $fee_amount;


                // Checking whether selected static head with associated class already exists or not 
                $this -> db -> where ('CFEEID', $id__);
                $this -> db -> where ('ST_HD_ID', $static_head);
                $query_inner = $this -> db -> get('fee_9_class_fee_split');

                if($query_inner -> num_rows() != 0){ 
                    $bool_ = array('res_'=>FALSE, 'msg_' => 'Already Exists'); 
                } else {
                    $data = array(
                        'TOTFEE' => $amt__,
                        'USERNAME'=> $this -> session -> userdata('_user___'),
                        'DATE_' => date('Y-m-d H:i:s')
                    );
                    $this -> db -> where ('CLSSESSID', $id__);
                    $query_update = $this -> db -> update('fee_8_class_fee', $data);

                    if($query_update == TRUE){
                        $bool_ = $this -> submit_splitted_staticHead_amount_($id__, $static_head, $fee_amount, '12');
                    } else {
                        $bool_ = array('res_'=>FALSE, 'msg_' => 'Something goes wrong. Please try again');
                    }
                }

            } else {
                $data = array(
                    'CLSSESSID' => $seleted_classes[$loop1],
                    'TOTFEE' => $fee_amount,
                    'USERNAME'=> $this -> session -> userdata('_user___'),
                    'DATE_' => date('Y-m-d H:i:s')
                );
                $query_insert = $this -> db -> insert ('fee_8_class_fee', $data);
                $id__ = $this -> db -> insert_id();
                if($query_insert == TRUE){
                    $bool_ = $this -> submit_splitted_staticHead_amount_($id__, $static_head, $fee_amount, '12');
                } else {
                    $bool_ = array('res_'=>FALSE, 'msg_' => 'Something goes wrong. Please try again');
                }
            }
        }
        return $bool_;
    }
    function submit_splitted_staticHead_amount_($id__, $static_head, $fee_amount, $payment_status = '12'){
        $data = array(
            'CFEEID' => $id__,
            'ST_HD_ID' => $static_head,
            'AMOUNT' => $fee_amount,
            'PAYMENT_STATUS' => $payment_status,
            'USERNAME'=> $this -> session -> userdata('_user___'),
            'DATE_' => date('Y-m-d H:i:s')
        );
        $query = $this -> db -> insert ('fee_9_class_fee_split', $data);

        if($query == TRUE){
            $bool_ = array('res_'=>TRUE, 'msg_' => 'Successfully submitted');
        } else {
            $bool_ = array('res_'=>FALSE, 'msg_' => 'Something goes wrong. Please try again');
        }
    return $bool_;
    }
    
}