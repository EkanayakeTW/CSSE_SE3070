<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.person_type_Select
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['loginto'] = 'LoadPages/login';
$route['Dashboard'] = 'LoadPages/loadreg';

$route['recompany'] = 'LoadPages/addcompy';
$route['loadhome'] = 'LoadPages/loadhomepage';
$route['loadpuseraccount'] = 'LoadPages/loadpuseraccount';
$route['load_admin_Suplier_Grn'] = 'LoadPages/load_admin_Suplier_Grn';
$route['load_admin_Suplier_Grn_log'] = 'LoadPages/load_admin_Suplier_Grn_log';

////////////////////////////////////////////////////////trms////////////////////////


////////////////////////////////////////////////////////transport page load///////////////
$route['load_station_page'] = 'LoadPages/load_station_page';
$route['Route_page'] = 'LoadPages/Route_page';
$route['Route_ststtion_page'] = 'LoadPages/Route_ststtion_page';
$route['Crete_bus_page'] = 'LoadPages/Crete_bus_page';
$route['Account_page'] = 'LoadPages/Account_page';
$route['Card_details_page'] = 'LoadPages/Card_details_page';

//////////////////////////////////
$route['Add_New_station_data'] = 'MachineControllers/Add_New_station_data'; // station update add
$route['station_data_updates'] = 'MachineControllers/station_data_updates'; //station update url
$route['station_data_delete'] = 'MachineControllers/station_data_delete'; // station delete url
$route['Station_table_load'] = 'MachineControllers/Station_table_load'; // bus route add



//////////////////////////////////
$route['Add_New_bus_route_data'] = 'MachineControllers/Add_New_bus_route_data'; // bus route add
$route['Busroute_table_load'] = 'MachineControllers/Busroute_table_load'; //bus route table load url
$route['busroute_data_updates'] = 'MachineControllers/busroute_data_updates'; //bus route update url
$route['busroute_data_delete'] = 'MachineControllers/busroute_data_delete'; // bus route delete url

//////////////////////////////////
$route['route_id_select'] = 'MachineControllers/route_id_select'; // bus route id select
$route['Add_New_bus_data'] = 'MachineControllers/Add_New_bus_data'; // bus route add
$route['Busdetails_table_load'] = 'MachineControllers/Busdetails_table_load'; // bus route add
$route['busdetails_data_updates'] = 'MachineControllers/busdetails_data_updates'; // bus route add
$route['busdetials_data_delete'] = 'MachineControllers/busdetials_data_delete'; // bus route add

/////////////////////////////////////
$route['stationId_id_select'] = 'MachineControllers/stationId_id_select'; // bus route add
$route['Add_New_route_station_data'] = 'MachineControllers/Add_New_route_station_data'; // bus route add
$route['Statio_route_table_load'] = 'MachineControllers/Statio_route_table_load'; // bus route add
$route['stationroutes_data_updates'] = 'MachineControllers/stationroutes_data_updates'; // bus route add
$route['stationroute_data_delete'] = 'MachineControllers/stationroute_data_delete'; // bus route add

$route['Add_New_account_data'] = 'MachineControllers/Add_New_account_data'; // bus route add
$route['Account_table_load'] = 'MachineControllers/Account_table_load'; // bus route add

$route['buscar_id_select'] = 'MachineControllers/buscar_id_select'; // bus card add select
$route['Add_New_card_data'] = 'MachineControllers/Add_New_card_data'; // bus card add select
$route['Card_table_load'] = 'MachineControllers/Card_table_load'; // bus card add select
$route['card_data_updates'] = 'MachineControllers/card_data_updates'; // bus card add select
$route['busdcard_data_delete'] = 'MachineControllers/busdcard_data_delete'; // bus card add select
$route['accountdetials_data_delete'] = 'MachineControllers/accountdetials_data_delete'; // bus card add select
$route['accountdetails_data_updates'] = 'MachineControllers/accountdetails_data_updates'; // bus card add select
$route['person_select'] = 'MachineControllers/person_select';


///////////////////////////////////////////////////////////////////////////////////
















$route['load_Product_page'] = 'LoadPages/load_Product_page';   //atmgm create EMPLOYEEE
$route['load_admin_tab'] = 'LoadPages/load_admin_tab'; //atmgm create

