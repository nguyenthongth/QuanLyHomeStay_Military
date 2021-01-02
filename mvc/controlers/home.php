<?php 
class home extends controler{
    function default(){
            
            $this->view("home_index",["page"=>"home"]);
    }
}
?>