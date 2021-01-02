<!-- btn scroll top -->
<div class="btnScrollTop"><i class="fas fa-angle-up"></i></button></div>
        <!-- end btn scroll top -->

        <!-- btn show book room -->
        <button type="button" class="btnType1 btnShowBookRoom" name="book-room">Đặt ngay</button>
        <!-- end btn show book room -->

        <!-- modal form book room -->
        <div class="modal fade modalFormBookRoom" id="modalFormBookRoom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body modalBodyFormBookRoom">
                        <div class="wrapTitleType1 titleMainFormBookRoom">Chúng Tôi Luôn Sẵn Sàng Phục Vụ!</div>
                        <a href="#" class="btnCloseFormBookRoomMobile" data-dismiss="modal" 
                        title="Close Form book a room"><i class="fas fa-times"></i></a>

                        <form action="./home_index/datphong"  method="POST">
                        <div class="listInputBookRoom">
                            <div class="row rowInputBookRoom">
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>
    
                                        <input type="text" readonly="true" class="form-control inputChooseDateCheckIn"
                                         placeholder="Check-in" name="ngaydat"/>
                                    </div>
                                </div>
    
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="far fa-calendar-alt"></i></div>
    
                                        <input type="text" readonly="true" class="form-control inputChooseDateCheckOut" placeholder="Check-out" />
                                    </div>
                                </div>
    
                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-plus-circle"></i></div>
    
                                        <select class="form-control selectPciker inputNumberAdult">
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
    
                                        <select class="form-control selectPciker inputNumberChildren">
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
                                        <?php $listroom  = $data["listroom"] ?>
                                        <select class="form-control selectPciker formControlRoomSelect" name="phong">
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
    
                                        <input type="number" class="form-control" placeholder="Số lượng phòng" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-user"></i></div>
    
                                        <input type="text" class="form-control" placeholder="Nhập họ và tên" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-envelope"></i></div>
    
                                        <input type="text" class="form-control" placeholder="Nhập email" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-phone"></i></div>
    
                                        <input type="text" class="form-control" placeholder="Nhập Số điện thoại" />
                                    </div>
                                </div>

                                <div class="col-md-6 colInputBookRoom">
                                    <div class="contentInputBookRoom">
                                        <div class="wrapIconFrmCtrBookRoom"><i class="fas fa-file-alt"></i></div>
    
                                        <input type="text" class="form-control" placeholder="Nhập ghi chú" />
                                    </div>
                                </div>
    
                                <div class="col-md-12 colInputBookRoom colBtnBookRoom">
                                    <div class="contentInputBookRoom">
                                        <button type="submit" name="datngay" class="btnType1 btnBookNowRoomForm">Book now 1</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        