<?php 

class admin extends controler{
    public $doituong;
    public $tam;
    

    public function __construct(){
        $this->doituong = $this->model("adminModel");
    }
    
    // hàm mặc định khi chạy controler
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


    //****************************************************************** ROOM  */
    // them phòng
    function add_room(){
        $this->view("admin_index",["page"=>"add_room","user_info"=>$_SESSION["ten"]]);
    }

    //****************************************************************** END  ROOM  */



    //****************************************************************** IMAGE  */
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

            $this->view("admin_index",["page"=>"add_image",
            "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
            "user_info"=>$_SESSION["ten"],
            "result"=>$result]);
             }
      

       }else{
        $this->view("admin_index",["page"=>"add_image",
        "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
        "user_info"=>$_SESSION["ten"]]);
       }
    }

    //******************************************************************END  IMAGE  */


    //****************************************************************** START DỊCH VỤ   */
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


    //****************************************************************** END DỊCH VỤ   */


    //****************************************************************** START KHUYẾN MÃI   */
    // hàm thêm khuyến mãi
    function add_khuyenmai(){
        if( isset($_POST["addKhuyenMai"]) ){
            $ma_km = $_POST["ma_km"];
            $tieu_de = $_POST["tieu_de"];
            $noidung = $_POST["noi_dung"];
            $ma_thuoc_tinh = $_POST["ma_tt"];
            $ma_hinh_anh = $_POST["ma_ha"];

            $result = $this->doituong->addKhuyenMai($ma_km,$tieu_de,$noidung,$ma_thuoc_tinh,$ma_hinh_anh);

            $this->view("admin_index",["page"=>"add_khuyenmai",
        "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
        "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
        "result"=>$result,
        "user_info"=>$_SESSION["ten"]]);
        }else {
            $this->view("admin_index",["page"=>"add_khuyenmai",
        "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
        "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
        "user_info"=>$_SESSION["ten"]]);
        }  
    }


    //****************************************************************** END KHUYẾN MÃI   */


    //****************************************************************** START THUỘC TÍNH   */
    // hàm thêm thuộc tính
    function add_thuoctinh(){
        if( isset($_POST["addThuocTinh"]) ){
            $tieu_de = $_POST["ten_ThuocTinh"];
            $noidung = $_POST["noi_dung_ThuocTinh"];
            $ma_thuoc_tinh = trim($_POST["ma_ThuocTinh"]);
            $id  = time();
            if($tieu_de===null || $noidung === null || $ma_thuoc_tinh ===null ){
                $this->view("admin_index",["page"=>"add_thuoctinh",
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "result"=>false,
            "test"=>$ma_thuoc_tinh,
            "user_info"=>$_SESSION["ten"]]);
           
            }else {
               
            $result = $this->doituong->addThuocTinh($ma_thuoc_tinh,$tieu_de,$noidung,$id);
                $this->view("admin_index",["page"=>"add_thuoctinh",
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
            "result"=>$result,
            "user_info"=>$_SESSION["ten"]]);
            }
           
        }else {
            $this->view("admin_index",["page"=>"add_thuoctinh",
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
            "user_info"=>$_SESSION["ten"]]);
        }  
    }

    // view thuôc tính 
    function viewThuocTinh(){
            $this->view("admin_index",["page"=>"view_thuoctinh",
            "allthuoctinh"=>$this->doituong->getAllThuocTinh(),
            "user_info"=>$_SESSION["ten"]]);
        
    }

    // delete thuộc tính
    function deleteThuocTinh($id){
        $kq = $this->doituong->delete_thuoctinh($id);
        $this->view("admin_index",["page"=>"view_thuoctinh",
        "allthuoctinh"=>$this->doituong->getAllThuocTinh(),
        "result"=>$kq,
        "user_info"=>$_SESSION["ten"]]);
    }

    //update thuoc tinh 
    function updatethuoctinh($id){
        if(isset($_POST["update_tt"])){
            $ma = $_POST["ma_tt_up"];
            $ten = $_POST["ten_tt_up"];
            $noidung = $_POST["nd_tt_up"];
            $result = $this->doituong->update_thuoc_tinh($id ,$ma , $ten , $noidung );
            
            $this->view("admin_index",["page"=>"view_thuoctinh",
            "allthuoctinh"=>$this->doituong->getAllThuocTinh(),
            "result_up"=>$result,
            "user_info"=>$_SESSION["ten"]]);

        } else {
            $this->view("admin_index",["page"=>"update_thuoctinh",
            "onethuoctinh"=>$this->doituong->getOneThuocTinh($id),
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "id_tt"=>$id,
            "user_info"=>$_SESSION["ten"]]);
        }

        
    }

    //****************************************************************** END THUỘC TÍNH   */
}
?>