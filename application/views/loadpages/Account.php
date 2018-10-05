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
       <h4 class="modal-title">Account details From Edit</h4>
    <section class='content'>
            <div class='row'>
              <div class='col-md-16'>
                <div class="register-box-body">
                 <!--<div class='box-body box-profile'><img src='assets/dist/img/user2-160x160.png' class='img-rounded' alt='User Image'>-->
                  <div class="row">
    <div class="row">
        <div class="col-sm-6 form-group">
                <div class="form-group has-feedback">
                    <input type="hidden" class="form-control" id="id_ed">
                    
                </div>
            </div>
            <div class="col-sm-6 form-group">
                <label>Bus Number:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="name_ed" placeholder="Bus Number">
                </div>
            </div>
          
            <div class="col-sm-6 form-group">
                <label>Birth Day:</label>
                  <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                   </div>
                      <input type="text" class="form-control" id="bday2" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                  </div>
            </div>
        
        <div class="col-sm-6 form-group">
            <label>NIC:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="nicedit" >
                </div>
            </div>
        <div class="col-sm-6 form-group">
            <label>Mobile Number:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="teledit" >
                </div>
            </div>
        <div class="col-sm-6 form-group">
            <label>Password:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="passedit">
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
          <button type="button"  onclick="busdetails_updates();" class="btn btn-primary">Save changes</button>
     </div>
    </div>
   </div>
  </div>
 </div>
 
 <div class="register-box-body">
    <h3 class="login-box-msg">Create Customer Account</h3>

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
                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
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
            <div class="col-sm-4 form-group">
                <label>NIC number:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="nic" placeholder="NIC number">
                </div>
            </div>
            
            <div class="col-sm-4 form-group">
                <label>Mobile number:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="tel" placeholder="Mobile number">
                </div>
            </div>
            <div class="col-sm-4 form-group">
                <label>Password:</label>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="password" placeholder="password">
                </div>
            </div>
     
       </div>
       
     
        <div class="row">
        <div class="col-xs-7">
            <!--<button type="button" onclick="validation();" class="btn btn-primary btn-block btn-flat bg-blue-gradient">Submit</button>-->
                <button type="button" onclick="validation();" class="btn btn-block btn-success btn-flat">Save</button>
        </div>
          <!--<button type="button" class="btn btn-block btn-success btn-sm">Success</button>-->
                    
           <div class="col-xs-4">
               <button type="reset" id="reset" onclick="refresh();" class="btn btn-primary btn-block btn-flat bg-blue-gradient" value="Clear">Clear</button>
         </div>
       </div>
       </form>
</div>

<div class="register-box-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table With Registered Passenger List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
              <tr>
                <th>Customer ID</th>
                  <th>FName</th>
                  <th>LName</th>
                  <th>Bday</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>
                <tbody id="tbody">
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Customer ID</th>
                  <th>FName</th>
                  <th>LName</th>
                  <th>Bday</th>
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
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    //Money Euro
    $('[data-mask]').inputmask();
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
    load_account_list();
