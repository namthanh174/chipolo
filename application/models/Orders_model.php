<?php

class Orders_model extends CI_Model {

    /**
     * Responsable for auto load the database
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    

    /**
     * Store the new item into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    public function store_order($data) {
        
        $insert = $this->db->insert('orders', $data);  
        return $insert;
    }

    

}
?>	
