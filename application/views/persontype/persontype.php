<div class="register-box-body bg-gray">
    <h3 class="login-box-msg">Register Person Type</h3>

    <form action="#" method="post">
        
        	<div class="row">
             <div class="col-sm-6 form-group">
		<label>Select Person Types</label>
                <select class="form-control bg-gray-active"  id="ptype" style="width: 150%;">
                    <option class="disabled-result"></option>
                    <option>User</option>
                    <option>Admin</option>
                    <option>Operator</option>
                    
                </select>
                  
				</div>
					
            
         
        
        
                </div>
     
       

       
      <div class="row">
        <div class="col-xs-4">
            <button type="button" onclick="validation();" class="btn btn-primary btn-block btn-flat bg-blue-gradient">Submit</button>
      </div>
           <div class="col-xs-4">
                 <button type="reset" id="reset" class="btn btn-primary btn-block btn-flat bg-blue-gradient" value="Clear">Clear</button>
         </div>
       </div>
    </form>
</div>
  <script type="text/javascript">

    function savepersontypes() {

        var ptype = document.getElementById("ptype").value;
//       alert(ptype);
        $.ajax({
            type: "POST",
            url: "Save_Person_List_type",
            data: {"ptype": ptype}, // fix: need to append your data to the call
            success: function (data) {
                   if (data == false) {
                    alert("error");
                } else {
                    alert("New "+ ptype +" Added Successfully!");
                    $('#reset').trigger('click');
                }
            },failure:function (errMsg){
                alert(errMsg);
            }
            
        });
    }
    
function validation(){
//  var machineid = document.getElementById("reqid").value;
        if(document.getElementById("ptype").value == "")
       { 
         document.getElementById("ptype").style.borderColor = "#E34234";

         return false;
       }       
        else{

      savepersontypes();
       return true;
       }
}
</script>
