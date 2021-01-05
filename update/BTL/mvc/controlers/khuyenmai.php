<?php
class khuyenmai extends controler{
    public $doituong;
    public $home1 ; 

    public function __construct()
    {
        $this->doituong = $this->model("dichvuModel");
        $this->home1 = $this->model("homeModel");
    }

    // gọi hàm mặc định cho controler
    function home(){

        $this->view("home_index",["page"=>"list_khuyen_mai_view",
        "listroom"=>$this->home1->getListRoom()]);
    }

    
}
?>