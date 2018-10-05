
<?php

class MachineControllers extends CI_Controller {

    
    
 function Add_New_station_data(){
            $name=$this->input->post('name');
            $location=$this->input->post('location');
            $this->load->model("MachinModel");
            $S_id=$this->MachinModel->Add_New_station($name,$location);
            echo $S_id;
            
            }
            
function station_data_updates(){

         $id=$this->input->post('id');
         $name=$this->input->post('name');
         $location=$this->input->post('location');
         $this->load->model("MachinModel");
         $update_id=$this->MachinModel->Updates_statio_data($id,$name,$location);
         echo $update_id;
    }
    
            
      function Station_table_load() {
        $this->load->model("MachinModel");
        $rs=$this->MachinModel->stations_table();
        echo $rs;
                    
    
    }  
            
function station_data_delete(){

         $id=$this->input->post('id');
         $this->load->model("MachinModel");
         $delete_id=$this->MachinModel->Delete_statio_data($id);
         echo $delete_id;
    }   
            
function Add_New_bus_route_data(){
            $name=$this->input->post('name');
            $pkm=$this->input->post('pkm');
            $this->load->model("MachinModel");
            $r_id=$this->MachinModel->Add_New_busroute($name,$pkm);
            echo $r_id;
            
            }        
 function Busroute_table_load() {
        $this->load->model("MachinModel");
        $rs=$this->MachinModel->busroute_table();
        echo $rs;
                    
    
    }  
 function busroute_data_updates(){

         $id=$this->input->post('id');
         $name=$this->input->post('name');
         $pkm=$this->input->post('pkm');
         $this->load->model("MachinModel");
         $update_id=$this->MachinModel->Updates_busroute_data($id,$name,$pkm);
         echo $update_id;
    }           
            
 function busroute_data_delete(){

         $id=$this->input->post('id');
         $this->load->model("MachinModel");
         $delete_id=$this->MachinModel->Delete_busroute_data($id);
         echo $delete_id;
    }             
            
     function route_id_select() {
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->Route_id_list();
        echo $json_data;
    }        
            
  function Add_New_bus_data(){
            $name=$this->input->post('name');
            $routeid=$this->input->post('routeid');
            $this->load->model("MachinModel");
            $r_id=$this->MachinModel->Add_New_busdata($name,$routeid);
            echo $r_id;
            
            }            
 function Busdetails_table_load() {
        $this->load->model("MachinModel");
        $json_data=$this->MachinModel->busdetails_table();
        $obj= json_decode($json_data);
       
            for ($i = 0; $i < count($obj); $i++) {
                 $busId = $obj[$i]->busId;
                 $busNo = $obj[$i]->busNo;
                 $routeId = $obj[$i]->routeId;
                 
                 if($routeId != 0){
                     $this->load->model("MachinModel");
                         $r_name=$this->MachinModel->Route_name($routeId);
                         $jsonarry['r_name'] = $r_name;
                         $jsonarry['busId'] = $busId;
                         $jsonarry['busNo'] = $busNo;
                         $jsonarry['routeId'] = $routeId;
                 
                    $data[] = $jsonarry;
                 }
                 
            }
        
        
        echo json_encode($data); 
                    
    
    }             
 function busdetails_data_updates(){

         $id=$this->input->post('id');
         $name=$this->input->post('name');
         $routeid2=$this->input->post('routeid2');
                   
         $this->load->model("MachinModel");
         $update_id=$this->MachinModel->Updates_busdetails_data($id,$name,$routeid2);
         echo $update_id;
    }  
    function accountdetails_data_updates(){

         $id=$this->input->post('id');
         $name=$this->input->post('name');
         $identificationNo=$this->input->post('nicedit');
          $mobile=$this->input->post('teledit');
         $password=$this->input->post('passedit');
         $dob=$this->input->post('bday2');
                   
         $this->load->model("MachinModel");
         $update_id=$this->MachinModel->Updates_accountdetails_data($id,$name,$dob,$identificationNo,$mobile,$password);
         echo $update_id;
    }  
    
    
     function busdetials_data_delete(){

         $id=$this->input->post('id');
         $this->load->model("MachinModel");
         $delete_id=$this->MachinModel->Delete_busdetials_data($id);
         echo $delete_id;
    }
    function accountdetials_data_delete(){

         $id=$this->input->post('id');
         $this->load->model("MachinModel");
         $delete_id=$this->MachinModel->Delete_accountdetails_data($id);
         echo $delete_id;
    }
    
    
     function stationId_id_select() {
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->Station_id_list();
        echo $json_data;
    }   
    function Add_New_route_station_data(){
            $name=$this->input->post('name');
            $routeid=$this->input->post('routeid');
            $this->load->model("MachinModel");
            $r_id=$this->MachinModel->Add_New_stationroute($routeid,$name);
            echo $r_id;
            
            }   
    
