<?php 
class admin extends controler{
    public $doituong;

    public function __construct(){

    }
    
    public function home(){
        $this->view("admin_index",[]);
    }
    
}
?>