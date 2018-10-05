 <!--<link rel="stylesheet" href="assets/Lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">-->
 <link rel="stylesheet" href="assets/Lte/plugins/datatables/dataTables.bootstrap4.css">
 <link rel="stylesheet" href="assets/Lte/plugins/iCheck/all.css">
 
 <div class="modal" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               
              </div>
  <div class="modal-body">
       <h4 class="modal-title">User Profile Edit</h4>
    <section class='content'>
            <div class='row'>
              <div class='col-md-16'>
                <div class="register-box-body">
                 <!--<div class='box-body box-profile'><img src='assets/dist/img/user2-160x160.png' class='img-rounded' alt='User Image'>-->
                  <div class="row">
    <div class="row">
        <div class="col-sm-6 form-group">
             <label>Record number</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="id_ed" disabled="">
                </div>
            </div>
            <div class="col-sm-6 form-group">
                <label>First Name:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="name_ed" placeholder="First Name">
                </div>
            </div>
            <div class="col-sm-6 form-group">
                <label>Last Name:</label>
              <div class="form-group has-feedback">
                 <input type="text" class="form-control" id="name2_ed" placeholder="Last Name">
              </div>
            </div>
           <div class="col-sm-6 form-group">
                <label>Birth Day:</label>
                  <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                   </div>
                      <input type="text" class="form-control" id="bday_ed" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                  </div>
            </div>
      
    </div>
    <div class="row">
            <div class="col-sm-6 form-group">
                  <label>Mobile Number:</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                        <input type="text" class="form-control" id="mobile_ed" data-inputmask='"mask": "9999999999"' data-mask>
                  </div>
            </div>
            <div class="col-sm-6 form-group">
                  <label>Mobile Number two:</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                        <input type="text" class="form-control" id="mobile2_ed" data-inputmask='"mask": "9999999999"' data-mask>
                  </div>
            </div>
            <div class="col-sm-6 form-group">
               <label>Gender:</label>
		<select class="form-control"  id="gtype_ed" style="width: 100%;">
                    <option class="disabled-result"> Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>        
            <div class="col-sm-6 form-group">
                <label>NIC Number:</label>
                <div class="input-group">
                 <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-navicon"></i></span>
                 </div>
                        <input type="text" class="form-control" id="nic_ed" data-inputmask='"mask": "999999999"' data-mask>
                 </div>
            </div>
                <div class="col-sm-6 form-group">
                   <label>Email Address:</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                      </div>
                        <input type="email" id="email_ed" class="form-control" placeholder="Email">
                    </div>
            </div>
            <div class="col-sm-6 form-group">
                <label>Person Type:</label>
                    <select class="form-control"  id="emptype_ed" style="width: 100%;">
                        <option class="disabled-result"> Person Type</option>
                    </select>
               </div>        
     </div>
     <div class="row">
        <div class="col-sm-6 form-group">
         <label>Address:</label>
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add1_ed" placeholder="Address part">
            </div>
	</div>
        <div class="col-sm-6 form-group">
             <label>Address:</label>
	    <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add2_ed" placeholder="Address part">
            </div>
	</div>
        <div class="col-sm-6 form-group">
               <label>Address:</label>
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add3_ed" placeholder="Address part">
            </div>
        </div>

     </div>
               </div>
              </div>
             </div>
            </div>
           </div>
      </section>
      <div class="modal-footer">
          <button type="reset" id="reset_model" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button"  onclick="Emp_updates();" class="btn btn-primary">Save changes</button>
     </div>
    </div>
   </div>
  </div>
 </div>
 
 <div class="register-box-body">
    <h3 class="login-box-msg">Create Person</h3>

    <form action="#" method="post">
        
        <div class="row">
            <div class="col-sm-4 form-group">
                <label>First Name:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="name" placeholder="First Name">
                </div>
            </div>
            <div class="col-sm-4 form-group">
                <label>Last Name:</label>
              <div class="form-group has-feedback">
                 <input type="text" class="form-control" id="name2" placeholder="Last Name">
              </div>
            </div>
           <div class="col-sm-4 form-group">
                <label>Birth Day:</label>
                  <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                   </div>
                      <input type="text" class="form-control" id="bday" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                  </div>
            </div>
      
       </div>
        <div class="row">
            <div class="col-sm-4 form-group">
                  <label>Mobile Number:</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                        <input type="text" class="form-control" id="mobile" data-inputmask='"mask": "9999999999"' data-mask>
                  </div>
            </div>
            <div class="col-sm-4 form-group">
                  <label>Mobile Number two:</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                        <input type="text" class="form-control" id="mobile2" data-inputmask='"mask": "9999999999"' data-mask>
                  </div>
            </div>
            <div class="col-sm-4 form-group">
                 <label>Gender:</label>
		<select class="form-control"  id="gtype" style="width: 100%;">
                    <option class="disabled-result"> Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
           
