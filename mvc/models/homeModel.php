<?php
class homeModel extends connectDB{
    
    function getListRoom(){
        $sql = 'SELECT ma_phong , ten_phong FROM phong ';
        $result = $this->connect->query($sql);

        // trả về mảng phòng
        $listroom  = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $listroom[] = $row;
            }
        } else {
            echo "0 results";
        }
        return json_encode($listroom);

    }


    // book room oder 

    function bookroom($ma_dp, $check_in, $check_out,$loai_p,$slp,$nguoi_lon,$tre_em,$hoten,$email,$sdt,$ghichu, $tgdat){
         $sql = "INSERT INTO dat_phong (ma_dat_phong, thoi_gian_vao, thoi_gian_ra, ma_phong, 
        so_luong_phong, nguoi_lon, tre_em, ho_ten, email, sdt, ghichu, thoi_gian_dat) 
        VALUES ('$ma_dp','$check_in','$check_out','$loai_p','$slp','$nguoi_lon','$tre_em','$hoten','$email'
        ,'$sdt','$ghichu','$tgdat')";

        $result = $this->connect->query($sql);
         if($result){
             return true;
         }else{
             return false;
         }


    }
   
}
?>