<?php
class MachinModel extends CI_Model {
    
        function Add_New_station($name,$location){
        
         $data = array
            (
            'stationName' =>$name,
            'location' => $location,
            
           
        );
        $this->db->insert('stations', $data);
        $stations_id = $this->db->insert_id();
        return $stations_id;
}
    
      function Updates_statio_data($id,$name,$location){
        
        
         $this->db->set('location',$location);
         $this->db->set('stationName',$name);
         $this->db->where('stationId', $id);
         $id_rec =$this->db->update('stations');
         return $id_rec;
   }
    function Delete_statio_data($id){
        
         $this->db->where('stationId', $id);
         $id_rec=$this->db->delete('stations');
         return $id_rec;
   }
     function stations_table()
{

$query = $this->db->query("SELECT * FROM stations");
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['stationId'] = $row->stationId;
        $json['stationName'] = $row->stationName;
        $json['location'] = $row->location;
        $data[] = $json;
    }
  return json_encode($data);
      }
   
   function Add_New_busroute($name,$priceKm){
        
         $data = array
            (
            'routeName' =>$name,
            'priceKm' => $priceKm,
            
           
        );
        $this->db->insert('busroutes', $data);
        $stations_id = $this->db->insert_id();
        return $stations_id;
}
    
      function busroute_table()
{

$query = $this->db->query("SELECT * FROM busroutes");
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['routeId'] = $row->routeId;
        $json['routeName'] = $row->routeName;
        $json['priceKm'] = $row->priceKm;
        $data[] = $json;
    }
  return json_encode($data);
      }
   
      function Updates_busroute_data($id,$name,$pkm){
        
        
         $this->db->set('priceKm',$pkm);
         $this->db->set('routeName',$name);
         $this->db->where('routeId', $id);
         $id_rec =$this->db->update('busroutes');
         return $id_rec;
   }
      
   function Delete_busroute_data($id){
        
         $this->db->where('routeId', $id);
         $id_rec=$this->db->delete('busroutes');
         return $id_rec;
   }    
 function Add_New_busdata($name,$routeId){
        
         $data = array
            (
            'busNo' =>$name,
            'routeId' => $routeId,
           );
        $this->db->insert('busdetails', $data);
        $stations_id = $this->db->insert_id();
        return $stations_id;
}     
 
  function busdetails_table()
{

$query = $this->db->query("SELECT * FROM busdetails");
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['busId'] = $row->busId;
        $json['busNo'] = $row->busNo;
        $json['routeId'] = $row->routeId;
        $data[] = $json;
    }
  return json_encode($data);
      }

  function Updates_busdetails_data($id,$name,$routeid){
      
        
         
          $this->db->set('routeId',$routeid);
         $this->db->set('busNo',$name);
         $this->db->where('busId', $id);
         $id_rec =$this->db->update('busdetails');
         return $id_rec;
   }
   function Updates_accountdetails_data($id,$name,$dob,$identificationNo,$mobile,$password){
         
         $this->db->set('password',$password);
         $this->db->set('mobile',$mobile);
         $this->db->set('identificationNo',$identificationNo);
         $this->db->set('dob',$dob);
         $this->db->set('firstName',$name);
         $this->db->where('accoutId', $id);
         $id_rec =$this->db->update('accoutdetails');
         return $id_rec;
   }
function Delete_busdetials_data($id){
        
         $this->db->where('busId', $id);
         $id_rec=$this->db->delete('busdetails');
         return $id_rec;
   }    
 function Route_name($id){
        $query = $this->db->query("select routeName from busroutes where routeId='$id'");

        if($query->num_rows() > 0) {
            return $query->row()->routeName;
        } else {
            return FALSE;
        }
   }

 function Route_id_list(){

$query = $this->db->query("select * from busroutes");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['routeId'] = $row->routeId;
        $json['routeName'] = $row->routeName;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 
  function Station_id_list(){

$query = $this->db->query("select * from stations");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['stationId'] = $row->stationId;
        $json['stationName'] = $row->stationName;
        $json['location'] = $row->location;
        
        $data[] = $json;
        
    }
   return json_encode($data);
 }

