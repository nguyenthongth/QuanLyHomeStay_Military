<!-- btn scroll top -->
<div class="btnScrollTop"><i class="fas fa-angle-up"></i></button></div>
        <!-- end btn scroll top -->

        <!-- btn show book room -->
        <button type="button" class="btnType1 btnShowBookRoom" name="book-room">Book now</button>
        <!-- end btn show book room -->

        <!-- modal form book room -->
        <div class="modal fade modalFormBookRoom" id="modalFormBookRoom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body modalBodyFormBookRoom">
                        <div class="wrapTitleType1 titleMainFormBookRoom">Chúng Tôi Luôn Sẵn Sàng Phục Vụ!</div>
                        <a href="#" class="btnCloseFormBookRoomMobile" data-dismiss="modal" 
                        title="Close Form book a room"><i class="fas fa-times"></i></a>

                        <form action="./home_index/datphong"  method="POST" onsubmit="return check_input()" name="datphong">
                        <div class="listInputBookRoom">
                            <div class="row rowInputBookRoom">
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>
    
                                        <input type="text" readonly="true" class="form-control inputChooseDateCheckIn"
                                         placeholder="Check-in" name="checkin"/>
                                    </div>
                                </div>
    
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>
    
                                        <input type="text" readonly="true" class="form-control inputChooseDateCheckOut"
                                         placeholder="Check-out" name="checkout"/>
                                    </div>
                                </div>
    
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>
    
                                        <select class="form-control selectPciker inputNumberAdult" name="nguoilon">
                                            <option>Người lớn</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>
    
                                        <select class="form-control selectPciker inputNumberChildren" name="treem">
                                            <option>Trẻ em</option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-home"></i></div>
                                        <?php $listroom  = json_decode($data["listroom"] ,true)?>
                                        <select class="form-control selectPciker formControlRoomSelect"
                                         name="phong">
                                            <option>Chọn phòng</option>
                                            <?php foreach($listroom as $row){ ?>
                                                <option  value="<?php echo $row["ma_phong"] ?>">
                                                <?php echo $row["ten_phong"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-sort-numeric-up-alt"></i></div>
    
                                        <input type="number" class="form-control" 
                                        name="slp" placeholder="Số lượng phòng" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-user"></i></div>
    
                                        <input type="text" class="form-control" name="hoten" placeholder="Nhập họ và tên" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-envelope"></i></div>
    
                                        <input type="email" name="email" class="form-control" placeholder="Nhập email" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-phone"></i></div>
    
                                        <input type="text" class="form-control" name="sdt" placeholder="Nhập Số điện thoại" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-file-alt"></i></div>
    
                                        <input type="text" class="form-control" name="ghichu" placeholder="Nhập ghi chú" />
                                    </div>
                                </div>
    
                                <div class="col-md-12 colInputBookRoom colBtnBookRoom">
                                    <div class="contentInputBookRoom">
                                        <button type="submit" name="datngay" class="btnType1 btnBookNowRoomForm">Đặt Phòng Ngay</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        


<!-- checck kiem tra input -->
<script type="text/javascript">
    function check_input(){
        var checkin = document.forms["datphong"]["checkin"].value;
        if (checkin== "") {
            swal("Lỗi..........!", 
            "Ngày check in không thể trống");
            return false;
        }
        var checkout = document.forms["datphong"]["checkout"].value;
        if (checkout== "") {
            swal("Lỗi..........!", 
            "Ngày check out không thể trống");
            return false;
        }
        var nguoilon = document.forms["datphong"]["nguoilon"].value;
        if (nguoilon== "Người lớn" || nguoilon == "" || nguoilon== null) {
            swal("Lỗi..........!", 
            "hãy cho chúng tôi biết bạn đi mấy người nhé !");
            return false;
        }
        var phong = document.forms["datphong"]["phong"].value;
        if (phong== "Chọn phòng" || phong==null || phong== "") {
            swal("Lỗi..........!", 
            "Vui lòng chọn loại phòng bạn cần đặt!");
            return false;
        }
        var soluongphong = document.forms["datphong"]["slp"].value;
        if (soluongphong== "") {
            swal("Lỗi..........!", 
            "Nhập số lượng phòng bạn muốn thuê");
            return false;
        }
        var hoten = document.forms["datphong"]["hoten"].value;
        if (hoten== "") {
            swal("Lỗi..........!", 
            "Hãy cho chúng tôi  biết họ tên của bạn để phục vụ được tốt hơn nhé !");
            return false;
        }
        var sdt = document.forms["datphong"]["sdt"].value;
        if (sdt== "") {
            swal("Lỗi..........!", 
            "Hãy để lại số điện thoại chúng tôi sẽ liên lạc với bạn !");
            return false;
        }
        return true
    }

    function dat_thanh_cong(){
       
        swal("Đặt phòng thành công","Chúng tôi sẽ liên hệ sớm với bạn để xác nhận. Thanks you!");
    }
    function dat_that_bai(){
        swal("Lỗi......","Đặt phòng không thành công. Hãy kiêm tra thông tin và thử lại .");
    }
</script>

<?php 
    if(isset($data["result"])){
        if($data["result"]){
            $ma = $data["madatphong"];
            echo '<script type="text/javascript">
              dat_thanh_cong();      </script>';
        }else{
            echo '<script type="text/javascript">    dat_that_bai();      </script>';
        }
    }


?>
