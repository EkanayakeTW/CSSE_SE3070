

 <!--<link rel="stylesheet" href="assets/Lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">-->
 <link rel="stylesheet" href="assets/Lte/plugins/datatables/dataTables.bootstrap4.css">
 <link rel="stylesheet" href="assets/Lte/plugins/iCheck/all.css">

 
 <div class="register-box-body">
    <h3 class="login-box-msg">Create Account for Login</h3>

    <form action="#" method="post">
        
        <div class="row">
             <div class="col-sm-6 form-group">
                 <label>Select Person:</label>
		<select class="form-control"  id="pid" style="width: 100%;">
                    <option class="disabled-result"> Select Person</option>
                    
                </select>
               </div>  
             <div class="col-sm-6 form-group">
                 <label>Select Role:</label>
		<select class="form-control"  id="rid" style="width: 100%;">
                    <option class="disabled-result"> Select Role</option>
                    
                </select>
               </div>  
            <div class="col-sm-4 form-group">
                <label>Username:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="username" placeholder="Username here">
                </div>
            </div>
             <!--,-->
            <div class="col-sm-4 form-group">
                <label>Password:</label>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="pass" placeholder="Password">
                </div>
            </div>
            
            <div class="col-sm-4 form-group">
                <label>Confirm Password:</label>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" id="conpass" placeholder="Confirm Password">
                </div>
            </div>
            
     
       </div>
       
     
        <div class="row">
        <div class="col-xs-7">
         <button type="button" onclick="Validate();" class="btn btn-block btn-success btn-flat">Save</button>
        </div>
            
           <div class="col-xs-4">
               <button type="reset" id="reset" onclick="refresh();" class="btn btn-primary btn-block btn-flat bg-blue-gradient" value="Clear">Clear</button>
         </div>
       </div>
       </form>
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
load_person();
load_person_role();

});
function Validate() {
        var password = document.getElementById("pass").value;
        var confirmPassword = document.getElementById("conpass").value;
        if (password != confirmPassword) {
            document.getElementById("pass").style.borderColor = "#E34234";
            document.getElementById("conpass").style.borderColor = "#E34234";
                 return false;
        }
                  else if(document.getElementById("pid").selectedIndex == 0) {
                        document.getElementById("pid").style.borderColor = "#E34234";
                           return false;
                        }
                         else if(document.getElementById("rid").selectedIndex == 0) {
                        document.getElementById("rid").style.borderColor = "#E34234";
                           return false;
                        }
                        else if(document.getElementById("username").value=="") {
                        document.getElementById("username").style.borderColor = "#E34234";
                           return false;
                        }
                        else if(document.getElementById("pass").value=="" && document.getElementById("conpass").value=="") {
                        document.getElementById("pass").style.borderColor = "#E34234";
                        document.getElementById("conpass").style.borderColor = "#E34234";
                           return false;
                        }

        passCommand();
        return true;
    }


 function passCommand() {
            
        var username = document.getElementById("username").value;
        var password = document.getElementById("pass").value;
        var person = document.getElementById("pid").value;
        var person_role = document.getElementById("rid").value;
//       alert(username);
      

      $.ajax({
            type: "POST",
            url: "registernewadmin",
            data: {"username":username,"password": password,"person":person,"person_role":person_role}, 
            success: function (data) {
                    
                   if (data == false) {
                    alert("error");
                } else {
                    alert("New Login  Added as a"+ username +" !");
                    $('#reset').trigger('click');
                }
            
            }
            
        });
    }
        


   
    
    function load_person(){
//        alert("test");
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "person_select",
        success: function (data) {
//                alert(data);
              var json = JSON.parse(data);
              
              for(var i=0;i<json.length;i++){
                   var id  = json[i]['id'];
                   var name= json[i]['fname'];
           
                   $("#pid").append("<option value='"+id+"'>"+name+"</option>");
               }            
                           
            }
            
    });
}

function load_person_role(){
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "person_select_role",
        success: function (data) {
//      alert(data);
              var json = JSON.parse(data);
//              alert(data);
              for(var i=0;i<json.length;i++){
                   var id  = json[i]['id'];
                   var name= json[i]['name'];
           
                   $("#rid").append("<option value='"+id+"'>"+name+"</option>");
               }            
                           
            }
            
    });
}

function refresh()
    {
    loadpagecontaint('loadpuseraccount');

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