<link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<div class="card text-center bg-danger" >
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
        <ul class="nav nav-tabs">
           <li role="presentation" onload="loadpagecontaint2('addperson');"><a href="#" onclick="loadpagecontaint2('addperson');"><i class="fa fa-user-secret"></i>Create Person</a></li>
           <!--<li role="presentation" ><a href="#" onclick="loadpagecontaint2('persotype');"><i class="fa fa-user-circle-o"></i>Create Person Type</a></li>-->
           <li role="presentation" ><a href="#" onclick="loadpagecontaint2('loadpuseraccount');"><i class="fa fa-user-circle"></i>Create New Login</a></li>
            <li role="presentation" ><a href="#" onclick="loadpagecontaint2('persotype_login');"><i class="fa fa-user-circle"></i>Log Records Login</a></li>
           <li role="presentation" ><a href="#" onclick="loadpagecontaint2('recompany');"><i class="fa fa-user-circle"></i>Create Company</a></li>
       
        </ul>

    </ul>
  </div>
    <div class="box box-primary" id="box2">
               


        
    </div>
</div>
    

<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
loadpagecontaint2('addperson');

});
    
function loadpagecontaint2(name){
	$("#box2").load(name);

}

</script>