$route['load_admin_tab_Cre_person'] = 'LoadPages/load_admin_tab_Cre_person'; //atmgm create
$route['load_admin_tab_new_log'] = 'LoadPages/load_admin_tab_new_log'; //atmgm create
$route['load_admin_tab_Access'] = 'LoadPages/load_admin_tab_Access'; //atmgm create
$route['load_admin_tab_Role'] = 'LoadPages/load_admin_tab_Role'; //atmgm create
$route['load_admin_tab_Report'] = 'LoadPages/load_admin_tab_Report'; //atmgm create
$route['load_admin_Contact_book'] = 'LoadPages/load_admin_Contact_book'; //atmgm create
$route['load_admin_Map_emp'] = 'LoadPages/load_admin_Map_emp'; //atmgm create
$route['load_admin_Suplier_reg']= 'LoadPages/load_admin_Suplier_reg'; //atmgm create




$route['emptables'] = 'LoadPages/emptable';
$route['addperson'] = 'LoadPages/personadd';
$route['persomenu'] = 'LoadPages/persomenu';
$route['persotype'] = 'LoadPages/persotype';
$route['persotype_login'] = 'LoadPages/persotype_login';


//--------Api_att-----------------------------------------------------
$route['saveCompany'] = 'MachineControllers/insertcompany';


////////////////////////////////////////////////////////////////////

$route['companyselect'] = 'MachineControllers/companyselect';
$route['saveDepart'] = 'MachineControllers/adddepart';
$route['add_leave_count'] = 'MachineControllers/add_leave_count';
$route['add_ot_count'] = 'MachineControllers/add_ot_count';
$route['addnew_nopay'] = 'MachineControllers/addnew_nopay';
$route['addnew_calender'] = 'MachineControllers/addnew_calender';
$route['add_shift'] = 'MachineControllers/add_shift';
$route['addEMP'] = 'MachineControllers/addEMP';





$route['add_pages_to_role'] = 'MachineControllers/add_pages_to_role';
$route['role_add'] = 'MachineControllers/role_add';
$route['Attendance_cheker'] = 'MachineControllers/Attendance_cheker';
$route['location_select'] = 'MachineControllers/location_select';
$route['Emp_table_load'] = 'MachineControllers/Emp_table_load';
$route['person_type_Select'] = 'MachineControllers/person_type_Select';

$route['person_supplier'] = 'MachineControllers/person_supplier';
$route['Person_Select_map'] = 'MachineControllers/Person_Select_map';
$route['Person_Select_emp_type'] = 'MachineControllers/Person_Select_emp_type';

$route['Emp_load'] = 'MachineControllers/Emp_load';
$route['Suppliers_load'] = 'MachineControllers/Suppliers_load';

$route['Map_person_To_Suppliers'] = 'MachineControllers/Map_person_To_Suppliers';



$route['tableloard_Login'] = 'MachineControllers/tableloard_Login';
$route['Brand_Select'] = 'MachineControllers/Brand_Select'; //.Brand_Select
$route['role_select'] = 'MachineControllers/role_select';
$route['product_category_Select'] = 'MachineControllers/product_category_Select';
$route['Product_table_load'] = 'MachineControllers/Product_table_load';




$route['registernewadmin'] = 'MachineControllers/registernewadmin';


$route['tableloard_emp'] = 'MachineControllers/tableloard_emp';
$route['persontype_select'] = 'MachineControllers/persontype_select';
$route['Save_Person_List_type'] = 'MachineControllers/Save_Person_List_type';
$route['add_product_new'] = 'MachineControllers/add_product_new';
$route['add_perosn_new_company'] = 'MachineControllers/add_perosn_new_company';
$route['add_New_grn'] = 'MachineControllers/add_New_grn';

$route['person_selectII'] = 'MachineControllers/person_selectII';
$route['person_select_role'] = 'MachineControllers/person_select_role';



$route['getMenu'] = 'main/loadMenu';
$route['last_online'] = 'main/loadLast_online_list';
$route['test'] = 'main/test';



$route['notification'] = 'MainController/notification';


$route['loginpanel'] = 'main/login';
$route['login_validation'] = 'main/login_validation';
$route['loginmainenter'] = 'main/enter';
$route['logout'] = 'main/logout';


//$route['get_image'] = 'MainController/call_cammand_To_get_image_user';


$route['default_controller'] = 'MainController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8

