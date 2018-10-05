<div class="register-box-body bg-gray">
    <h3 class="login-box-msg">Register Company </h3>

    <form action="#" method="post">

        <div class="form-group has-feedback">
            <input type="text" id="companyname" class="form-control bg-gray-active" placeholder="Company Name">
            <span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light "></span>
        </div>

        <div class="form-group has-feedback">
            <input type="text" id="address1" class="form-control bg-gray-active" placeholder="Address I">
            <span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light "></span>
        </div>

        <div class="form-group has-feedback">
            <input type="text" id="address2" class="form-control bg-gray-active" placeholder="Address II">
            <span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="text" id="address3" class="form-control bg-gray-active" placeholder="Address III">
            <span class="glyphicon glyphicon-plus form-control-feedback bg-gray-light"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="email" id="emailcompany" class="form-control bg-gray-active" placeholder="Comapnay Email Address">
            <span class="glyphicon glyphicon-envelope form-control-feedback bg-gray-light"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="text" id="telephone" class="form-control bg-gray-active" placeholder="Comapnay Telephone Number">
            <span class="glyphicon glyphicon-earphone form-control-feedback bg-gray-light"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="text" id="faxno" class="form-control bg-gray-active" placeholder="Comapnay Fax Number">
            <span class="glyphicon glyphicon-phone-alt form-control-feedback bg-gray-light"></span>
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

<script>
    function saveCompany() {

        var companyname = document.getElementById("companyname").value;
        var address1 = document.getElementById("address1").value;
        var address2 = document.getElementById("address2").value;
        var address3 = document.getElementById("address3").value;
        var emailcompany = document.getElementById("emailcompany").value;
        var telephone = document.getElementById("telephone").value;
        var faxno = document.getElementById("faxno").value;

        $.ajax({
            type: "POST",
            url: "saveCompany",
            data: {"companyname": companyname, "address1": address1, "address2": address2, "address3": address3, "emailcompany": emailcompany, "telephone": telephone, "faxno": faxno}, // fix: need to append your data to the call
            success: function (data) {

                if (data == false) {
                    alert("error");
                } else {
                    alert("New Company is saved!");
                    $('#reset').trigger('click');
                }
            }
        });
    }
    
    function validation(){
        var email = document.getElementById('emailcompany');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(document.getElementById("companyname").value == "")
       { 
         document.getElementById("companyname").style.borderColor = "#E34234";
         return false;
       }  else if (!filter.test(email.value)) {
            document.getElementById("emailcompany").style.borderColor = "#E34234";
            email.focus;
            return false;
         }else{
                 saveCompany();
                     return true; 
             }

   }
</script>