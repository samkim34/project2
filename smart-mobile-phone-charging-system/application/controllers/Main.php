<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Main extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //load model
        $this->load->model('Main_model', 'main');
    }
    
    public function index(){
        $this->load->view('header/Home_header');
        $this->load->view('menu/Menu');
        $this->load->view('body/Home');
        $this->load->view('footer/Home_footer');
    }
    
    public function add_user(){
        $this->load->view('header/Home_header');
        $this->load->view('menu/Menu');
        $this->load->view('body/Add_customer');
        $this->load->view('footer/Add_customer_footer');
    }
    
    public function view_user(){
        $this->load->view('header/Home_header');
        $this->load->view('menu/Menu');
        $this->load->view('body/Users');
        $this->load->view('footer/Users_footer');
    }
    
    public function edit_user(){
        $this->load->view('header/Home_header');
        $this->load->view('menu/Menu');
        $this->load->view('body/Edit_users');
        $this->load->view('footer/Add_customer_footer');
    }
    
    public function billing(){
        $this->load->view('header/Home_header');
        $this->load->view('menu/Menu');
        $this->load->view('body/Billing');
        $this->load->view('footer/Add_customer_footer');
    }
    
    public function register_customer(){
        //check if card exist
        $card_id=$this->input->post('cardId');
        $check_card_existance=$this->main->check_card($card_id);
        if($check_card_existance=='card_exit'){
            
            $card_used['change_card']='card_used';
            $this->load->view('header/Home_header');
            $this->load->view('menu/Menu');
            $this->load->view('body/Add_customer');
            $this->load->view('footer/Add_customer_footer', $card_used);
            
        }else{
            //hold customer info
            $customer_info=array(
                'card_id'=>$this->input->post('cardId'),
                'firstname'=>$this->input->post('fname'),
                'lastname'=>$this->input->post('lname'),
                'phone_number'=>$this->input->post('phone'),
                'amount'=>$this->input->post('amount')
            );
            //clean data
            $clean_customer_data=$this->security->xss_clean($customer_info);
            $this->main->register_customer($clean_customer_data);
            redirect('Main/add_user?added');
        }
    }
    
    public function update_user_info(){
        $customer_id=$this->input->post('userid');
        //hold customer info
        $edit_customer_info=array(
            'firstname'=>$this->input->post('edit_fname'),
            'lastname'=>$this->input->post('edit_lname'),
            'phone_number'=>$this->input->post('edit_phone')
        );
        //clean data
        $clean_edit_customer_data=$this->security->xss_clean($edit_customer_info);
        $this->main->update_user_info($customer_id, $clean_edit_customer_data);
        redirect('Main/view_user?updated');
    }
    
    public function recharge(){
        $hold_card_id=$this->input->post('card_id');
        //hold amount info
        $customer_amount=$this->input->post('recharged_amount');
        //clean data
        $clean_card_id=$this->security->xss_clean($hold_card_id);
        $clean_customer_amount=$this->security->xss_clean($customer_amount);
        $this->main->recharge($clean_card_id, $clean_customer_amount);
        echo 'updated';
    }
}
?>