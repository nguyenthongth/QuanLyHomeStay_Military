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
     return $listroom;

    }
   
}
?>