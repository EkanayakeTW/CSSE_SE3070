<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VTMS | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/thk/abc.png" ype="image/x-icon">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/Lte/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/Lte/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/Lte/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/Lte/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/Lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/Lte/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="assets/Lte/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/Lte/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/Lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <!--  <link rel="stylesheet" href="assets/Lte/plugins/datatables/dataTables.bootstrap4.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/Lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
</head>
<body class="hold-transition sidebar-mini" onload="loadfirst();">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="#" onclick="loadfirst();" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="#" onclick="loadcontact();" class="nav-link">Contact Book</a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
     <div class="input-group input-group-sm">
       <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
       <div class="input-group-append">
         <button class="btn btn-navbar" type="submit">
           <i class="fa fa-search"></i>
         </button>
       </div>
     </div>
  </form>
        
    <li class="nav-item d-none d-sm-inline-block bg-blue-gradient">
        <a href="#" class="nav-link"><?php echo '<small style="color:#050100">Lastseen :'.$this->session->userdata('lst').'</small>';?></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
      <?php echo '<small>Company :'.$this->session->userdata('personid1_stms'). '</small>';?>
      
      </li>
      
<!--      <li class="nav-item d-none d-sm-inline-block ">
         <?php echo '<a href="'.base_url().'logout"><i class="fa fa-power-off"></a></i>'; ?>
      </li>-->
      
   <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-odnoklassniki"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
          <div id="login_list" class="dropdown-menu dropdown-menu-lg dropdown-menu-right bg-gray-active">
<!--          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>-->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
      <li class="nav-item">
       <?php echo '<a href="'.base_url().'logout"><i class="fa fa-power-off"></a></i>'; ?>
      </li>
    </ul>
  </nav>
  
  <aside class="main-sidebar sidebar-dark-primary elevation-9">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/thk/abc.png" alt="CapitalSoft Logo" class="brand-image img-circle elevation-5" style="opacity: .9">
      <span class="brand-text font-weight-light">VTMS Management</span>
    </a>


    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
<!--    <div class="image">
          <img src="assets/Lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>-->
        <div class="info">
            <ul>
            <li> <a href="#"><i style='font-size:18px;'><?php echo '<small>Welcome : '.$this->session->userdata('username_stms'). '</small>';?></i></a></li>
            <li> <a href="#"><i class="fa fa-circle text-success" style='color:#66ff00; font-size:12px;'></i><small style='font-size:15px;'> Online</small></a></li>
            <li><a href="#"><small id="demo" style='font-size:15px;'></small></a></li>
            </ul>
        </div>

      </div>

    <nav class="mt-2">
        <ul id="menu" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         

         
        </ul>
      </nav>

    </div>
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="box">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
       
      </div><!-- /.container-fluid -->
    </div>
   </div>
        </div>
    
 
 
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 <a href="#">VTMS.lk</a>.</strong>All rights reserved.
    <div class="float-right d-none d-sm-inline-block"><b>Version 2.1</b></div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
   
  </aside>
  
  

<!-- jQuery -->
<script src="assets/Lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/Lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="assets/Lte/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="assets/Lte/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="assets/Lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/Lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/Lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/Lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/Lte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/Lte/dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="assets/Lte/dist/js/demo.js"></script>

<!-- DataTables 
<script src="assets/Lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="assets/Lte/plugins/datatables/dataTables.bootstrap4.js"></script>-->



<script>

  $(document).ready(function () {
        myFunction();
        loadmenu();
//  loadmenu_TWO();
//  blink2();
  });


    function loadmenu(){
        
     $.ajax({
            contentType: "application/json",
            type: "POST",
            url: "getMenu",
            success: function (data) {
//                alert(data);
                var cage="";
                var json = JSON.parse(data);
                  for (var i = 0; i<json.length; i++) {
                      var id  = json[i]['id'];
                      var activity= json[i]['name'];
                      var url  = json[i]['url'];
                      var order  = json[i]['order'];
//                        alert(activity);
                      cage += cagegen2(id,activity,url,order);
                }
                $('#menu').html(cage);
                  
            }
        });
        
    }
    function cagegen2(id,activity,url,order){
             var icon="",active='';
//             alert(activity);

            if(activity == "Dashboard"){
                icon='dashboard text-blue';
                active='active';
            }else if(activity == "Super Admin Fun"){
                icon='circle-o text-red';
            }
            else if(activity == "Management & HR"){
                icon='circle-o text-red bg-red';
            }
            else{
                icon='';
            }


         var html = "<li class='nav-item has-treeview menu-open'>"
            +"<a href='#' onclick='loadpagecontaint(\""+url+"\");' class='nav-link "+active+"'>"
            +"<i class='fa fa-"+icon+"'></i><p>"+activity+"</p>"
            +"</a></li>";
         return html;

        }
//        <a href="#" class="dropdown-item">
        
       
    
        function loadpagecontaint(name){
            $("#box").load(name);
         }
    function loadfirst()
    {
    loadpagecontaint('loadhome');

    }
    function loadcontact(){
        
         loadpagecontaint('load_admin_Contact_book');
    }
    
    function myFunction() {
    var greeting;
    var time = new Date().getHours();
    if (time < 10) {
        greeting = "Good morning";
    } else if (time < 20) {
        greeting = "Good day";
    } else {
        greeting = "Good evening";
    }
document.getElementById("demo").innerHTML = greeting;
}


    function loadmenu_TWO(){
        
     $.ajax({
            contentType: "application/json",
            type: "POST",
            url: "last_online",
            success: function (data) {
//                alert(data);
                var cage="";
                var json = JSON.parse(data);
                  for (var i = 0; i<json.length; i++) {
                      var id  = json[i]['id'];
                      var name= json[i]['name'];
                      var time  = json[i]['time'];
               
//                        alert(activity);
                      cage += cagegen3(id,name,time);
                }
                $('#login_list').html(cage);
                  
            }
        });
        
    }
    function cagegen3(id,name,time){
           

           var html="<li id='list_log"+id+"'>\n\
    <i class=''>"+name+"</i> Last Online\n\
    <span class='float-right text-muted text-sm'>"+time+" Ago..</span>"
          +"</a></li>";
         return html;

        }
//function blink2() {
//   var f = document.getElementById('blink2');
//   setInterval(function() {
//      f.style.display = (f.style.display == 'none' ? '' : 'none');
//   }, 1000);
//}
//function blink2() {
//   var f = document.getElementById('blink3');
//   setInterval(function() {
//      f.style.display = (f.style.display == 'none' ? '' : 'none');
//   }, 1000);
//}
</script>



</body>
</html>