//    load_route_type();

});
function validation(){
// name,location
        
      if(document.getElementById("name").value == "") {
                        document.getElementById("name").style.borderColor = "#E34234";
                           return false;
                        }
                         else if(document.getElementById("lname").value == "") {
                        document.getElementById("lname").style.borderColor = "#E34234";
                           return false;
                        }
//                        else if(document.getElementById("bday").value == "") {
//                        document.getElementById("bday").style.borderColor = "#E34234";
//                           return false;
//                        }
                       
       
       
        else{

      save_accountdetails();
       return true;
       }
}
//  $json['accoutId'] = $row->accoutId;
//        $json['firstName'] = $row->firstName;
//        $json['lastName'] = $row->lastName;
//        $json['dob'] = $row->dob;
        
    function load_account_list(){
//        alert("");
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "Account_table_load",
          success: function (data) {
//              alert(data);
var trHTML = '';
var accoutId="";
var firstName='';
var lastName="",dob="";

              var json = JSON.parse(data);
                 
              for(var i=0;i<json.length;i++){
                  accoutId=json[i]['accoutId'];
                  firstName=json[i]['firstName'];
                  lastName=json[i]['lastName'];
                  dob=json[i]['dob'];
                  
                  var nic=json[i]['identificationNo'];
                  var mobile=json[i]['mobile'];
                   var password=json[i]['password'];
                  
trHTML += '<tr><td>' + accoutId+ '</td><td>' + firstName+ '</td><td>' + lastName+ '</td><td>' + dob+ '</td>\n\
<td><button type="button" onclick=edit(\''+encodeURIComponent(accoutId)+'\',\''+encodeURIComponent(firstName)+'\',\''+encodeURIComponent(lastName) +'\',\''+encodeURIComponent(nic) +'\',\''+encodeURIComponent(mobile) +'\',\''+encodeURIComponent(password) +'\',\''+encodeURIComponent(dob) +'\'); \n\
class="btn btn-default bg-blue" data-toggle="modal" data-target="#modal-default">Edit</button>\n\
<td><button type="button" onclick="busdetails_delete('+accoutId+');" class="btn btn-default bg-red">Delete</button></td></tr>';
                       
    }       
      $('#tbody').append(trHTML);    
      table_p();
        }
    });
}

  function save_accountdetails() {

        var name = document.getElementById("name").value;
         var lname = document.getElementById("lname").value;
        var bday = document.getElementById("bday").value;
        var nic = document.getElementById("nic").value;
        var tel = document.getElementById("tel").value;
        var password = document.getElementById("password").value;
       alert(bday);
     $.ajax({
            type: "POST",
            url: "Add_New_account_data",
            data: {"name": name,"lname":lname,"bday":bday,"nic":nic,"tel":tel,"password":password}, // fix: need to append your data to the call
            success: function (data) {
                   if (data == false) {
                    alert("error");
                    refresh();
                } else {
                    alert("New Account Open Added As "+ name +"!");
                    refresh();

                }
            }
            
        });
    }
    
function edit(id,fname,routeId,nic,tel,pass,dob){
$("#id_ed").val((decodeURIComponent(id)));
$("#name_ed").val((decodeURIComponent(fname)));
$("#nicedit").val((decodeURIComponent(nic)));
$("#teledit").val((decodeURIComponent(tel)));
$("#passedit").val((decodeURIComponent(pass)));
$("#bday2").val((decodeURIComponent(dob)));
//
}

function busdetails_updates(){
     var id = document.getElementById("id_ed").value;
     var name = document.getElementById("name_ed").value;
     var nicedit = document.getElementById("nicedit").value;
     var teledit = document.getElementById("teledit").value;
     var passedit = document.getElementById("passedit").value;
     var bday2 = document.getElementById("bday2").value;
     
// nicedit,teledit,passedit
         $.ajax({
            type: "POST",
            url: "accountdetails_data_updates",
            data: {"id":id,"name":name,"nicedit":nicedit,"teledit":teledit,"passedit":passedit,"bday2":bday2}, // fix: need to append your data to the call
            success: function (data) {
                alert(data);
                if (data == false) {
                    alert("Unable to Update records,try again!!");
                    refresh();
                } else {
                    alert("Records Updated");
                    refresh();

                }
            }
        });
}

function busdetails_delete(recid){
     var id = recid;
     alert(id);
//     id_ed,name_ed, name2_ed
         $.ajax({
            type: "POST",
            url: "accountdetials_data_delete",
            data: {"id":id}, // fix: need to append your data to the call
            success: function (data) {

                if (data == false) {
                    alert("Unable to Delete records,try again!!");
                    refresh();
                } else {
                    alert("Records Deleted");
                    refresh();

                }
            }
        });
}
function load_route_type(){
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "route_id_select",
          success: function (data) {
              var json = JSON.parse(data);
            
              for(var i=0;i<json.length;i++){
                  var IDD  = json[i]['routeId'];
                   var name= json[i]['routeName'];

                   $("#routeid").append("<option value='"+IDD+"'>"+name+"</option>");
                   $("#routeid2").append("<option value='"+IDD+"'>"+name+"</option>");
                
               }            
                           
            }
    });
}

function refresh()
    {
    loadpagecontaint('Account_page');

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