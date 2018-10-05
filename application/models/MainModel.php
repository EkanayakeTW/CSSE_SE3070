<?php

class MainModel extends CI_Model {

    function addattendentce($emp_id, $enrollid, $verifymode, $iomode, $regtime, $iotime, $status,$devic_id,$spare_2,$spare_3,$spare_4,$spare_5,$spare_6) {

        $data = array
            (
            'employee_id' => $emp_id,
            'enrollid' => $enrollid,
            'verifymode' => $verifymode,
            'iomode' => $iomode,
            'regtime' => $regtime,
            'iotime' => $iotime,
            'status' => $status,
            'spare_1' => $devic_id,
            'spare_2' => $spare_2,
            'spare3' => $spare_3,
            'spare4' => $spare_4,
            'spare5' => $spare_5,
            'spre6' => $spare_6,
        );
        $this->db->insert('attendance', $data);
        $att_id = $this->db->insert_id();
        return $att_id;
    }
    function addattendentce_copy($enrollid, $verifymode, $iomode, $regtime, $iotime, $status,$devic_id,$spare_2,$spare_3,$spare_4,$spare_5,$spare_6) {

        $data = array
            (
            'enrollid' => $enrollid,
            'verifymode' => $verifymode,
            'iomode' => $iomode,
            'regtime' => $regtime,
            'iotime' => $iotime,
            'status' => $status,
            'spare_1' => $devic_id,
            'spare_2' => $spare_2,
            'spare_3' => $spare_3,
            'spare_4' => $spare_4,
            'spare_5' => $spare_5,
            'spre6' => $spare_6,
        );
        $this->db->insert('attendance_copy1', $data);
        $att_id = $this->db->insert_id();
        return $att_id;
    }
     function Employee_id_check($empid){
        $this->db->select('id');
        $this->db->from('employee');
        $this->db->where('emp_id_1',$empid);
        $query= $this->db->get();
        return $query->row(1)->id;
   }
    
    

    function search($idenroll)
     {
        $this->db->select('iotime');
        $this->db->from('attendance');
        $this->db->limit(1);
        $this->db->order_by('id','DESC');
        $this->db->where('enrollid',$idenroll);
        $query1 = $this->db->get();
        if($query1->num_rows() > 0) {
            return $query1->row()->iotime;
        } else {
            return FALSE;
        }
     }
//  function AddEmployee($empid, $name, $idcard, $password, $fp1, $fp2, $spare1, $spare2,$department) {
//
//        $data = array
//            (
//            'empid' =>$empid,
//            'name' => $name,
//            'idcard' => $idcard,
//            'password' => $password,
//            'fp1' => $fp1,
//            'fp2' => $fp2,
//            'spare1' => $spare1,
//            'spare2' => $spare2,
//            'department' => $department,
//        );
//        $this->db->insert('employee', $data);
//        $emplogid = $this->db->insert_id();
//        return $emplogid;
//    }
//  
// 
  				

  
   
  
 
   

  
}

       