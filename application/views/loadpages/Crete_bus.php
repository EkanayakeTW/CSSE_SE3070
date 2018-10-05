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
       <h4 class="modal-title">Bus details From Edit</h4>
    <section class='content'>
            <div class='row'>
              <div class='col-md-16'>
                <div class="register-box-body">
               <div class="row">
    <div class="row">
        <div class="col-sm-6 form-group">
                <div class="form-group has-feedback">
                    <input type="hidden" class="form-control" id="id_ed" disabled="">
                </div>
            </div>
            <div class="col-sm-6 form-group">
                <label>Bus Number:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="name_ed" placeholder="Bus Number">
                </div>
            </div>
         <div class="col-sm-6 form-group">
                 <label>Select Route:</label>
		<select class="form-control"  id="routeid2" style="width: 100%;">
                    <option class="disabled-result"> Select Bus Route</option>
                    
                </select>
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
    <h3 class="login-box-msg">Create Bus Details</h3>

    <form action="#" method="post">
        
        <div class="row">
            <div class="col-sm-4 form-group">
                <label>Bus Number:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="name" placeholder="Route Name">
                </div>
            </div>
            <div class="col-sm-4 form-group">
                 <label>Select Route:</label>
		<select class="form-control"  id="routeid" style="width: 100%;">
                    <option class="disabled-result"> Select Bus Route</option>
                    
                </select>
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
        
      
          <div class="col-sm-4 form-group">
        </div>
    
    
    </form>
</div>

<div class="register-box-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table With Bus Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
              <tr>
                <th>Bus ID</th>
                  <th>Bus No</th>
                  <th>Route Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody id="tbody">
                
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Bus ID</th>
                  <th>Bus No</th>
                  <th>Route Name</th>
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

    load_busdata_list();
    load_route_type();

});
function validation(){
// name,location
        
      if(document.getElementById("name").value == "") {
                        document.getElementById("name").style.borderColor = "#E34234";
                           return false;
                        }
                       else if(document.getElementById("routeid").selectedIndex == 0) {
                           document.getElementById("routeid").style.borderColor = "#E34234";
                              return false;
                       }
       
       
        else{

      save_busdetails();
       return true;
       }
}
 
        
    function load_busdata_list(){
//        alert("");
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "Busdetails_table_load",
          success: function (data) {
//              alert(data);
var trHTML = '';
var id="";
var name='';
var routeId="",routename="";

              var json = JSON.parse(data);
                 
              for(var i=0;i<json.length;i++){
                  id=json[i]['busId'];
                  name=json[i]['busNo'];
                  routeId=json[i]['routeId'];
                    routename=json[i]['r_name'];
                 
                  
trHTML += '<tr><td>' + id+ '</td><td>' + name+ '</td><td>' + routename+ '</td>\n\
<td><button type="button" onclick=edit(\''+encodeURIComponent(id)+'\',\''+encodeURIComponent(name)+'\',\''+encodeURIComponent(routeId) +'\'); \n\
class="btn btn-default bg-blue" data-toggle="modal" data-target="#modal-default">Edit</button>\n\
<td><button type="button" onclick="busdetails_delete('+id+');" class="btn btn-default bg-red">Delete</button></tr>';
                       
    }       
      $('#tbody').append(trHTML);    
      table_p();
        }
    });
}

  function save_busdetails() {

        var name = document.getElementById("name").value;
        var routeid = document.getElementById("routeid").value;
       
     $.ajax({
            type: "POST",
            url: "Add_New_bus_data",
            data: {"name": name,"routeid":routeid}, // fix: need to append your data to the call
            success: function (data) {
//                alert(data);
                   if (data == false) {
                    alert("error");
                    refresh();
                } else {
                    alert("New Bus Route Added As "+ name +"!");
                    refresh();

                }
            }
            
        });
    }
    
function edit(id,fname,routeId){
$("#id_ed").val((decodeURIComponent(id)));
$("#name_ed").val((decodeURIComponent(fname)));
$("#routeid2").val((decodeURIComponent(routeId)));

}

function busdetails_updates(){
     var id = document.getElementById("id_ed").value;
     var name = document.getElementById("name_ed").value;
     var routeid2 = document.getElementById("routeid2").value;

         $.ajax({
            type: "POST",
            url: "busdetails_data_updates",
            data: {"id":id,"name":name,"routeid2":routeid2}, // fix: need to append your data to the call
            success: function (data) {
//                alert(data);
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
//     alert(id);
//     id_ed,name_ed, name2_ed
         $.ajax({
            type: "POST",
            url: "busdetials_data_delete",
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
    loadpagecontaint('Crete_bus_page');

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