<!--             <div class="form-group">
                  <label>Male
                      <input type="radio" name="r3" value="Male" class="flat-red" checked>
                  </label>
                  <label>Female
                      <input type="radio" name="r3" value="Female" class="flat-red">
                  </label>
                 </div>-->
            </div>        
            <div class="col-sm-4 form-group">
                   <label>NIC Number:</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-navicon"></i></span>
                    </div>
                        <input type="text" class="form-control" id="nic" data-inputmask='"mask": "999999999"' data-mask>
                  </div>
            </div>
             <div class="col-sm-4 form-group">
                   <label>Email Address:</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                  </div>
                    <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-sm-4 form-group">
                 <label>Person Type:</label>
		<select class="form-control"  id="emptype" style="width: 100%;">
                    <option class="disabled-result"> Person Type</option>
                    
                </select>
               </div>        
        </div>
     <div class="row">
          <div class="col-sm-4 form-group">
              <label>Address:</label>
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add1" placeholder="Address part">
            </div>
				</div>
         <div class="col-sm-4 form-group">
             <label>Address:</label>
	    <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add2" placeholder="Address part">
            </div>
	</div>
        <div class="col-sm-4 form-group">
               <label>Address:</label>
            <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add3" placeholder="Address part">
            </div>
        </div>

     </div>
        <hr>
       
      <div class="row">
        <div class="col-xs-7">
            <!--<button type="button" onclick="validation();" class="btn btn-primary btn-block btn-flat bg-blue-gradient">Submit</button>-->
                <button type="button" onclick="validation();" class="btn btn-block btn-success btn-flat">Save Person</button>
        </div>
          <!--<button type="button" class="btn btn-block btn-success btn-sm">Success</button>-->
                    
           <div class="col-xs-4">
               <button type="reset" id="reset" onclick="refresh();" class="btn btn-primary btn-block btn-flat bg-blue-gradient" value="Clear">Clear</button>
         </div>
       </div>
        <hr>
    </form>
</div>

<div class="register-box-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table With Company Person List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>FName</th>
                  <th>LName</th>
                  <th>NIC</th>
                  <th>Mobile</th>
                  <th>Mobile2</th>
                   <th>Bday</th>
                   <th>Email</th>
                   <th>Addr</th>
                   <th>Addr</th>
                   <th>Addr</th>
                    <th>Regtime</th>
                     <th>Edit</th>
                      <th>Delete</th>
                </tr>
                </thead>
                <tbody id="tbody">
                
                
                </tbody>
                <tfoot>
                <tr>
                <th>id</th>
                  <th>FName</th>
                  <th>LName</th>
                  <th>NIC</th>
                  <th>Mobile</th>
                  <th>Mobile2</th>
                   <th>Bday</th>
                   <th>Email</th>
                   <th>Addr</th>
                   <th>Addr</th>
                   <th>Addr</th>
                   <th>Regtime</th>
                   <th>Edit</th>
                   <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
</div>

<script src="assets/Lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="assets/Lte/plugins/datatables/dataTables.bootstrap4.js"></script>



<!-- InputMask -->
<script src="assets/Lte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="assets/Lte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="assets/Lte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="assets/Lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="assets/Lte/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="assets/Lte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="assets/Lte/plugins/iCheck/icheck.min.js"></script>
  <script type="text/javascript">
               
 $(document).ready(function() {
//     table_p()s;
 //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    //Money Euro
    $('[data-mask]').inputmask();
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
    //iCheck for checkbox and radio inputs
   
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });
    load_emp_list();
    load_person_type();

});
function load_person_type(){
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "person_type_Select",
          success: function (data) {
              var json = JSON.parse(data);
            
              for(var i=0;i<json.length;i++){
                  var IDD  = json[i]['id'].toString();
                   var name= json[i]['type'];

                   $("#emptype").append("<option value='"+IDD+"'>"+name+"</option>");
                
               }            
                           
            }
    });
}

   
    
