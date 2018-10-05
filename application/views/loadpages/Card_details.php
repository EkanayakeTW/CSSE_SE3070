 <!--<link rel="stylesheet" href="assets/Lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">-->
 <link rel="stylesheet" href="assets/Lte/plugins/datatables/dataTables.bootstrap4.css">
 <link rel="stylesheet" href="assets/Lte/plugins/iCheck/all.css">
 
 <div class="modal" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" id="close_ed" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               
              </div>
  <div class="modal-body">
       <h4 class="modal-title">User Card Edit</h4>
    <section class='content'>
            <div class='row'>
              <div class='col-md-16'>
                <div class="register-box-body">
                 <!--<div class='box-body box-profile'><img src='assets/dist/img/user2-160x160.png' class='img-rounded' alt='User Image'>-->
                  <div class="row">
            <div class="col-sm-6 form-group">
               <div class="form-group has-feedback">
                   <input type="hidden" class="form-control" id="id_ed">
                </div>
            </div>
            <div class="col-sm-6 form-group">
                 <label>Select Account:</label>
		<select class="form-control"  id="acc_ed" style="width: 100%;">
                    <option class="disabled-result"> Select Account</option>
                    
                </select>
               </div>  
            
            
            <div class="col-sm-6 form-group">
                <label>Pin Number:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="pin_ed" placeholder="Pin Number">
                </div>
            </div>
           <div class="col-sm-6 form-group">
                <label>Date Issue:</label>
                  <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                   </div>
                   <input type="text" class="form-control" id="dateissue_ed" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                  </div>
            </div>
            <div class="col-sm-6 form-group">
                <label>Expire Date:</label>
                  <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                   </div>
                   <input type="text" class="form-control" id="dateissueex_ed" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                  </div>
            </div>
             <div class="col-sm-6 form-group">
                  <label>Payment type:</label>
                <div class="form-group ">
                      <select class="form-control" id="ttype_ed" style="width: 100%;">
                          <option selected="selected" >Select Type</option>
                          <option class="" value="1">Loan</option>
                          <option class="" value="2" >Cash</option>
                      </select>
              </div>
            </div>
            <div class="col-sm-6 form-group">
                 <label>Card type:</label>
                <div class="form-group ">
                      <select class="form-control" id="ctype_ed" style="width: 100%;">
                          <option selected="selected" >Select Card Type</option>
                          <option class="" value="1">Temporary</option>
                          <option class="" value="2" >Permanent</option>
                      </select>
              </div>
            </div>
    
        <div class="col-sm-6 form-group">
              <label>Balance:</label>
               <div class="form-group has-feedback">
               <input type="text" class="form-control" id="balance_ed" placeholder="Enter balance">
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
          <button type="button"  onclick="busdetails_updates()();" class="btn btn-primary">Save changes</button>
     </div>
    </div>
   </div>
  </div>
 </div>
 
 <div class="register-box-body">
    <h3 class="login-box-msg">Create Passenger Card</h3>

    <form action="#" method="post">
        
        <div class="row">
            <div class="col-sm-4 form-group">
                 <label>Select Account:</label>
		<select class="form-control"  id="acc" style="width: 100%;">
                    <option class="disabled-result"> Select Account</option>
                    
                </select>
               </div>  
            
            
            <div class="col-sm-4 form-group">
                <label>Pin Number:</label>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="pin" placeholder="Pin Number">
                </div>
            </div>
           <div class="col-sm-4 form-group">
                <label>Date Issue:</label>
                  <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                   </div>
                   <input type="text" class="form-control" id="dateissue" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                  </div>
            </div>
            <div class="col-sm-4 form-group">
                <label>Expire Date:</label>
                  <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                   </div>
                   <input type="text" class="form-control" id="dateissueex" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                  </div>
            </div>
             <div class="col-sm-4 form-group">
                  <label>Payment type:</label>
                <div class="form-group ">
                      <select class="form-control" id="ttype" style="width: 100%;">
                          <option selected="selected" >Select Type</option>
                          <option class="" value="1">Loan</option>
                          <option class="" value="2" >Cash</option>
                      </select>
              </div>
            </div>
            <div class="col-sm-4 form-group">
                 <label>Card type:</label>
                <div class="form-group ">
                      <select class="form-control" id="ctype" style="width: 100%;">
                          <option selected="selected" >Select Card Type</option>
                          <option class="" value="1">Temporary</option>
                          <option class="" value="2" >Permanent</option>
                      </select>
              </div>
            </div>
    
        <div class="col-sm-4 form-group">
              <label>Balance:</label>
               <div class="form-group has-feedback">
               <input type="text" class="form-control" id="balance" placeholder="Enter balance">
            </div>
	</div>
      
       </div>
        
     <hr>
   
      <div class="row">
        <div class="col-xs-7">
          <button type="button" onclick="validation();" class="btn btn-block btn-success btn-flat">Save Card</button>
        </div>
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
              <h3 class="card-title">Data Table With Card Holder List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                       <!--cardId,accountId,pin,dateIssued,balance,onLoan,expireDate,tempory,p_name-->
                   <th>Card ID</th>
                 
                  <th>PIN</th>
                  <th>Date Issued</th>
                  <th>Balance</th>
                  <th>onLoan</th>
                  <th>Expire Date</th>
                   <th>Tempory</th>
                  <th>Name</th>
                 
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody id="tbody">
                
                
                </tbody>
                <tfoot>
                <tr>
                   <th>Card ID</th>
                 
                  <th>PIN</th>
                  <th>Date Issued</th>
                  <th>Balance</th>
                  <th>onLoan</th>
                  <th>Expire Date</th>
                   <th>Tempory</th>
                  <th>Name</th>
                 
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
   load_account_list();
   load_card_list();

});


   
    
