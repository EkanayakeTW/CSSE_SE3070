<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function login() {
     
        $this->load->view("login");
    }

    function login_validation() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            //true  
            $username = $this->input->post('username');
            $passwords = $this->input->post('password');

//            $password = md5($passwords);
            $password = md5($passwords);
            //model function  
            $this->load->model('Main_model');
            if ($this->Main_model->can_login($username, $password)) {
                $this->load->model('Main_model');
                $login_id = $this->Main_model->get_person_loginid($username); //login id
                $emp_id = $this->Main_model->get_employee_id($username); //emp id
                $person_id_emp = $this->Main_model->get_person_id_emp($emp_id); //emp id
                
                
                
                $Company_id = $this->Main_model->get_compamny_id($person_id_emp); //company id
                $Company_name = $this->Main_model->get_compamny_Name($Company_id); //company name
                $role_id = $this->Main_model->get_person_role_id($username); //login role id
                $user_type = $this->Main_model->get_person_type_name($role_id); //user name

                $this->insertlog($login_id);
                $last_seen = $this->Main_model->loginlast_seen($login_id);


                $session_data = array(
                    'username_stms' => $username,
                    'personid1_stms' => $Company_name,
                    'lst' => $last_seen,
                    'role' => $role_id,
                    'role_name' => $user_type,
                    'company_id_stms' => $Company_id,
                    
                  
                );
                $this->session->set_userdata($session_data);
                redirect(base_url() . 'Dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect(base_url() . 'loginpanel');
            }
        } else {
            //false  
            $this->login();
        }
    }

    function enter() {
        if ($this->session->userdata('username_stms') != '') {
            echo '<p>Welcome - ' . $this->session->userdata('username_stms') . '</p>';
            echo '<label><a href="' . base_url() . 'logout">Logout</a></label>';
        } else {
            redirect(base_url() . 'loginpanel');
        }
    }

    function logout() {
        $this->session->unset_userdata('username_stms');
        redirect(base_url() . 'loginpanel');
    }

    function insertlog($login_id) {
        $_SESSION['lastRequest'] = $_SERVER['REMOTE_ADDR'];
        $device_ipad = $_SESSION['lastRequest'];
        $now = new DateTime();
        $now->setTimezone(new DateTimezone('Asia/Colombo'));
        $getregtime = $now->format('Y-m-d H:i:s');

        $description = "Log count";
        $ip = $device_ipad;
        $tasktype = "logintype";

        $this->load->model('Main_model');
        $companyid = $this->Main_model->savelog($description, $ip, $getregtime, $tasktype, $login_id);
        echo $companyid;
    }

    function load_navigatio_() {
        $this->load->model("Main_model");
        $json_data = $this->Main_model->load_pages();
        echo $json_data;
    }

    function loadMenu() {
        $id = "";
        $jsonarry = array();
        $id_role = $this->session->userdata('role');
        $this->load->model("Main_model");
        $activity_id = $this->Main_model->get_person_activity_id($id_role); //activity id
           
        $jsonobj = json_decode($activity_id);
        for ($i = 0; $i < count($jsonobj); $i++) {

            $acti_id = $jsonobj[$i]->activity;

            $this->load->model("Main_model");
            $JJ = $this->Main_model->load_pages($acti_id);

            $obj = json_decode($JJ);

            $jsonarry['id'] = $obj[0]->id;
            $jsonarry['name'] = $obj[0]->name;
            $jsonarry['url'] = $obj[0]->url;
            $jsonarry['order'] = $obj[0]->order;
            

            $data[] = $jsonarry;
        }


        echo json_encode($data);
    }

     function loadLast_online_list(){
        $id = "";
        $att_available=0;
        $jsonarry = array();
        $company_id = $this->session->userdata('company_id_stms');
        $this->load->model("Main_model");
        $all_p_id = $this->Main_model->get_person_id($company_id); //activity id
        $jsonobj = json_decode($all_p_id);
        
        for ($i = 0; $i < count($jsonobj); $i++) {

            $p_id = $jsonobj[$i]->id;
            $fname = $jsonobj[$i]->fname;

            $this->load->model("Main_model");
            $att_available=$this->Main_model->att_id_check($p_id); 
           
             if($att_available > 0){
                 $this->load->model("Main_model");
                 $JJ = $this->Main_model->Check_login_id($att_available);
                 $jsonobj2 = json_decode($JJ);
                        for ($r = 0; $r < count($jsonobj2); $r++) {
                                    $p_id = $jsonobj2[$r]->id;
                                    $cc = $this->Main_model->Check_log_lst($p_id);
                                    $jsonobj3 = json_decode($cc);
                                    for ($q = 0; $q < count($jsonobj3); $q++) {
                                            $p_id = $jsonobj3[$q]->id;
                                            $last_seen = $jsonobj3[$q]->regtime;
                                                $now = new DateTime(); 
                                                $dteEnd1   = new DateTime($last_seen); 
                                                $dteDiff1  = $now->diff($dteEnd1);
                                                $minitu_ago=$dteDiff1->format("%H:%I:%S");

                                            $jsonarry['id'] = $p_id;
                                            $jsonarry['name'] = $fname;
                                            $jsonarry['time'] = $minitu_ago;
                                       $data[] = $jsonarry;
                                    }
                        }
             }

           

           
        }

//echo $JJ;
        echo json_encode($data);
    }

}
