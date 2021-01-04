<?php 

class admin extends controler{
    public $doituong;
    public $tam;
    

    public function __construct(){
        $this->doituong = $this->model("adminModel");
    }
    
    public function home(){

        if(isset($_SESSION["ten"])){
            $this->view("admin_index",["page"=>"index","user_info"=>$this->tam]);
        } else{
            if(isset($_POST["login-admin"])){
            
                $username = trim($_POST["username"]);
                $password = trim($_POST["pass"]);
                
                $result = $this->doituong->check_login($username,$password);
                $this->tam = $result;
    
                foreach($result as $row){
                    $_SESSION["ten"] = $row["ten"];
                    $this->tam = $row["ten"];
                  
                }
               if($result == false){
                $this->view("admin_login",["page"=>"login","errow"=>false]);
               }else{
                $this->view("admin_index",["page"=>"index","user_info"=>$this->tam]);
            
               }
                
            }else{
                $this->view("admin_login",["page"=>"login"]);
            } 
        }
    }
    // ham logout
    function logout(){
        if(isset($_SESSION['ten'])){
            unset($_SESSION['ten']);
        $this->view("admin_login",["page"=>"login"]);
        }
    }

    // them phòng
    function add_room(){
        $this->view("admin_index",["page"=>"add_room","user_info"=>$_SESSION["ten"]]);
    }
    // thêm hình ảnh
    function add_image(){
       if(isset($_POST["addImage"])){
       
            $image = $_FILES['image']['name'];
            $ma_anh  =  $_POST['ma_anh'];
            $ten_anh  = $_POST['ten_anh'];
            $target = "public/assets/images/".basename($image);
            if($ma_anh == null || $ma_anh =="" || $image ==null || $image == ""){
                $this->view("admin_index",["page"=>"add_image","user_info"=>$_SESSION["ten"],
                "result"=>false]);
            } else{
            $result = $this->doituong->add_image_model($ma_anh,$ten_anh,$image);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }

            $this->view("admin_index",["page"=>"add_image","user_info"=>$_SESSION["ten"],
            "result"=>$result]);
             }
      

       }else{
        $this->view("admin_index",["page"=>"add_image","user_info"=>$_SESSION["ten"]]);
       }
    }


    // hàm thêm dịch vụ 
    function add_dichvu(){
        if( isset($_POST["addService"]) ){
            $ma_dich_vu = $_POST["madv"];
            $tieu_de = $_POST["tieude"];
            $noidung = $_POST["noidung"];
            $ma_thuoc_tinh = $_POST["matt"];
            $ma_hinh_anh = $_POST["maha"];

            $result = $this->doituong->addService($ma_dich_vu,$tieu_de,$noidung,$ma_thuoc_tinh,$ma_hinh_anh);

            $this->view("admin_index",["page"=>"add_dichvu",
        "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
        "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
        "result"=>$result,
        "user_info"=>$_SESSION["ten"]]);

           
        }else {
            $this->view("admin_index",["page"=>"add_dichvu",
        "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
        "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
        "user_info"=>$_SESSION["ten"]]);
        }


        
    }
}
?>