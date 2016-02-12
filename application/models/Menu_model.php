<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
    function get_menu(){
    	$query = $this->db->get('menu_1');

    	return $query->result();
    }
    function get_submenu(){
    	$query = $this->db->get('menu_2_submenu');

    	return $query->result();
    }
}