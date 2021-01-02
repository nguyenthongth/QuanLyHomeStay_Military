<?php 
class lienhe extends controler{

    public $doituong;
// ham contructor 
    public function __construct()
    {
        $this->doituong = $this->model("lienheModel");
    }

    // ham Start
    public function home(){
        $this->view("home_index",["page"=>"lien_he_view"]);
    }

    // thêm lời nhắn từ khách hàng 

    public function tinnhan(){
        if( isset($_POST["sent-lien-he"])  ){
                $hoten  = $_POST["hoten"];
                $email = $_POST["email"];
                $sdt = $_POST["sdt"];
                $noidung  = trim($_POST["noidung"]);
                $ngay = date("d/m/Y");
                $id  = time();

                echo $sdt;
                // goi đến model để insert dữ liệu
                $ketqua = $this->doituong->themLienHe($hoten,$email,$sdt,$noidung,$id,$ngay);
                echo $ketqua;
                $this->view("home_index",["page"=>"lien_he_view","ketqua"=>$ketqua]);
        }
    }
}
?>