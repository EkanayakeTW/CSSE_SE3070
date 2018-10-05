<?php  
 class Main_model extends CI_Model  
 {  
      function can_login($username, $password)  
      {  
          $status=2;
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $this->db->where('status', $status); 
           $query = $this->db->get('login');  
          
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
      function get_employee_id($username){
                $this->db->select('employee');
                $this->db->from('login');
                $this->db->where('username',$username);
                $query= $this->db->get();
                return $query->row(1)->employee;
         }
         function get_person_id_emp($emp_id){
                $this->db->select('person_id');
                $this->db->from('employee');
                $this->db->where('id',$emp_id);
                $query= $this->db->get();
                return $query->row(1)->person_id;
         }
         
         
         
      function get_person_loginid($username){
                $this->db->select('id');
                $this->db->from('login');
                $this->db->where('username',$username);
                $query= $this->db->get();
                return $query->row(1)->id;
         }
         function get_person_role_id($username){
             
                $this->db->select('role');
                $this->db->from('login');
                $this->db->where('username',$username);
                $query= $this->db->get();
                return $query->row()->role;
         }
         function get_person_type_name($id_role){
             
                $this->db->select('name');
                $this->db->from('role');
                $this->db->where('id',$id_role);
                $query= $this->db->get();
                return $query->row()->name;
         }
       
         
         
       function get_compamny_id($prson_id){
                $this->db->select('company_id');
                $this->db->from('person');
                $this->db->where('id',$prson_id);
                $query= $this->db->get();
                return $query->row(1)->company_id;
         }
         
       function get_compamny_Name($c_id){
                $this->db->select('name');
                $this->db->from('company');
                $this->db->where('id',$c_id);
                $query= $this->db->get();
                return $query->row(1)->name;
         }

          function loginlast_seen($c_id){
                $this->db->select('regtime');
                $this->db->from('log');
                $this->db->limit(2);
                $this->db->order_by('id','DESC');
                $this->db->where('login',$c_id);
                $query= $this->db->get();
                return $query->row(1)->regtime;
         }
         
         
         
         
       function savelog($description,$ip,$getregtime,$tasktype,$login){
          
        $data = array
            (
            'description' => $description,
            'ip' => $ip,
            'regtime' => $getregtime,
            'tasktype' => $tasktype,
            'login'=>$login,
            
        );
        
        $this->db->insert('log', $data);
        $machineidlog = $this->db->insert_id();
       if ($machineidlog > 0) {
            echo $machineidlog;
           } 
           else {
               echo FALSE;
        }

    }
    function get_person_activity_id($role_id){
                $status=2;
                $this->db->select('*');
                $this->db->from('role_has_activity');
                $this->db->where('role',$role_id);
                $this->db->where('status',$status);
                $query= $this->db->get();

                 $json = array();

                   foreach ($query->result() as $row)
                   {
                       $json['activity'] = $row->activity;
                       $data[] = $json;

                   }
                return json_encode($data);
                     }
   
       function load_pages($c_id){
          $status=2;
//        $query = $this->db->query("select * from activity where status='$status' AND id='$c_id'");
                
                $this->db->select('*');
                $this->db->from('activity');
                $this->db->where('id',$c_id);
                $this->db->where('status',$status);
                $query= $this->db->get();
                
                    $json = array();

                   foreach ($query->result() as $row)
                   {
                       $json['id'] = $row->id;
                       $json['name'] = $row->name;
                       $json['url'] = $row->url;
                       $json['order'] = $row->order;
                       
                       $data[] = $json;

                   }
                 return json_encode($data);
                     }
 function get_person_id($company_id){
                $this->db->select('*');
                $this->db->from('person');
                $this->db->where('company_id',$company_id);
                $query= $this->db->get();

                 $json = array();

                   foreach ($query->result() as $row)
                   {
                       $json['id'] = $row->id;
                        $json['fname'] = $row->fname;
                       $data[] = $json;

                   }
                return json_encode($data);
                     }
                     
 
   
    function Check_login_id($p_id){
              $this->db->select('*');
               $this->db->from('login');
               $this->db->where('person',$p_id);
               $query= $this->db->get();
                    $json = array();
                        foreach ($query->result() as $row)
                   {
                       $json['id'] = $row->id;
                       $data[] = $json;
                   }
                 return json_encode($data);
        }
      function Check_log_lst($p_id){
              $this->db->select('*');
              $this->db->from('log');
              $this->db->limit(1);
              $this->db->order_by('id','DESC');
              $this->db->where('login',$p_id);
              $query= $this->db->get();
                
                    $json = array();

                   foreach ($query->result() as $row)
                   {
                       $json['id'] = $row->id;
                       $json['regtime'] = $row->regtime;
                       $data[] = $json;

                   }
                 return json_encode($data);
                     }
      
 }  