function validation(){

        
      if(document.getElementById("name").value == "") {
                        document.getElementById("name").style.borderColor = "#E34234";
                           return false;
                        }else if(document.getElementById("name2").value =="") {
                           document.getElementById("name2").style.borderColor = "#E34234";
                              return false;
                       }    else if(document.getElementById("mobile").value == "") {
                           document.getElementById("mobile").style.borderColor = "#E34234";
                              return false;
                       }    else if(document.getElementById("bday").value == "") {
                           document.getElementById("bday").style.borderColor = "#E34234";
                              return false;
                       }
                        else if(document.getElementById("gtype").selectedIndex == 0) {
                           document.getElementById("gtype").style.borderColor = "#E34234";
                              return false;
                       }
                        else if(document.getElementById("nic").value == "") {
                           document.getElementById("nic").style.borderColor = "#E34234";
                              return false;
                       }else if(document.getElementById("add1").value == "") {
                           document.getElementById("add1").style.borderColor = "#E34234";
                              return false;
                       }
       
       
        else{

      save_person();
       return true;
       }
}
 function refresh()
    {
    loadpagecontaint('load_admin_tab_Cre_person');

    }
        
    function load_emp_list(){
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "Emp_table_load",
          success: function (data) {
//              alert(data);
var trHTML = '';
var id="";
var fname='';
var lname="";
var nic="";var mobile="";var gender="";var address1="";var address2="";var mobile2="";var status="";var user_cre="";var bday="";
var regtime="";var emial="";var add3="";
              var json = JSON.parse(data);
                 
              for(var i=0;i<json.length;i++){
                  id=json[i].id;
                  fname=json[i]['fname'];
                  lname=json[i]['lname'];
                  nic=json[i]['nic'];
                  mobile=json[i]['mobile'];
                  gender=json[i]['gender'];
                  address1=json[i]['address1'];
                  address2=json[i]['address2'];
                  status=json[i]['status'];
                  mobile2=json[i]['mobile2'];
                  user_cre=json[i]['user_cre'];
                  bday=json[i]['bday'];
                  regtime=json[i]['spare1'];
                  emial=json[i]['spare2'];
                  add3=json[i]['spare3'];
                  
trHTML += '<tr><td>' + id+ '</td><td>' + fname+ '</td><td>' + lname+ '</td>\n\
<td>' + nic + '</td><td>' + mobile + '</td><td>' + mobile2 + '</td><td>' + bday + '</td>\n\
<td>' + emial+ '</td><td>' + address1 + '</td><td>' + address2 + '</td><td>' + add3 + '</td>\n\
<td>' + regtime+ '</td>\n\
<td><button type="button" onclick=edit(\''+encodeURIComponent(id)+'\',\''+encodeURIComponent(fname)+'\',\''+encodeURIComponent(lname) +'\',\''+encodeURIComponent(nic) +'\',\''+encodeURIComponent(mobile)+'\',\''+encodeURIComponent(mobile2)+'\',\''+encodeURIComponent(gender)+'\',\''+encodeURIComponent(bday)+'\',\''+encodeURIComponent(address1)+'\',\''+encodeURIComponent(emial)+'\',\''+encodeURIComponent(address2)+'\',\''+encodeURIComponent(add3)+'\'); class="btn btn-default bg-blue" data-toggle="modal" data-target="#modal-default">Edit</button><td><button type="button" class="btn btn-default bg-red" data-toggle="modal" data-target="#modal-default">Delete</button></tr>';
                       
    }       
      $('#tbody').append(trHTML);    
      table_p();
        }
    });
}

  function save_person() {
// name,name2,bday,mobile,mobile2,gtype,nic,add1,add2,add3,email
        var name = document.getElementById("name").value;
        var name2 = document.getElementById("name2").value;
        var bday = document.getElementById("bday").value;
        var mobile = document.getElementById("mobile").value;
        var mobile2 = document.getElementById("mobile2").value;
        var gtype = document.getElementById("gtype").value;
        var nic = document.getElementById("nic").value;
        var add1 = document.getElementById("add1").value;
        var add2 = document.getElementById("add2").value;
        var add3 = document.getElementById("add3").value;
        var email = document.getElementById("email").value;
        var emptype = document.getElementById("emptype").value;
     
        
        $.ajax({
            type: "POST",
            url: "add_perosn_new_company",
            data: {"name": name,"name2": name2,"bday":bday,"mobile":mobile,"mobile2":mobile2,"gtype":gtype,"nic":nic,"add1":add1,"add2":add2,"add3":add3,"email":email,"emptype":emptype}, // fix: need to append your data to the call
            success: function (data) {
                   if (data == false) {
                    alert("error");
                } else {
                    alert("New Person Added As "+ name +"!");
                    $('#reset').trigger('click');
                    refresh();
                }
            }
            
        });
    }
    
function edit(id,fname,lname,nic,mobile,mobile2,gender,bday,address1,email,address2,add3){
$("#id_ed").val((decodeURIComponent(id)));
$("#name_ed").val((decodeURIComponent(fname)));
$("#name2_ed").val((decodeURIComponent(lname)));
$("#bday_ed").val((decodeURIComponent(bday)));
$("#mobile_ed").val((decodeURIComponent(mobile)));
$("#mobile2_ed").val((decodeURIComponent(mobile2)));
$("#gtype_ed").val((decodeURIComponent(gender)));
$("#nic_ed").val((decodeURIComponent(nic)));
$("#add1_ed").val((decodeURIComponent(address1)));
$("#add2_ed").val((decodeURIComponent(address2)));
$("#add3_ed").val((decodeURIComponent(add3)));
$("#email_ed").val((decodeURIComponent(email)));

}

</script>

<script>
  function table_p(){
      $(function () {
        $('#example1').DataTable({
       "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": [[ 1, "desc" ]],
      "info": true,
      "autoWidth": false
         });
    
  });
     }
  
     </script>