  function Statio_route_table_load() {
        $this->load->model("MachinModel");
        $json_data=$this->MachinModel->stationroute_table();
        $obj= json_decode($json_data);
       
            for ($i = 0; $i < count($obj); $i++) {
                 $routeId= $obj[$i]->routeId;
                 $stationId = $obj[$i]->stationId;
                 $routeOrder = $obj[$i]->routeOrder;
                 
                 if($routeId != 0){
                     $this->load->model("MachinModel");
                         $r_name=$this->MachinModel->Routestation_name($stationId);
                         $jsonarry['r_name'] = $r_name;
                         $jsonarry['routeId'] = $routeId;
                         $jsonarry['stationId'] = $stationId;
                         $jsonarry['routeOrder'] = $routeOrder;
                 
                    $data[] = $jsonarry;
                 }
                 
            }
        
        
        echo json_encode($data); 
                    
    
    }               
    
    function stationroutes_data_updates(){

         $id=$this->input->post('id');
         $name=$this->input->post('name');
         $routeid2=$this->input->post('routeid2');
         $this->load->model("MachinModel");
         $update_id=$this->MachinModel->Updates_stationroutes_data($id,$routeid2,$name);
         echo $update_id;
    }    
    
     function stationroute_data_delete(){

         $id=$this->input->post('id');
         $this->load->model("MachinModel");
         $delete_id=$this->MachinModel->Delete_stationroute_data($id);
         echo $delete_id;
    }
    function Add_New_account_data(){
            $name=$this->input->post('name');
            $lastName=$this->input->post('lname');
            $dob=$this->input->post('bday');
            $nic=$this->input->post('nic');
            $tel=$this->input->post('tel');
            $password=$this->input->post('password');
            $local=1;
            $this->load->model("MachinModel");
            $r_id=$this->MachinModel->Add_New_account($name,$lastName,$dob,$nic,$tel,$local,$password);
            echo $r_id;
            
            }   
     function account_data_updates(){

         $id=$this->input->post('id');
         $name=$this->input->post('name');
         $routeid2=$this->input->post('routeid2');
         // nicedit,teledit,passedit
          $nicedit=$this->input->post('nicedit');
           $teledit=$this->input->post('teledit');
            $passedit=$this->input->post('passedit');
            $bday2=$this->input->post('bday2');
            
         $this->load->model("MachinModel");
         $update_id=$this->MachinModel->Updates_account_data($id,$name,$routeid2,$nicedit,$teledit,$passedit,$bday2);
         echo $update_id;
    }  
    
    
     function buscar_id_select() {
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->buscard_id_list();
        echo $json_data;
    }     
    
