<?php

class MainController extends CI_Controller {

    public function index() {
            if ($this->session->userdata('username_stms') == '') {
                $this->load->view('login');
            } else {

                $this->load->view('loadpages/reg');
            }

        
    }
                   
    
}
    
    
    
