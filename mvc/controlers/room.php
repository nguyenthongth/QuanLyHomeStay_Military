<?php 
class room extends controler{
    
    public $doituong;

    public function __construct()
    {
        $this->doituong = $this->model("roomModel");
    }

    // goi hàm mặc định

    public function home(){
        $this->view("home_index",["page"=>"list_room_view" ,"listroom"=> $this->doituong->getListRoom()]);
    }

}

?>