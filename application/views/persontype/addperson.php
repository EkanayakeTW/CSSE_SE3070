<div class="register-box-body bg-gray">
    <h3 class="login-box-msg">Create Person</h3>

    <form action="#" method="post">
        
        <div class="row">
           <div class="col-sm-4 form-group">
             <div class="form-group">
               <select class="form-control" id="selectcom" style="width: 100%;">
                <option selected="selected" >Select Company</option>
               </select>
             </div>
           </div>
                    
           <div class="col-sm-4 form-group">
            <div class="form-group">
                <select class="form-control" id="persontype" style="width: 100%;">
                  <option selected="selected" >Select Person Type</option>
                </select>
            </div>
           </div>
                    
          <div class="col-sm-4 form-group">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" id="initials" placeholder="Initials Name">
            </div>
         </div>
</div>
     
        <div class="row">
            		 <div class="col-sm-4 form-group">
					 <div class="form-group has-feedback">
          <input type="text" class="form-control" id="name" placeholder="First Name">
    </div>
				
                                    </div>
            
                               <div class="col-sm-4 form-group">
	  <div class="form-group has-feedback">
             <input type="text" class="form-control" id="name2" placeholder="Last Name">
     </div>
				
  </div>
            
            <div class="col-sm-4 form-group">
	 <div class="form-group has-feedback">
             <input type="text" class="form-control" id="bday" placeholder="Birth day" value="2008-11-11 11:12:01">
     </div>
				
  </div>
            
        
        
                </div>
        <div class="row">
              
					
     
             <div class="col-sm-4 form-group">
		<select class="form-control"  id="gtype" style="width: 100%;">
                    <option class="disabled-result"> Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                                      
                </select>
                  
				</div>
        <div class="col-sm-4 form-group">
	           <div class="form-group has-feedback">
               <input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
        <!--<span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light"></span>-->
      </div>
               
                  
				</div>
            <div class="col-sm-4 form-group">
	           <div class="form-group has-feedback">
               <input type="text" class="form-control" id="nic" placeholder="NIC Number">
        <!--<span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light"></span>-->
      </div>
				</div>
        
                </div>
     <div class="row">
          
         <div class="col-sm-4 form-group">
	           <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add1" placeholder="Address I">
        <!--<span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light"></span>-->
      </div>
				</div>
         <div class="col-sm-4 form-group">
	           <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add2" placeholder="Address II">
        <!--<span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light"></span>-->
      </div>
				</div>

     </div>
        <div class="row">
            
            <div class="col-sm-4 form-group">
	           <div class="form-group has-feedback">
               <input type="text" class="form-control" id="add3" placeholder="Address III">
        <!--<span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light"></span>-->
      </div>
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
               
 $(document).ready(function() {
    loadcompanylist();
   loadpersontypes();
});


  function loadcompanylist(){
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "companyselect",
          success: function (data) {
      
              var json = JSON.parse(data);

              for(var i=0;i<json.length;i++){
                   var id= json[i]['id'];
                   var name= json[i]['name'];
             
                   $("#selectcom").append("<option value='"+id+"'>"+name+"</option>");
               }            
                           
            }
    });
}
function loadpersontypes(){
    $.ajax({
        contentType: "application/json",
        type: "POST",
        url: "persontype_select",
        success: function (data) {
      
              var json = JSON.parse(data);
//              alert(data);
              for(var i=0;i<json.length;i++){
                   var id  = json[i]['id'];
                   var name= json[i]['name'];
                   var status= json[i]['status'];
                   $("#persontype").append("<option value='"+id+"'>"+name+"</option>");
               }            
                           
            }
            
    });
}
       
 
    function save_person() {

        var company = document.getElementById("selectcom").value;
         var persontype = document.getElementById("persontype").value;
        var initials = document.getElementById("initials").value;
        var name = document.getElementById("name").value;
        var name2 = document.getElementById("name2").value;
        var bday = document.getElementById("bday").value;
        var gtype = document.getElementById("gtype").value;
        var mobile = document.getElementById("mobile").value;
        var nic = document.getElementById("nic").value;
        var add1 = document.getElementById("add1").value;
        var add2 = document.getElementById("add2").value;
        var add3 = document.getElementById("add3").value;
        
        $.ajax({
            type: "POST",
            url: "add_perosn_new",
            data: {"company": company,"persontype":persontype,"initials": initials,"name": name,"name2": name2,"bday":bday,"gtype":gtype,"mobile":mobile,"nic":nic,"add1":add1,"add2":add2,"add3":add3}, // fix: need to append your data to the call
            success: function (data) {
                   if (data == false) {
                    alert("error");
                } else {
                    alert("New Person Added As "+ name +"!");
                    $('#reset').trigger('click');
                }
            }
            
        });
    }
    
function validation(){

        if(document.getElementById("selectcom").selectedIndex == 0)
       { document.getElementById("selectcom").style.borderColor = "#E34234";
         return false;
       }
       else if(document.getElementById("persontype").selectedIndex == 0) {
                        document.getElementById("persontype").style.borderColor = "#E34234";
                           return false;
                    }else if(document.getElementById("initials").value == "") {
                        document.getElementById("initials").style.borderColor = "#E34234";
                           return false;
                        }else if(document.getElementById("name").value =="") {
                           document.getElementById("name").style.borderColor = "#E34234";
                              return false;
                       }    else if(document.getElementById("name2").value == "") {
                           document.getElementById("name2").style.borderColor = "#E34234";
                              return false;
                       }    else if(document.getElementById("bday").value == "") {
                           document.getElementById("bday").style.borderColor = "#E34234";
                              return false;
                       }
                        else if(document.getElementById("gtype").selectedIndex == 0) {
                           document.getElementById("gtype").style.borderColor = "#E34234";
                              return false;
                       }
                        else if(document.getElementById("mobile").value == "") {
                           document.getElementById("mobile").style.borderColor = "#E34234";
                              return false;
                       }
                       else if(document.getElementById("nic").value == "") {
                           document.getElementById("nic").style.borderColor = "#E34234";
                              return false;
                       }
       
       
        else{

      save_person();
       return true;
       }
}

</script>
