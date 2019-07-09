<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Rasp extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        $port_number=$this->uri->segment(3);
        //start port
        $output = shell_exec("python D:/xammp/htdocs/projects/smart-mobile-phone-charging-system/python/new_smpcs/rasp_code.py '$port_number' ");
        
        echo $output;
    }
}
?>