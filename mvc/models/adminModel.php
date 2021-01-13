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



    //****************************************** Phần Dành cho book room **************************** */
        // hàm trả dánh sách đặt phòng 
        function getBookRoom(){
            $sql  = "SELECT * FROM dat_phong";
            $result  = $this->connect->query($sql);
            $booking = array();
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {           
                    $booking[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($booking);

        }

         // hàm trả về 1 booking
         function getOneBookRoom($ma){
            $sql  = "SELECT * FROM dat_phong WHERE ma_dat_phong='$ma'";
            $result  = $this->connect->query($sql);
            $one_booking = array();
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {           
                    $one_booking[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($one_booking);

        }

        // hàm xác nhận đặt chỗ khách hàng 
        function xacnhan($ma_xac_nhan,$trang_thai){
            $sql  = "UPDATE dat_phong SET trang_thai=$trang_thai WHERE ma_dat_phong='$ma_xac_nhan'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            } else{
                return false;
            }
        }

        // xóa booking room 
        function delete_booking($ma){
            $sql = "DELETE FROM dat_phong WHERE ma_dat_phong='$ma'";
            $result = $this->connect->query($sql);
            if($result){
                return true;
            } else{
                return false;
            }
        }


    //******************************************END  Phần Dành cho book room **************************** */

    // ******************** Phần dành cho hình ảnh ***************************************

    // ham them hinh anh 
    function add_image_model($ma_anh, $ten_anh , $image , $id){
        if(!empty($ten_anh)){
            $ten_anh1 = $ten_anh;
        }else{
            $ten_anh1 = "No_titel";
        }
        $sql  = "INSERT INTO hinh_anh (ma_hinh_anh,tieu_de,image_anh,id_hinh_anh) 
        VALUES ('$ma_anh','$ten_anh1','$image','$id')";
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


    ///************************************************* Phần Dành Cho Room (Phòng)*********** */
    function add_room_model($ma_phong,$ten_phong,$gia_phong,$ma_hinh_anh,$ma_thuoc_tinh,$noi_dung){
        $sql = "INSERT INTO phong(ma_phong, ten_phong, noi_dung, gia_phong, ma_hinh_anh, ma_thuoc_tinh) 
        VALUES ('$ma_phong', '$ten_phong', '$noi_dung', '$gia_phong', '$ma_hinh_anh','$ma_thuoc_tinh')";

        $result = $this->connect->query($sql);
        if($result){
            return true;
        }else {
            return false;
        }


    }
    
    ///************************************************* END Phần Dành Cho Room (Phòng)*********** */


    ///************************************************* Phần dành cho header  infomation (Phần liên hệ với number booking ) *********** */
        // đếm số lượng đặt phòng mới
        function getNumberBookingRoom(){
            $sql  = 'SELECT  COUNT(trang_thai) AS "soluong" FROM dat_phong WHERE trang_thai="0"';
            $result = $this->connect->query($sql);
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
        // chi tiết number booking 

        function getChitietNumberBooking(){
            $sql  = "SELECT * From dat_phong WHERE trang_thai = '0'";
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
    ///*************************************************END Phần dành cho header  infomation *********** */

}
?>