<?php
class adminModel extends connectDB{

    // kiểm tra username 

    public function check_login($username, $pass){
        
        $sql = "SELECT * FROM administrator WHERE username='$username' AND pass='$pass'";

        $result = $this->connect->query($sql);

        $User = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $User[] = $row;
            }
            
        } else {
            return false;
        }
     
        return $User;
    }







}
?>