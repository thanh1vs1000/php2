<?php 
session_start();
require_once './commons/utils.php';
require_once './commons/helpers.php';
$url = isset($_GET['url']) ? $_GET['url'] : '/';


require_once './app/controllers/HomeController.php';
require_once './app/controllers/CategoryController.php';
require_once './app/controllers/CartController.php';
require_once './app/controllers/UserController.php';

switch ($url) {
	case '/':
		$ctr = new HomeController();
		$ctr->index();
		break;

	case 'lien-he':
		$ctr = new HomeController();
		$ctr->contact();
		break;

	case 'danh-muc':
		$ctr = new CategoryController();
		$ctr->index();
		break;

	case 'chi-tiet-sp':
		$ctr = new HomeController();
		$ctr->detail();
		break;

	case 'danh-sach-user':
		$ctr = new UserController();
		$ctr->index();
		break;
	case 'delete-user':
		$ctr = new UserController();
		$ctr->delete();
		break;
	case 'add-user':
		$ctr = new UserController();
		$ctr->addUser1();
		break;


	case 'gio-hang':
		$ctr = new CartController();
		$ctr->add2Cart();
		break;

	case 'chi-tiet-gio-hang':
		$ctr = new CartController();
		$ctr->showCart();
		break;

	case 'xoa-item-gio-hang':
		$ctr = new CartController();
		$ctr->deleteItemInCart();
		break;
	default:
		# code...
		break;
}


 ?>