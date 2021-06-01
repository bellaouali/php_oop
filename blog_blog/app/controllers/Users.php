<?php
class Users extends Controller{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
        ];

        if(empty($data['name']) || empty($data['email']) || empty($data['password'])){
            echo "<script>alert('Please Enter Your Information');</script>";

        }else{
            
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $this->userModel->register($data);
            echo "<script>alert('Register is Done');</script>";
			echo "<script>window.location.href = 'login';</script>";
        }
    } 
    $this->view('users/register');
}

    public function login(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           $data = [
               'email' => trim($_POST['email']),
               'password' => trim($_POST['password']),
           ];

        if(empty($data['email']) || empty($data['password'])){
            echo "<script>alert('Please Enter Your Information');</script>";
            echo "<script>window.location.href = 'login';</script>";
        }
        if($this->userModel->UserId($data['email'])){
            echo "<script>alert('You Are Not Register');</script>";
        }else{
            echo "<script>alert('Your Password or Email Incorrect');</script>";
            echo "<script>window.location.href = 'login';</script>";
        }

        $loginUser = $this->userModel->login($data['email'], $data['password']);
        if($loginUser){
            $_SESSION['user_id'] = $loginUser->id;
            $_SESSION['name'] = $loginUser->name;
            $_SESSION['email'] = $loginUser->email;
            redirect('posts/index');
        }
    }

    $this->view('users/login');          
}

    public function logout(){
        session_destroy();
        redirect('/users/index.php');
    }
}