function validation(){

         
      if(document.getElementById("acc").selectedIndex == 0) {
                        document.getElementById("acc").style.borderColor = "#E34234";
                           return false;
                        }else if(document.getElementById("pin").value =="") {
                           document.getElementById("pin").style.borderColor = "#E34234";
                              return false;
                       }    else if(document.getElementById("dateissue").value == "") {
                           document.getElementById("dateissue").style.borderColor = "#E34234";
                              return false;
                       }    else if(document.getElementById("ttype").selectedIndex == 0) {
                           document.getElementById("ttype").style.borderColor = "#E34234";
                              return false;
                       }
                        else if(document.getElementById("ctype").selectedIndex == 0) {
                           document.getElementById("ctype").style.borderColor = "#E34234";
                              return false;
                       }
                        else if(document.getElementById("balance").value == "") {
                           document.getElementById("balance").style.borderColor = "#E34234";
                              return false;
                       }
       
       
        else{

      save_card();
       return true;
       }
}
 function refresh()
    {
    loadpagecontaint('Card_details_page');

    }
        
    function load_card_list(){
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "Card_table_load",
          success: function (data) {
//              alert(data);
var trHTML = '';

              var json = JSON.parse(data);
                   //   
              for(var i=0;i<json.length;i++){
                 var cardId=json[i]['cardId'];
                 var accountId=json[i]['accountId'];
                 var pin=json[i]['pin'];
                 var dateIssued=json[i]['dateIssued'];
                 var balance=json[i]['balance'];
                 var onLoan=json[i]['onLoan'];
                 var expireDate=json[i]['expireDate'];
                 var tempory=json[i]['tempory'];
                 var p_name=json[i]['p_name'];
                
                  
trHTML += '<tr><td>' + cardId+ '</td><td>' + pin+ '</td><td>' + dateIssued+ '</td>\n\
<td>' + balance + '</td><td>' + onLoan + '</td><td>' + expireDate + '</td><td>' + tempory + '</td>\n\
<td>' + p_name+ '</td><td><button type="button" onclick=edit(\''+encodeURIComponent(cardId)+'\',\''+encodeURIComponent(accountId)+'\',\''+encodeURIComponent(pin)+'\',\''+encodeURIComponent(dateIssued) +'\',\''+encodeURIComponent(balance) +'\',\''+encodeURIComponent(onLoan)+'\',\''+encodeURIComponent(tempory)+'\',\''+encodeURIComponent(expireDate)+'\'); \n\
class="btn btn-default bg-blue" data-toggle="modal" data-target="#modal-default">Edit</button>\n\
<td><button type="button" \n\
class="btn btn-default bg-red" onclick="buscard_delete('+cardId+');">Delete</button></td></tr>';
                       
    }       
      $('#tbody').append(trHTML);    
      table_p();
        }
    });
}


  function save_card() {

        var acc = document.getElementById("acc").value;
        var pin = document.getElementById("pin").value;
        var dateissue = document.getElementById("dateissue").value;
        var ttype = document.getElementById("ttype").value;
        var ctype = document.getElementById("ctype").value;
        var balance = document.getElementById("balance").value;
        var dateissueex = document.getElementById("dateissueex").value;
       
     
        
        $.ajax({
            type: "POST",
            url: "Add_New_card_data",
            data: {"acc": acc,"pin": pin,"dateissue":dateissue,"ttype":ttype,"ctype":ctype,"balance":balance,"dateissueex":dateissueex}, // fix: need to append your data to the call
            success: function (data) {
                   if (data == false) {
                    alert("error");
                     $('#reset').trigger('click');
                } else {
                    alert("New Card Added!");
                    $('#reset').trigger('click');
                    refresh();
                }
            }
            
        });
    }
