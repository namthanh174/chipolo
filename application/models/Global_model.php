<?php
class Global_model extends CI_Model {
    /**
     * Responsable for auto load the database
     * @return void
     */
    public function __construct() {
    	$this->load->database();
    }
    /**
     * Get product by his is
     * @param N/A
     * @return array
     */
    public function get_country_list() {
    	$this->db->select('country_code, country_name');
    	$this->db->from('countries');
    	$query = $this->db->get();
    	return $query->result_array();
    }
}

