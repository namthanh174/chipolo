<?php

class Customer_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function get_list()
    {
        $this->db->select('id,username,fullname,email');
        //$where = array('email'=>'mh2@gmail.com');
        //$this->db->where($where);
        $this->db->order_by('id','DESC');
        $this->db->limit(4,0);
        $query = $this->db->get('vac_customers');
        return $query->result();
    }
    
    function create(){
        $data = array();
        $data['username'] ='minh';
        $data['password'] = '1234abc';
        $data['email'] = 'nam14@gmail.com';
        $this->db->insert('vac_customers',$data);
    }
    
    function update($id){
        $data = array();
        $data['username'] ='nam2';
        $data['password'] = '1234322';
        $data['email'] = 'nam14_update2@gmail.com';
        
        $this->db->where(array('id'=>$id));
        $this->db->update('vac_customers',$data);
    }
    
    function delete($id){
        $this->db->where(array('id'=>$id));
        $this->db->delete('vac_customers');
    }
}
