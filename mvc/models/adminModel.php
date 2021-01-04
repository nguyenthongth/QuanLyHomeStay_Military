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

    // ham them hinh anh 
    function add_image_model($ma_anh, $ten_anh , $image){
        $sql  = "INSERT INTO hinh_anh(ma_hinh_anh,tieu_de,image_anh) VALUES('$ma_anh','$ten_anh','$image')";
        $result = $this->connect->query($sql);

        if($result){
            return true;
        } else{
            return false;
        }
    }


    // hàm get Mã thuộc Tính
    function getMaThuocTinh(){
        $sql = "SELECT DISTINCT thuoc_tinh.ma_thuoc_tinh FROM thuoc_tinh ";
        $result = $this->connect->query($sql);
        $ma_thuoc_tinh = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $ma_thuoc_tinh[] = $row;
            }
        } else {
            return false;
        }
        
        return $ma_thuoc_tinh;
    }
    
    // hàm get Mã Hình ảnh
    function getMaHinhAnh(){
        $sql = "SELECT DISTINCT hinh_anh.ma_hinh_anh FROM hinh_anh ";
        $result = $this->connect->query($sql);
        $ma_hinh_anh = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $ma_hinh_anh[] = $row;
            }
        } else {
            return false;
        }
        
        return $ma_hinh_anh;
    }
    
    // ham them dich vu moi
    function addService($ma_dich_vu,$tieu_de,$noidung,$ma_thuoc_tinh,$ma_hinh_anh){
        $sql = "INSERT INTO dich_vu(ma_dich_vu, tieu_de, noi_dung, ma_thuoc_tinh, ma_hinh_anh)
         VALUES ('$ma_dich_vu','$tieu_de','$noidung','$ma_thuoc_tinh','$ma_hinh_anh')";
         $result = $this->connect->query($sql);

         if($result){
             return true;
         } else{
             return false;
         }
    }




}
?>