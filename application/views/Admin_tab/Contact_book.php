
 <div class="register-box-body">
    <h3 class="login-box-msg">Contact Book</h3>
 </div>
  

<div class="register-box-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Company Contact Book</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                          <th>Mobile</th>
                  <th>Mobile i</th>
                  <th>Email</th>
                            
                </tr>
                </thead>
                <tbody id="tbody">
                
                
                </tbody>
                <tfoot>
                <tr>
                 <th>id</th>
                  <th>Name</th>
                          <th>Mobile</th>
                  <th>Mobile i</th>
                  <th>Email</th>
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

});

  
 function refresh()
    {
    loadpagecontaint('load_emp_page');

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
                  
trHTML += '<tr><td>' + id+ '</td><td>' + fname+ '</td>\n\
<td>' + mobile + '</td><td>' + mobile2 + '</td>\n\
<td>' + emial+ '</td>\n\
</tr>';
                       
    }       
      $('#tbody').append(trHTML);    
        }
    });
}
function table_p(){
      $(function () {
      $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
}
</script>

