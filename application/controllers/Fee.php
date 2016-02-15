<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Fee extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $this -> check_login();

        $data['breadCrumb'] = 'Add Fees Head';
        $data['title'] = 'ADD FEES HEAD';

        $data['last_reg_'] = $this -> mm -> last_registration();

        $data['menu_'] = $this -> mnum -> get_menu();
        $data['submenu_'] = $this -> mnum -> get_submenu();
        $data['static_heads'] = $this -> fm -> get_static_heads();

        $this -> load -> view('templates/header', $data);
        $this -> load -> view('fees/feeHead', $data);
        $this -> load -> view('templates/footer');
    }
    public function check_login(){
        if(! $this -> session -> userdata('_user___')) redirect('web/logout');
    }

    function feed_static_head(){
        $res_ = $this -> fm -> submit_static_fee_head();
        $this -> session -> set_flashdata('msg_all', $res_['msg_']);
    redirect('fee');
    }
    function check_existing_head(){
        $res_ = $this -> fm -> static_head_exists(trim($this->input->post('txtFeeStaticHead')));
        echo $res_['msg_'];
    }
    function update_static_head(){
        $res_ = $this -> fm -> update_static_head();
        $this -> session -> set_flashdata('msg_all', $res_['msg_']);
    redirect('fee');
    }
    function delete_static_head(){
       $res_ = $this -> fm -> delete_static_head();
       $this -> session -> set_flashdata('msg_all', $res_['msg_']);
    redirect('fee');
    }
}