     function Add_New_card_data(){
//         "acc": acc,"pin": pin,"dateissue":dateissue,"ttype":ttype,"ctype":ctype,"balance":balance
            $acc=$this->input->post('acc');
            $pin=$this->input->post('pin');
            $dateissue=$this->input->post('dateissue');
            $ttype=$this->input->post('ttype');
            $ctype=$this->input->post('ctype');
            $balance=$this->input->post('balance');
            $expireDate=$this->input->post('dateissueex');
            $this->load->model("MachinModel");
            $r_id=$this->MachinModel->Add_New_card($acc,$pin,$dateissue,$balance,$ttype,$expireDate,$ctype);
            echo $r_id;
            
            }   
    
    
    function Card_table_load() {
         
       
        $this->load->model("MachinModel");
        $rs=$this->MachinModel->card_table();
        $obj = json_decode($rs);
                    
      for ($r = 0; $r < count($obj); $r++) {
            $jsonarry['cardId'] = $obj[$r]->cardId;
            $jsonarry['accountId'] = $obj[$r]->accountId;
            $jsonarry['pin'] = $obj[$r]->pin;
            $jsonarry['dateIssued'] = $obj[$r]->dateIssued;
            $jsonarry['balance'] = $obj[$r]->balance;
            $jsonarry['onLoan'] = $obj[$r]->onLoan;
            $jsonarry['expireDate'] = $obj[$r]->expireDate;
            $jsonarry['tempory'] = $obj[$r]->tempory;
            
            $acc_id = $obj[$r]->accountId;
                  $p_name=$this->MachinModel->Person_name($acc_id);
                  $jsonarry['p_name'] = $p_name;
                  
                  $data[] = $jsonarry;
           
             }
      
         echo json_encode($data);
    }
    
    function card_data_updates(){
//id":id,"":acc_ed,"":pin_ed,"":dateissue_ed,"":balance_ed,
//"":,"ctype_ed":ctype_ed,"":dateissueex_ed
         $id=$this->input->post('id');
         $acc_ed=$this->input->post('acc_ed');
         $pin=$this->input->post('pin_ed');
         $dateIssued=$this->input->post('dateissue_ed');
         $balance=$this->input->post('balance_ed');
         $onLoan=$this->input->post('ttype_ed');
         $expireDate=$this->input->post('dateissueex_ed');
         $tempory=$this->input->post('ctype_ed');
         
         
         $this->load->model("MachinModel");
         $update_id=$this->MachinModel->Updates_card_data($id,$pin,$dateIssued,$balance,$onLoan,$expireDate,$tempory);
         echo $update_id;
    }  
    
