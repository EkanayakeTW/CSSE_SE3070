<?php

class LoadPages extends CI_Controller {

    public function loadreg() {
        if ($this->session->userdata('username_stms') == '') {
            $this->load->view('login');
        } else {
            $this->load->view('loadpages/reg');
        }
    }

    public function login() {
        
         if ($this->session->userdata('username_stms') == '') {
            $this->load->view('login');
        } else {
            $this->load->view('loadpages/reg');
        }
    }
    public function addcompy() {
        $this->load->view('loadpages/addcompany');
    }

  

   public function loadhomepage() {
        $this->load->view('loadpages/homepage');
    }

    public function loadpuseraccount() {
        $this->load->view('loadpages/useraccount');
    }

   

    
    ///////////////////////////login session//////////////////////

    public function loginmain() {
        $this->load->view('Main/login');
    }

    public function loginvali() {
        $this->load->view('Main/login_validation');
    }

    public function loginmainenter() {

        $this->load->view('Main/enter');
    }

    public function logout() {

        $this->load->view('Main/logout');
    }
    
    
    
     public function personadd() {

        $this->load->view('persontype/addperson');
    }
         public function persomenu() {

        $this->load->view('persontype/menuperson');
    }
          public function persotype() {

        $this->load->view('persontype/persontype');
    }
        public function persotype_login() {

        $this->load->view('persontype/logindetails');
    }
    
        public function load_Product_page() {

        $this->load->view('Product/add_product');
        }
      
       
       
        public function load_admin_tab_Cre_person() {

        $this->load->view('Admin_tab/Cre_person');
        }
        public function load_admin_tab_new_log() {

        $this->load->view('Admin_tab/new_log');
        }
        
        public function load_admin_tab_Role() {

        $this->load->view('Admin_tab/Role');
        }
        
        public function load_admin_Contact_book() {

        $this->load->view('Admin_tab/Contact_book');
        }
          public function load_admin_Map_emp() {

        $this->load->view('Admin_tab/Map_emp');
        }
       public function load_admin_Suplier_reg() {

        $this->load->view('Product/Suplier_reg');
        }
        public function load_admin_Suplier_Grn() {

         $this->load->view('Product/Grn');
        }
          public function load_admin_Suplier_Grn_log() {

         $this->load->view('Product/Grn_log');
        }
        
        
        
            /////////////////////////////////////////////////transpoert///////////////
        
          public function load_station_page() {
//adddepart/
         $this->load->view('loadpages/Station');
        }
             public function Route_page() {
//addcompany/
         $this->load->view('loadpages/Route_page');
        }
             public function Route_ststtion_page() {
//addcompany/
         $this->load->view('loadpages/Route_station');
        }
              public function Crete_bus_page() {
//addcompany/
         $this->load->view('loadpages/Crete_bus');
        }
              public function Account_page() {
//addcompany/
         $this->load->view('loadpages/Account');
        }
              public function Card_details_page() {
//addcompany/
         $this->load->view('loadpages/Card_details');
        }
        

}