function Add_New_stationroute($stationId,$routeOrder){
        
         $data = array
            (
            'stationId' =>$stationId,
            'routeOrder' => $routeOrder,
           );
        $this->db->insert('routestations', $data);
        $stations_id = $this->db->insert_id();
        return $stations_id;
}     
 
function stationroute_table()
{

$query = $this->db->query("SELECT * FROM  routestations");
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['routeId'] = $row->routeId;
        $json['stationId'] = $row->stationId;
        $json['routeOrder'] = $row->routeOrder;
        $data[] = $json;
    }
  return json_encode($data);
      }

   function Routestation_name($id){
        $query = $this->db->query("select stationName from stations where stationId='$id'");

        if($query->num_rows() > 0) {
            return $query->row()->stationName;
        } else {
            return FALSE;
        }
   }
    function Updates_stationroutes_data($id,$routeid,$name){
        
        
         $this->db->set('routeOrder',$name);
         $this->db->set('stationId',$routeid);
         $this->db->where('routeId', $id);
         $id_rec =$this->db->update('routestations');
         return $id_rec;
   }
   
   function Delete_stationroute_data($id){
        
         $this->db->where('routeId', $id);
         $id_rec=$this->db->delete('routestations');
         return $id_rec;
   } 
   
   function Add_New_account($name,$lastName,$dob,$identificationNo,$mobile,$local,$password){
        
         $data = array
            (
            'firstName' =>$name,
            'lastName' => $lastName,
            'dob' => $dob,
             'identificationNo'=>$identificationNo,
             'mobile'=>$mobile,
             'local'=>$local,
             'password'=>$password,
           );
        $this->db->insert('accoutdetails', $data);
        $stations_id = $this->db->insert_id();
        return $stations_id;
}     
   
     function account_table()
{

$query = $this->db->query("SELECT * FROM accoutdetails");
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['accoutId'] = $row->accoutId;
        $json['firstName'] = $row->firstName;
        $json['lastName'] = $row->lastName;
        $json['dob'] = $row->dob;
        $json['identificationNo'] = $row->identificationNo;
        $json['mobile'] = $row->mobile;
        $json['password'] = $row->password;
        $data[] = $json;
    }
  return json_encode($data);
      }
   function Updates_account_data($id,$name,$routeid,$identificationNo,$mobile,$password,$bday){
       $this->db->set('dob',$bday); 
       $this->db->set('password',$password);
         $this->db->set('mobile',$mobile);
          $this->db->set('identificationNo',$identificationNo);
         $this->db->set('routeId',$routeid);
         $this->db->set('busNo',$name);
         $this->db->where('busId', $id);
         $id_rec =$this->db->update('busdetails');
         return $id_rec;
   }
    
    
    function buscard_id_list(){

$query = $this->db->query("select * from accoutdetails");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['accoutId'] = $row->accoutId;
        $json['firstName'] = $row->firstName;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
    
 function Add_New_card($acc,$pin,$dateissue,$balance,$ttype,$expireDate,$ctype){
        
         $data = array
            (
            'accountId' =>$acc,
            'pin' => $pin,
            'dateIssued' => $dateissue,
            'balance'=>$balance,
            'onLoan'=>$ttype,
            'expireDate'=>$expireDate,
             'tempory'=>$ctype,
           );
        $this->db->insert('carddetails', $data);
        $stations_id = $this->db->insert_id();
        return $stations_id;
}        
    
 
 function card_table()
{

$query = $this->db->query("SELECT * FROM carddetails");
     $json = array();

    foreach ($query->result() as $row)
    {   $json['cardId'] = $row->cardId;
        $json['accountId'] = $row->accountId;
        $json['pin'] = $row->pin;
        $json['dateIssued'] = $row->dateIssued;
        $json['balance'] = $row->balance;
         $json['onLoan'] = $row->onLoan;
        $json['expireDate'] = $row->expireDate;
        $json['tempory'] = $row->tempory;
        
        $data[] = $json;
    }
  return json_encode($data);
      }
      
  function Person_name($id){
        $query = $this->db->query("select firstName from accoutdetails where accoutId='$id'");

        if($query->num_rows() > 0) {
            return $query->row()->firstName;
        } else {
            return FALSE;
        }
   }
 
     function Updates_card_data($id,$pin,$dateIssued,$balance,$onLoan,$expireDate,$tempory){
          $this->db->set('tempory',$tempory);
         $this->db->set('expireDate',$expireDate);
         $this->db->set('onLoan',$onLoan);
          $this->db->set('balance',$balance);
         $this->db->set('dateIssued',$dateIssued);
         $this->db->set('pin',$pin);
         $this->db->where('cardId', $id);
         $id_rec =$this->db->update('carddetails');
         return $id_rec;
   }
    
   function Delete_busdcar_data($id){
        
         $this->db->where('cardId', $id);
         $id_rec=$this->db->delete('carddetails');
         return $id_rec;
   }    
   
   function Delete_accountdetails_data($id){
        
         $this->db->where('accoutId', $id);
         $id_rec=$this->db->delete('accoutdetails');
         return $id_rec;
   }   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    
    
    
    
    
    
    
    
   
        function saveCompany($companyname,$address1,$address2,$address3,$emailcompany,$telephone,$faxno,$status,$getregtime){
          
        $data = array
            (
            'name' => $companyname,
            'address1' => $address1,
            'address2' => $address2,
            'address3'=>$address3,
            'email'=>$emailcompany,
            'telephone' => $telephone,
            'fax'=>$faxno,
            'status' => $status,
            'regtime' => $getregtime,
        );
        
        $this->db->insert('company', $data);
        $machineidlog = $this->db->insert_id();
       if ($machineidlog > 0) {
            echo  $machineidlog;
           } 
           else {
               echo FALSE;
        }

    }
    
    
 
  function companysql(){
    $query = $this->db->query("select id,name from company where status=2");
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['name'] = $row->name;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
    
 
 
  function saveSupplier_company($person_id,$name,$company,$address1,$address2,$regtime,$mobile,$email,$status,$company_id){
				
        $data = array
            (
            'employee_id' => $person_id,
            'name'=>$name,
            'company' => $company,
            'address1'=>$address1,
            'address2'=>$address2,
            'regtime'=>$regtime,
            'mobile'=>$mobile,
            'email'=>$email,
            'status'=>$status,
            'company_id'=>$company_id,
            
            
        );
        
        $this->db->insert('supplier', $data);
        $supplier_id = $this->db->insert_id();
       if ($supplier_id > 0) {
           return $supplier_id;
           } 
           else {
               echo FALSE;
        }

    }
    
   
      
//        function search($idenroll)
//     {
//        $this->db->select('iotime');
//        $this->db->from('attendance');
//        $this->db->limit(1);
//        $this->db->order_by('id','DESC');
//        $this->db->where('enrollid',$idenroll);
//        $query1 = $this->db->get();
//        if($query1->num_rows() > 0) {
//            return $query1->row()->iotime;
//        } else {
//            return FALSE;
//        }
//     }
        
     function get_discription($empid){
        $this->db->select('name');
        $this->db->from('code');
        $this->db->where('id',$empid);
        $query= $this->db->get();
        return $query->row(1)->name;
         }
   function save_new_admin($role,$employee,$eusernamed,$passwordd,$status){
       

        $data = array
            (
            'role' => $role,
            'employee'=>$employee,
            'username' =>$eusernamed,
            'password' => $passwordd,
            'status' => $status,
           );
        $this->db->insert('login', $data);
        $emplogid = $this->db->insert_id();
        return $emplogid;
        
    }
   
    
    
     
         
         function save_Person_type($name){
       $data = array
       (
            'name' => $name,
           
        );
        $this->db->insert('person_type', $data);
        $emplogid = $this->db->insert_id();
        return $emplogid;
   }
         
function Add_New_person($fname,$lname,$nic,$mobile,$gender,$address1,$address2,$status,$mobile2,$user_cre,$bday,$img,$spare1,$spare2,$address3,$company_id){
        
         $data = array
            (
            'fname' =>$fname,
            'lname' => $lname,
            'nic' => $nic,
            'mobile' => $mobile,
            'gender' => $gender,
            'address1' => $address1,
            'address2' => $address2,
            'status' => $status,
            'mobile2' => $mobile2,
            'user_cre' => $user_cre,
            'bday' => $bday,
            'img' => $img,
            'spare1' => $spare1,
            'spare2' => $spare2,
            'spare3' => $address3,
            'company_id' => $company_id,
           
        );
        $this->db->insert('person', $data);
        $p_id = $this->db->insert_id();
        return $p_id;
}
function savePerson_Emp($person_id,$employee_type,$status,$regtime){
        $data = array
            (
            'person_id' => $person_id,
            'employee_type' => $employee_type,
            'status'=>$status,
            'regtime'=>$regtime,
            
        );
        
        $this->db->insert('employee', $data);
        $emp_id = $this->db->insert_id();
       if ($emp_id > 0) {
            return  $emp_id;
           } 
           else {
               echo FALSE;
        }
}

function Add_New_product($brand_id,$name,$code,$discription,$status,$product_category_id,$company_id,$regtime,$user_cr){
        
         $data = array
            (
            'brand_id' =>$brand_id,
            'name' => $name,
            'code' => $code,
            'discription' => $discription,
            'status' => $status,
            'product_category_id' => $product_category_id,
            'company_id' => $company_id,
            'regtime' => $regtime,
            'user_cr' => $user_cr,
            
           
        );
        $this->db->insert('product', $data);
        $product_id = $this->db->insert_id();
        return $product_id;
}
    
     function person_find_select(){
       $query = $this->db->query("select * from person");
    
            $json = array();

            foreach ($query->result() as $row)
            {

                $json['id'] = $row->id;
                $json['fname'] = $row->fname;
                $data[] = $json;

            }
           return json_encode($data);
         }
         
          function person_find_select_role(){
       $query = $this->db->query("select * from role");
    
            $json = array();

            foreach ($query->result() as $row)
            {

                $json['id'] = $row->id;
                $json['name'] = $row->name;
                $data[] = $json;

            }
           return json_encode($data);
         }
         
          function Login_records()
{
     $query = $this->db->query('SELECT * FROM log ');
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['id'] = $row->id;
        $json['ip'] = $row->ip;
        $json['login'] = $row->login;
        $json['regtime'] = $row->regtime;
        $data[] = $json;
        
    }
  return json_encode($data);
      }
      
      function Brand_lect(){

$query = $this->db->query("select id,name from brand where status=2");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['name'] = $row->name;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 function ProductCategory_lect(){

$query = $this->db->query("select id,name from product_category where status=2");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['name'] = $row->name;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
  function Person_type_lect(){

$query = $this->db->query("select * from employee_type where status=2");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['type'] = $row->type;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 function activityselect(){

$query = $this->db->query("select id,activity from activity where status=2");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['activity'] = $row->activity;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 function roleselect(){

$query = $this->db->query("select id,name from role where status=2");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['name'] = $row->name;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
  function save_role_has_page($status,$role,$activity_id){
//name	count	regtime	status	user_created	department_id

        $data = array
            (
            'stutus' => $status,
            'role' => $role,
            'activity' =>$activity_id ,
            
           );
        $this->db->insert('role_has_activity', $data);
        $role_has_activity_id = $this->db->insert_id();
         if ($role_has_activity_id > 0) {
            echo  $role_has_activity_id;
           } 
           else {
               echo FALSE;
        }
    }
    
    function saveRole($name,$status){

        $data = array
            (
            'name' => $name,
            'status' => $status,
            
           );
        $this->db->insert('role', $data);
        $role_id = $this->db->insert_id();
         if ($role_id > 0) {
            echo  $role_id;
           } 
           else {
               echo FALSE;
        }
    }
    

 
  function emp_name($id,$location){

$query = $this->db->query("select * from employee where status=2 AND id='+$id+' AND location_id='+$location+'");

      
    $json = array();
    
    foreach ($query->result() as $row)
    {
        $json['firstname'] = $row->firstname;
        $json['EMP_ID'] = $row->EMP_ID;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 
 function locationselect($id){
//     $company_id=4;
$query = $this->db->query("select id,name from location where status=2 and department_id ='+$id+'");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['name'] = $row->name;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
  function Person_table($id)
{

$query = $this->db->query("SELECT * FROM person where company_id ='+$id+'");
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['id'] = $row->id;
        $json['fname'] = $row->fname;
        $json['lname'] = $row->lname;
        $json['nic'] = $row->nic;
        $json['mobile'] = $row->mobile;
         $json['mobile2'] = $row->mobile2;
        $json['gender'] = $row->gender;
        $json['address1'] = $row->address1;
        $json['address2'] = $row->address2;
        $json['status'] = $row->status;
        $json['user_cre'] = $row->user_cre;
        $json['bday'] = $row->bday;
        $json['spare1'] = $row->spare1;
        $json['nic'] = $row->nic;
        $json['spare2'] = $row->spare2;
        $json['spare3'] = $row->spare3;
        $data[] = $json;
    }
  return json_encode($data);
      }
      
  
 function Product_table_data($id)
{
$status=2;
$query = $this->db->query("SELECT * FROM product where status='+$status+' and company_id ='+$id+'");
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['id'] = $row->id;
        $json['brand_id'] = $row->brand_id;
        $json['name'] = $row->name;
        $json['code'] = $row->code;
        $json['discription'] = $row->discription;
        $json['status'] = $row->status;
        $json['product_category_id'] = $row->product_category_id;
        $json['regtime'] = $row->regtime;
        $json['user_cr'] = $row->user_cr;
        
        
        $data[] = $json;
        
    }
  return json_encode($data);
      }
      
       function Person_lect($company_id){

$query = $this->db->query("select * from person where company_id='+$company_id+'");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['fname'] = $row->fname;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 
 function Emp_lect($emp_id){
$status=1;
$query = $this->db->query("select * from employee where id='+$emp_id+' AND status ='+$status+'");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 function Supliers_lect($company_id){

$query = $this->db->query("select * from supplier where company_id='+$company_id+'");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['name'] = $row->name;
        $json['company'] = $row->company;
        $json['address1'] = $row->address1;
        $json['address2'] = $row->address2;
        $json['regtime'] = $row->regtime;
        $json['mobile'] = $row->mobile;
        $json['email'] = $row->email;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 
  function Sup_table($emp_id){
$status=1;
$query = $this->db->query("select * from employee where id='+$emp_id+' AND status ='+$status+'");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 
 
  function Person_emp_type(){

$query = $this->db->query("select * from employee_type where status=2");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['type'] = $row->type;
        $data[] = $json;
        
    }
   return json_encode($data);
 }
 
 
 function Emp_table_data_map()
{
$status=2;
$query = $this->db->query("SELECT * FROM employee where status='+$status+'");
     $json = array();
    
    foreach ($query->result() as $row)
    {   $json['id'] = $row->id;
        $json['person_id'] = $row->person_id;
        $json['status'] = $row->status;
        $json['employee_type'] = $row->employee_type;
        $json['regtime'] = $row->regtime;
        $data[] = $json;
        
    }
  return json_encode($data);
      }
 
 
  function active_btn_To_emp($id,$status)
    {
        $this->db->set('status',$status);
        $this->db->where('id', $id);
        $this->db->update('employee');
        echo $id;
    }
 
 
 function att_id_check($p_id){
          $query = $this->db->query("select id from employee where person_id='$p_id' AND employee_type=6");

        if($query->num_rows() > 0) {
            return $query->row()->id;
        } else {
            return FALSE;
        }
   }
    function sup_id_check($p_id){
          $query = $this->db->query("select id from supplier where employee_id='$p_id'");

        if($query->num_rows() > 0) {
            return $query->row()->id;
        } else {
            return FALSE;
        }
   }
   
   
   function saveNew_grn($supplier_id,$reff,$regtime,$total,$discount,$grand_total,$status){
        $data = array
            (
            'supplier_id' => $supplier_id,
            'reff' => $reff,
            'regtime'=>$regtime,
            'total'=>$total,
            'discount'=>$discount,
            'grand_total'=>$grand_total,
            'status'=>$status,
            
        );
        
        $this->db->insert('grn', $data);
        $grn_id = $this->db->insert_id();
       if ($grn_id > 0) {
            return  $grn_id;
           } 
           else {
               echo FALSE;
        }
}

 function Sppliers_id($company){

$query = $this->db->query("select * from supplier where status=2 and company_id='$company'");
    
    $json = array();
    
    foreach ($query->result() as $row)
    {
        
        $json['id'] = $row->id;
        $json['employee_id'] = $row->employee_id;
        $json['name'] = $row->name;
        $json['company'] = $row->company;        
        $data[] = $json;
        
    }
   return json_encode($data);
 }

 }