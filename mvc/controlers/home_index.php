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
            $ngaydat  = $_POST["phong"];

            echo "ban chon". $ngaydat;

        }
    }
}
?>