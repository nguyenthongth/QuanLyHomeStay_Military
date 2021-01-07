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

    // ******************** Phần dành cho hình ảnh ***************************************

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

     // ******************** END Phần dành cho hình ảnh ***************************************

    

  
    
     // ******************** Phần dành cho dịch vụ ***************************************
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

    // ********************END  Phần dành cho dịch vụ ***************************************



 // ******************** Phần dành cho khuyến mãi***************************************
    // hàm thêm khuyến mãi 
    function addKhuyenMai($ma_khuyen_mai,$tieu_de,$noidung,$ma_thuoc_tinh,$ma_hinh_anh){
        $sql = "INSERT INTO khuyen_mai(ma_km, tieu_de, noi_dung, ma_thuoc_tinh, ma_hinh_anh)
         VALUES ('$ma_khuyen_mai','$tieu_de','$noidung','$ma_thuoc_tinh','$ma_hinh_anh')";
         $result = $this->connect->query($sql);

         if($result){
             return true;
         } else{
             return false;
         }
    }


         // ******************** END  Phần dành cho khuyến mãi ***************************************

    ///********************************************** Phần dành cho thuộc tính *********************** */
    // hàm thêm thuộc tính
    function addThuocTinh($ma_thuoc_tinh,$tieu_de,$noidung,$id){
        if(isset($ma_thuoc_tinh)){
            if($ma_thuoc_tinh == null || $ma_thuoc_tinh ==""){
                return false;
            }else{
                $sql  ="INSERT INTO thuoc_tinh(ma_thuoc_tinh, ten_thuoc_tinh, noi_dung,id_thuoc_tinh) 
                VALUES ('$ma_thuoc_tinh','$tieu_de','$noidung','$id')";
                $result = $this->connect->query($sql);

                if($result){
                    return true;
                } else{
                    return false;
                }
            }
        }   
    }

    // lấy dữ liệu tất cả thuôc tính
    function getAllThuocTinh(){
        $sql = "SELECT * FROM thuoc_tinh ";
        $result = $this->connect->query($sql);
        $thuoctinh = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $thuoctinh[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($thuoctinh);
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

    // xóa thuộc tính 
    function delete_thuoctinh($id){
        $sql  = "DELETE FROM thuoc_tinh WHERE id_thuoc_tinh='$id'";
        $result = $this->connect->query($sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    // hàm update thuộc tính 
    function update_thuoc_tinh($id ,$ma , $ten, $noidung ){

        $sql = " UPDATE thuoc_tinh SET ma_thuoc_tinh ='$ma', ten_thuoc_tinh = '$ten' , noi_dung = '$noidung' 
        WHERE id_thuoc_tinh = '$id'";

        $result = $this->connect->query($sql);
        if($result){
            return true;
        }else {
            return false;
        }
    }

    // lấy dữ liệu 1 thuộc tính khi cần update 
    function getOneThuocTinh($id){
        $sql  = "SELECT * FROM thuoc_tinh WHERE id_thuoc_tinh = '$id'";

        $result  = $this->connect->query($sql);
        $info = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {           
                $info[] = $row;
            }
        } else {
            return false;
        }
        
        return json_encode($info);
    }
    ///**********************************************end Phần dành cho thuộc tính *********************** */

}
?>