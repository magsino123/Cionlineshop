<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['users/customerlogin'] = 'users/customerlogin';
$route['admin_home/customerpage'] = 'admin_home/customerpage';
$route['main/adminlog'] = 'main/adminlog';
$route['main/customer'] = 'main/customer';
$route['order_ctrl/order'] = 'order_ctrl/order';
$route['update_ctrl/show_product_id'] = 'update_ctrl/show_product_id';
$route['admin_home/newarrive'] = 'admin_home/newarrive';
$route['cart_view/(:any)'] = 'pro_details/cart_view/$1';
$route['pro_details/cart_view'] = 'pro_details/cart_view';
$route['admin_home/adminhome'] = 'admin_home/adminhome';
$route['user/admindashboard'] = 'user/admindashboard';
$route['product/addprod'] = 'product/addprod';
$route['pages/getuser'] = 'pages/getuser';
$route['main/main_page'] = 'main/main_page';
$route['default_controller'] = 'main/main_page';
//$route['(:any)'] = 'view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



