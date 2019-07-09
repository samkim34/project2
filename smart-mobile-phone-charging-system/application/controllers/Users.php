<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Users extends CI_Controller{
    
    function __construct(){
        parent:: __construct();
        
        $this->load->model('Main_model', 'main');
    }
    
    public function index(){
        $this->load->view('header/User_header');
        $this->load->view('menu/User_menu');
        $this->load->view('body/Users_dash');
        $this->load->view('footer/Users_dash_footer');
    }
    
    public function charge_cm(){
        $this->load->view('header/User_header');
        $this->load->view('menu/User_menu');
        $this->load->view('body/Charge');
        $this->load->view('footer/Users_dash_footer');
    }
    
    public function allow_port(){
        $unique_card_id=$this->input->post('cardNumber');
        
        //check if card is registered
        $check_card_existance=$this->main->check_card($unique_card_id);
        if(!empty($check_card_existance)){
            
            //check card balance
            $this->db->where('card_id', $unique_card_id);
            $user_data=$this->db->get('customers');
            foreach($user_data->result() as $user_data_row){
                $balance=$user_data_row->amount;
            }
            if($balance>100){
                echo 'good to go';
            }else{
                $balance_error['below_amount']='inssufficient';
                $this->load->view('header/User_header');
                $this->load->view('menu/User_menu');
                $this->load->view('body/Charge');
                $this->load->view('footer/Users_dash_footer', $balance_error);
            }
            
        }else{
            $cardNotRegistered['registerCard']='cardNotRegistered';
            $this->load->view('header/User_header');
            $this->load->view('menu/User_menu');
            $this->load->view('body/Charge');
            $this->load->view('footer/Users_dash_footer', $cardNotRegistered);
        }
    }
    
    public function charge(){
        $this->load->view('header/User_header');
        $this->load->view('menu/User_menu');
        $this->load->view('body/Ports');
        $this->load->view('footer/Users_dash_footer');
    }
    
    public function balance(){
        $this->load->view('header/User_header');
        $this->load->view('menu/User_menu');
        $this->load->view('body/Check_balance');
        $this->load->view('footer/Users_dash_footer');
    }
    
    public function check_balance(){
        $card_number=$this->input->post('card_number');
        
        $check_card_existance=$this->main->check_card($card_number);
        if(!empty($check_card_existance)){
            redirect("Users/balance/$card_number");
        }else{
            $card_not_registered['register_card']='card_not_registered';
            $this->load->view('header/User_header');
            $this->load->view('menu/User_menu');
            $this->load->view('body/Check_balance');
            $this->load->view('footer/Users_dash_footer', $card_not_registered);
        }
    }
}
?>