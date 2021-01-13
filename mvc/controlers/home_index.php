<?php 

class home_index extends controler{
    public $doituong;

    public function __construct()
    {
        $this->doituong = $this->model("homeModel");
    }

    public function home(){
        $this->view("home_index",["page"=>"home_view"
        ,"listroom"=>$this->doituong->getListRoom()]);
    }


        // hàm đặt phòng
    public function datphong(){
        if( isset($_POST["datngay"])  ){
            $check_in  = $_POST["checkin"];
            $check_out  = $_POST["checkout"];
            $nguoi_lon  = $_POST["nguoilon"];
            if(empty($_POST["treem"]) ||$_POST["treem"]=="Trẻ em"){
                $treem = "0";
            }else{
                $treem  = $_POST["treem"];
            }
            $phong  = $_POST["phong"];
            $so_luong_phong  = $_POST["slp"];
            $ho_ten  = $_POST["hoten"];
            if(empty( $_POST["email"]) ||  $_POST["email"] == "Nhập email"){
                $email= "No Email";
            }else{
                $email  = $_POST["email"];
            }
            $sdt  = $_POST["sdt"];
            if(empty($_POST["ghichu"]) || $_POST["ghichu"]== "Nhập ghi chú"){
                $ghi_chu = "No ghi chú";
            }else{
                $ghi_chu  = $_POST["ghichu"];
            }
              
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $ma_dat_p = date("dmy").date('His');
            $ngaydat = date("d/m/Y");

           $result = $this->doituong->bookroom($ma_dat_p, $check_in, $check_out,$phong,$so_luong_phong,$nguoi_lon,$treem,$ho_ten,$email,$sdt,$ghi_chu, $ngaydat);
           
           $this->view("home_index",["page"=>"home_view",
           "result"=>$result,
           "madapphong"=>$ma_dat_p,
           "listroom"=>$this->doituong->getListRoom()]); 

        }
    }
}
?>