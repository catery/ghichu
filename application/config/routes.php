<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "portal";
$route['404_override'] = '';

$route['dang-nhap']						= 'portal/dangnhap';
$route['xac-nhan']						= 'portal/xacnhan';
$route['dang-xuat']						= 'portal/logout';
$route['thay-doi']						= 'portal/doimatkhau';
$route['tao-moi']						= 'portal/taomoi';
$route['cap-nhat/(:any)']				= 'portal/capnhat/$1';
$route['xoa/(:any)']					= 'portal/xoa/$1';