<?php 
class login extends controler{
    public $doituong;

    function __construct()
    {
        $this->doituong = $this->model("adminModel");
    }

    function home(){
        
       $this->view("admin_login",["page"=>"login"]);
    }

    // hàm kiểm tra đăng nhập login 
    function login_user(){
        if(isset($_POST["login-admin"])){
            $username = trim($_POST["username"]);
            $password = trim($_POST["pass"]);
            
            $result = $this->doituong->check_login($username,$password);
           if($result == false){
            $this->view("admin_login",["page"=>"login","errow"=>false]);
           }else{
            $this->view("admin_index",[]);
           }
            
        }
    }
}
?>