    function busdcard_data_delete(){

         $id=$this->input->post('id');
         $this->load->model("MachinModel");
         $delete_id=$this->MachinModel->Delete_busdcar_data($id);
         echo $delete_id;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function insertcompany() {

        $now = new DateTime();
        $now->setTimezone(new DateTimezone('Asia/Colombo'));
        $getregtime = $now->format('Y-m-d H:i:s');

        $companyname = $this->input->post('companyname');
        $address1 = $this->input->post('address1');
        $address2 = $this->input->post('address2');
        $address3 = $this->input->post('address3');
        $emailcompany = $this->input->post('emailcompany');
        $telephone = $this->input->post('telephone');
        $faxno = $this->input->post('faxno');
        $status = 2;
        $this->load->model("MachinModel");
        $companyid = $this->MachinModel->saveCompany($companyname, $address1, $address2, $address3, $emailcompany, $telephone, $faxno, $status, $getregtime);
        echo $companyid;
    }
    

    function companyselect() {
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->companysql();
        echo $json_data;
    }
 function registernewadmin(){
            $username= $this->input->post('username');
            $password= $this->input->post('password');
            $person= $this->input->post('person');
            $person_role= $this->input->post('person_role');
            $password = md5($password); //encript password
            $status = 2;
            $employee=8;
            $this->load->model("MachinModel");
            $companyid = $this->MachinModel->save_new_admin($person_role,$employee,$username,$password,$status);
            echo $companyid;
    }
    function Save_Person_List_type(){ 
        $name= $this->input->post('ptype');
        $this->load->model("MachinModel");
        $per_id = $this->MachinModel->save_Person_type($name);
        echo $per_id;
        
        }
        
    function add_product_new(){
            $now = new DateTime();
            $now->setTimezone(new DateTimezone('Asia/Colombo'));
            $regtime = $now->format('Y-m-d H:i:s'); 
            $username = $this->session->userdata('username_stms');
            $company_id = $this->session->userdata('company_id_stms');
            $brand_id=$this->input->post('Brand');
            $name=$this->input->post('name');
            $code=$this->input->post('code');
            $discription=$this->input->post('des');
            $category=$this->input->post('category');
            $status=2;
            $this->load->model("MachinModel");
            $product_id=$this->MachinModel->Add_New_product($brand_id,$name,$code,$discription,$status,$category,$company_id,$regtime,$username);
            echo $product_id;
            
           }
function add_perosn_new_company(){
                
        $now = new DateTime();
        $now->setTimezone(new DateTimezone('Asia/Colombo'));
        $regtime = $now->format('Y-m-d H:i:s'); 
            $username = $this->session->userdata('username_stms');
            $company_id = $this->session->userdata('company_id_stms');
            $fname=$this->input->post('name');
            $lname=$this->input->post('name2');
            $bday=$this->input->post('bday');
            $phone=$this->input->post('mobile');
            $phone2=$this->input->post('mobile2');
            $gender=$this->input->post('gtype');
            $nic=$this->input->post('nic');
            $address1=$this->input->post('add1');
            $address2=$this->input->post('add2');
            $address3=$this->input->post('add3');
            $email=$this->input->post('email');
            $employee_type=$this->input->post('emptype');
            $img="";
            $status=1;
            $person_id = 0;
            $this->load->model("MachinModel");
            $person_id=$this->MachinModel->Add_New_person($fname,$lname,$nic,$phone,$gender,$address1,$address2,$status,$phone2,$username,$bday,$img,$regtime,$email,$address3,$company_id);
//            echo $person_id;
             if($person_id != 0){
//                 $employee_type=2;
                 $rs=$this->MachinModel->savePerson_Emp($person_id,$employee_type,$status,$regtime);
                 
            }
             echo $rs;
            
           }
           function person_select() {
               
                $this->load->model("MachinModel");
                $json_data=$this->MachinModel->person_find_select();
                echo $json_data;
           }
           function person_select_role() {
                         $this->load->model("MachinModel");
                         $json_data=$this->MachinModel->person_find_select_role();
                         echo $json_data;
           }
           function tableloard_Login() {
                         $this->load->model("MachinModel");
                         $json_data = $this->MachinModel->Login_records();
                         echo $json_data;
           }
     function Brand_Select() {
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->Brand_lect();
        echo $json_data;
    }
      function product_category_Select() {
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->ProductCategory_lect();
        echo $json_data;
    }
     function person_type_Select() {
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->Person_type_lect();
        echo $json_data;
    }
           
    function activity_select() {
//        $company_id = $this->session->userdata('company_id');
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->activityselect();
        echo $json_data;
    }
     function role_select() {
//        $company_id = $this->session->userdata('company_id');
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->roleselect();
        echo $json_data;
    }
    function add_pages_to_role() {
        $page = $this->input->post('page');
        $role = $this->input->post('role');
        $status = 2;
        $this->load->model("MachinModel");
        $rolehaspage_id = $this->MachinModel->save_role_has_page($status,$role,$page);
        echo $rolehaspage_id;
    }
    function role_add() {
        $name = $this->input->post('name');
        $status = 2;
        $this->load->model("MachinModel");
        $role_id = $this->MachinModel->saveRole($name,$status);
        echo $role_id;
    }
    
     
     function Emp_table_load() {
         
        $company_id = $this->session->userdata('company_id_stms');
        $this->load->model("MachinModel");
        $rs=$this->MachinModel->Person_table($company_id);
        $obj = json_decode($rs);
                    
      for ($r = 0; $r < count($obj); $r++) {
            $jsonarry['id'] = $obj[$r]->id;
            $jsonarry['fname'] = $obj[$r]->fname;
            $jsonarry['lname'] = $obj[$r]->lname;
            $jsonarry['nic'] = $obj[$r]->nic;
            $jsonarry['mobile'] = $obj[$r]->mobile;
            $jsonarry['gender'] = $obj[$r]->gender;
            $jsonarry['address1'] = $obj[$r]->address1;
            $jsonarry['address2'] = $obj[$r]->address2;
            $jsonarry['status'] = $obj[$r]->status;
            $jsonarry['mobile2'] = $obj[$r]->mobile2;
            $jsonarry['user_cre'] = $obj[$r]->user_cre;
            $jsonarry['bday'] = $obj[$r]->bday;
            $jsonarry['spare1'] = $obj[$r]->spare1;
            $jsonarry['spare2'] = $obj[$r]->spare2;
             $jsonarry['spare3'] = $obj[$r]->spare3;
            $data[] = $jsonarry;
             }
      
         echo json_encode($data);
    }
    
    
 function Product_table_load() {
         
        $company_id = $this->session->userdata('company_id_stms');
        $this->load->model("MachinModel");
        $rs=$this->MachinModel->Product_table_data($company_id);
        echo $rs;
    }   
    
   function Map_person_To_Suppliers() {
//        person,name,comname,add1,add2,mobile,Email
        $now = new DateTime();
        $now->setTimezone(new DateTimezone('Asia/Colombo'));
        $regtime = $now->format('Y-m-d H:i:s');
        $company_id = $this->session->userdata('company_id_stms');
        $emp_id = $this->input->post('person');
        $name = $this->input->post('name');
        $company = $this->input->post('comname');
        $add1= $this->input->post('add1');
        $add2= $this->input->post('add2');
        $mobile= $this->input->post('mobile');
        $Email= $this->input->post('Email');
        $status = 2;
        $Supplier_id=0;
        $this->load->model("MachinModel");
        $Supplier_id = $this->MachinModel->saveSupplier_company($emp_id,$name,$company,$add1,$add2,$regtime,$mobile,$Email,$status,$company_id);
        
          if($Supplier_id != 0){
                $this->load->model("MachinModel");
                $update_id=$this->MachinModel->active_btn_To_emp($emp_id,$status);
          }
        
        
        echo $Supplier_id;
    }    
    
     function Person_Select_map() {
        $company_id = $this->session->userdata('company_id_stms');
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->Person_lect($company_id);
        $obj= json_decode($json_data);
       
            for ($i = 0; $i < count($obj); $i++) {
                 $person_id = $obj[$i]->id;
//                 $name= $obj[$i]->fname;
                 $this->load->model("MachinModel");
            $att_available=$this->MachinModel->att_id_check($person_id);
             
             if($att_available > 0){
                 $this->load->model("MachinModel");
                 $json_data2 = $this->MachinModel->Emp_lect($att_available);
                 $obj2= json_decode($json_data2);
                    
                 for ($r = 0; $r < count($obj2); $r++) {
                                $jsonarry['name'] = $obj[$i]->fname;
                                $jsonarry['id'] = $obj2[$r]->id;
                                $data[] = $jsonarry;
                    }
             }
                 
                 
                 
            }
//        echo $att_available;
       echo json_encode($data);
    }
    function Person_Select_emp_type() {
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->Person_emp_type();
        echo $json_data;
    }
    
     function Emp_load() {
         
        $company_id = $this->session->userdata('company_id');
        $this->load->model("MachinModel");
        $rs=$this->MachinModel->Emp_table_data_map();
        echo $rs;
    }  
     function Suppliers_load() {
         
        $company_id = $this->session->userdata('company_id_stms');
        $this->load->model("MachinModel");
        $json_data3 = $this->MachinModel->Supliers_lect($company_id);
        echo $json_data3;

    }  
    
   
function add_New_grn(){
       
        $now = new DateTime();
        $now->setTimezone(new DateTimezone('Asia/Colombo'));
        $regtime = $now->format('Y-m-d H:i:s'); 
            $supname=$this->input->post('supname');
            $supreff=$this->input->post('supreff');
            $tot=$this->input->post('tot');
            $dis=$this->input->post('dis');
            $gtot=$this->input->post('gtot');
            $status=1;
            $this->load->model("MachinModel");
            $rs=$this->MachinModel->saveNew_grn($supname,$supreff,$regtime,$tot,$dis,$gtot,$status);
            if($rs > 0){
                echo $rs;
            }
            
            
           }
  
      function person_supplier() {
          
        $company_id = $this->session->userdata('company_id');  
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->Sppliers_id($company_id);
        echo $json_data;
    }
    function Grn_id_select() {
          
        $company_id = $this->session->userdata('company_id');  
        $this->load->model("MachinModel");
        $json_data = $this->MachinModel->Sppliers_id($company_id);
        echo $json_data;
    }
 
 function Account_table_load() {
        $this->load->model("MachinModel");
        $rs=$this->MachinModel->account_table();
        echo $rs;
                    
    
    } 
 
 
}