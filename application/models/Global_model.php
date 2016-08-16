<?php
<<<<<<< HEAD

class Global_model extends CI_Model {

=======
class Global_model extends CI_Model {
>>>>>>> task6
    /**
     * Responsable for auto load the database
     * @return void
     */
    public function __construct() {
    	$this->load->database();
    }
<<<<<<< HEAD

=======
>>>>>>> task6
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

