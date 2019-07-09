<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Main_model extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    public function check_card($card_id){
        $this->db->where('card_id', $card_id);
        $get_customer_info=$this->db->get('customers');
        //count customers
        $count_customers=$get_customer_info->num_rows();
        if($count_customers==1){
            return 'card_exit';
        }
    }
    
    public function register_customer($clean_customer_data){
        $this->db->insert('customers', $clean_customer_data);
    }
    
    public function recharge($clean_card_id, $clean_customer_amount){
        $this->db->set("amount", "amount+$clean_customer_amount", false);
        $this->db->where('card_id', $clean_card_id);
        $this->db->update('customers');
    }
    
    public function update_user_info($customer_id, $clean_edit_customer_data){
        $this->db->where('customer_id', $customer_id);
        $this->db->update('customers', $clean_edit_customer_data);
    }
}
?>