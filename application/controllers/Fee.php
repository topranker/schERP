<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Fee extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function feed_static_head(){
        $res_ = $this -> fm -> submit_static_fee_head();
    redirect('web/addFeeHead');
    }
    function check_existing_head(){
        $res_ = $this -> fm -> static_head_exists(trim($this->input->post('txtFeeStaticHead')));
        echo $res_['msg_'];
    }
    function update_static_head(){
        $res_ = $this -> fm -> update_static_head();
        $this -> session -> set_flashdata('msg_edit_', $res_['msg_']);
    redirect('web/addFeeHead');
    }
    function delete_static_head(){
       $res_ = $this -> fm -> delete_static_head();
       $this -> session -> set_flashdata('msg_delete_', $res_['msg_']);
    redirect('web/addFeeHead');
    }
}