// cardId,accountId,pin,dateIssued,balance,onLoan,expireDate,tempory,p_name
function edit(id,accountId,pin_ed,dateissue_ed,balance_ed,ttype_ed,ctype_ed,dateissueex_ed){
//    alert(dateissueex_ed);
$("#id_ed").val((decodeURIComponent(id)));
$("#acc_ed").val((decodeURIComponent(accountId)));
$("#pin_ed").val((decodeURIComponent(pin_ed)));
$("#dateissue_ed").val((decodeURIComponent(dateissue_ed)));
$("#balance_ed").val((decodeURIComponent(balance_ed)));
$("#ttype_ed").val((decodeURIComponent(ttype_ed)));
$("#ctype_ed").val((decodeURIComponent(ctype_ed)));
$("#dateissueex_ed").val((decodeURIComponent(dateissueex_ed)));

}


function busdetails_updates(){
     var id = document.getElementById("id_ed").value;
     var acc_ed = document.getElementById("acc_ed").value;
     var pin_ed = document.getElementById("pin_ed").value;
     var dateissue_ed = document.getElementById("dateissue_ed").value;
     var balance_ed = document.getElementById("balance_ed").value;
     var ttype_ed = document.getElementById("ttype_ed").value;
      var ctype_ed = document.getElementById("ctype_ed").value;
     var dateissueex_ed = document.getElementById("dateissueex_ed").value;
// nicedit,teledit,passedit
         $.ajax({
            type: "POST",
            url: "card_data_updates",
            data: {"id":id,"acc_ed":acc_ed,"pin_ed":pin_ed,"dateissue_ed":dateissue_ed,"balance_ed":balance_ed,"ttype_ed":ttype_ed,"ctype_ed":ctype_ed,"dateissueex_ed":dateissueex_ed}, // fix: need to append your data to the call
            success: function (data) {
//                alert(data);
                if (data == false) {
                    alert("Unable to Update records,try again!!");
                     $('#close_ed').trigger('click');
                    refresh();
                } else {
                     $('#close_ed').trigger('click');
                    refresh();

                }
            }
        });
}


function buscard_delete(recid){
     var id = recid;
     alert(id);
//     id_ed,name_ed, name2_ed
         $.ajax({
            type: "POST",
            url: "busdcard_data_delete",
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
function load_account_list(){
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "buscar_id_select",
          success: function (data) {
              var json = JSON.parse(data);
//            accoutId,firstName
              for(var i=0;i<json.length;i++){
                  var accoutId  = json[i]['accoutId'];
                   var firstName= json[i]['firstName'];

                   $("#acc").append("<option value='"+accoutId+"'>"+firstName+"</option>");
                   $("#acc_ed").append("<option value='"+accoutId+"'>"+firstName+"</option>");
                
               }            
                           
            }
    });
}

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