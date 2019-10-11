<?php 

require_once './app/models/User.php';
class UserController
{
	
	public function index(){
		$user = User::all();
		include_once './app/views/User/list-user.php';
	}
	public function add(){

		include_once './app/views/User/add-user.php';
	}

	public function delete(){
			$id = isset($_GET['id']) == true ? $_GET['id'] : 0;
			User::destroy($id);
			header('location: ' . BASE_URL.'danh-sach-users');
			
	}
	public function addUser(){
				$email = $_POST['email'];
				$name = $_POST['name'];
				$password = $_POST['password'];
				$cfpassword = $_POST['cfpassword'];

				$avatar = $_FILES['avatar'];


				// validate
				// compare password & cfpassword
				// upload file
				$filePath = "";
				if($avatar['size'] > 0){
					$filename = $avatar['name'];
					$filename = uniqid() . "-" . $filename;
					move_uploaded_file($avatar['tmp_name'], "public/images/". $filename);
					$filePath = "public/images/" . $filename;
				}

				// mã hóa mật khẩu
				$hashPassword = password_hash($password, PASSWORD_DEFAULT);

				$data = compact('email', 'name');
				$data['password'] = $hashPassword;
				$data['avatar'] = $filePath;
				$model = new User();
				$model->insert($data);
				header('location: index.php');


	}
}

 ?>