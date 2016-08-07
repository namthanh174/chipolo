<?php

class Products_model extends CI_Model {

    /**
     * Responsable for auto load the database
     * @return void
     */
    public function __construct() {
        $this->load->database();
    }

    /**
     * Get product by his is
     * @param int $product_id 
     * @return array
     */
    public function get_product_by_id($product_id) {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('id', $product_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    /**
     * Fetch products data from the database
     * possibility to mix search, filter and order
     * @param string $search_string 
     * @param strong $order
     * @param string $order_type 
     * @param int $limit_start
     * @param int $limit_end
     * @return array
     */
    public function get_products($search_string = null, $order = null, $order_type = 'Asc', $limit_start = 0, $limit_end = 10) {

        $this->db->select(array('id','title','sub_title', 'image_key', 'quantity','description','price','special_price', 'free_shipping'));

        $this->db->from('products');
        if ($search_string) {
            $this->db->like('description', $search_string);
        }


        $this->db->group_by('products.id');

        if ($order) {
            $this->db->order_by($order, $order_type);
        } else {
            $this->db->order_by('id', $order_type);
        }


        $this->db->limit($limit_start, $limit_end);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Count the number of rows
     * @param int $search_string
     * @param int $order
     * @return int
     */
    function count_products($search_string = null, $order = null) {
        $this->db->select('*');
        $this->db->from('products');
        if ($search_string) {
            $this->db->like('description', $search_string);
        }
        if ($order) {
            $this->db->order_by($order, 'Asc');
        } else {
            $this->db->order_by('id', 'Asc');
        }
        $query = $this->db->get();
        return $query->num_rows();
    }

    /**
     * Store the new item into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function store_product($data) {
        $insert = $this->db->insert('products', $data);
        return $insert;
    }

    /**
     * Update product
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update_product($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
        $report = array();

        $error = $this->db->error();
        $report['error'] = $error['code'];
        $report['message'] = $error['message'];
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete product
     * @param int $id - product id
     * @return boolean
     */
    function delete_product($id) {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }

}
?>	
