<?php 

require_once './app/models/User.php';
class UserController
{
	
	public function index(){
		$user = User::all();
		include_once './app/views/user/list-user.php';
	}
	public function add(){

		include_once './app/views/user/add-user.php';
	}

	public function delete(){
			$id = isset($_GET['id']) == true ? $_GET['id'] : 0;
			User::destroy($id);
			header('location:'.BASE_URL.'danh-sach-user');
			
	}
	public function addUser1(){
			
			include_once'./app/views/user/add-user.php';
			
	}
	
}

 ?>