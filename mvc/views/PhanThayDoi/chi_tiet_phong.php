<!-- breadcrumbs -->
<link rel="stylesheet" type="text/css" href="public/assets/css/room-detail.css" />
<?php $room  = json_decode($data["one_rooms"],true);
    foreach($room as $row1 ){ ?>
<div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb"><?php  echo $row1["ten_phong"]?></h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" class="linkListBreadcrumb" title="Trang chủ">Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./room" class="linkListBreadcrumb" title="Phòng">Phòng</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page"><?php  echo $row1["ten_phong"]?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- room detail -->
        <div class="wrapPageRoomDetail">
            <div class="container-xl containerPageRoomDetail">
                <div class="contentPageRoomDetail">
                    <div class="row rowInfoRoomDetail">
                        <div class="col-lg-6 colSlideRoomDetail">
                            <div class="contentSlideRoomDetail">
                                <div class="wrapSlideMainRoomDetail">
                                    <div class="showSlideMainRoomDetail">
                                        <?php
                                            if(isset($data["image_room"])){
                                                $image  = json_decode($data["image_room"], true);
                                                if(!empty($image)){
                                                    foreach($image as $row2){
                                                        echo '<div class="itemSlideMainRooMDetail">
                                                        <div class="wrapImgResize img16And9">
                                                            <img src="public/assets/images/'.$row2["image_anh"].'" />
                                                        </div>
                                                    </div>';
                                                    }
                                                }
                                            }
                                        
                                        ?>                               
                                       
                                    </div>
                                </div>

                                  <!-- start image small --> 
                                <div class="wrapSlideCtrRoomDetail">
                                    <div class="showSlideCtrRoomDetail">

                                        
                                        <?php
                                            if(isset($data["image_room"])){
                                                $image  = json_decode($data["image_room"], true);
                                                if(!empty($image)){
                                                    foreach($image as $row2){
                                                        echo '<div class="itemSlideCtrRooMDetail">
                                                        <div class="wrapImgResize img16And9 wrapImgResizeSlideCtrRooMDetail">
                                                            <img src="public/assets/images/'.$row2["image_anh"].'" alt="Senior Deluxe hướng biển" />
                                                        </div>
                                                    </div>';
                                                    }
                                                }
                                            }
                                        
                                        ?>    
                                      
                                    </div>
                                </div>
                                <!-- end image small --> 
                            </div>
                        </div>

                        <div class="col-lg-6 colTextRoomDetail">
                            <div class="contentTextRoomDetail">
                                <div class="wrapTitleAndPriceRoomDetail">
                                    <button type="button" class="btnType1 btnBookRoomDetail" 
                                    name="Book-now" data-room="3" data-toggle="modal" 
                                    data-target="#modalFormBookRoom">Book now</button>

                                    <div class="wrapTitleType1 titleMainRoomDetail"><?php echo $row1["ten_phong"] ?></div>
                                    
                                    <div class="wrapPriceRoomDetail">
                                        Giá:
                                        <div class="valPriceRoomDetail"><?php echo substr($row1["gia_phong"],0,3).",".substr($row1["gia_phong"],3,3) ?> VNĐ</div>
                                    </div>
                                    
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- end room chi tiet --> 
                    <div class="wrapAmenitiesRoomDetail">
        				<div class="wrapTitleType2 titleMainAmenitiesRoomDetail">Tiện ích</div>

        				<ul class="row listAmenitiesRoomDetail">
	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-1.png" alt="Wifi miễn phí"></span> 
                                    <h2 class="textTienIchPhong">Wifi miễn phí</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-2.png" alt="Điện thoại"></span> 
                                    <h2 class="textTienIchPhong">Điện thoại</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-3.png" alt="Tivi"></span> 
                                    <h2 class="textTienIchPhong">Tivi</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-4.png" alt="Két sắt"></span> 
                                    <h2 class="textTienIchPhong">Két sắt</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-5.png" alt="Mini Bar"></span> 
                                    <h2 class="textTienIchPhong">Mini Bar</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-6.png" alt="Tủ quần áo"></span> 
                                    <h2 class="textTienIchPhong">Tủ quần áo</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-7.png" alt="Điều hòa"></span> 
                                    <h2 class="textTienIchPhong">Điều hòa</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-8.png" alt="Bàn làm việc"></span> 
                                    <h2 class="textTienIchPhong">Bàn làm việc</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-9.png" alt="Ấm nước nóng"></span> 
                                    <h2 class="textTienIchPhong">Ấm nước nóng</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-10.png" alt="Dép"></span> 
                                    <h2 class="textTienIchPhong">Dép</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-11.png" alt="Máy sấy tóc"></span> 
                                    <h2 class="textTienIchPhong">Máy sấy tóc</h2>
                                </div>
	                        </li>

	                        <li class="col-sm-6 col-md-4 col-lg-3 colItemAmenitiesRoomDetail">
                                <div class="contentItemAmenitiesRoomDetail">
                                    <span class="wrapicTienIchPhong"><img src="public/assets/images/tien-ich-12.png" alt="Áo choàng tắm"></span> 
                                    <h2 class="textTienIchPhong">Áo choàng tắm</h2>
                                </div>
	                        </li>
        				</ul>
                    </div>
                    
                    <div class="wrapRoomWouldLike">
                        <div class="wrapTitleType2 titleMainRoomWouldLike">Có thể bạn thích</div>

                        <div class="wrapSlideRoomWouldLike">
                            <div class="showSlideRoomWouldLike">
                                <div class="itemSlideRoomWouldLike">
                                    <div class="contentItemProject">
                                        <a href="phong.htm" title="Deluxe" class="wrapImgResize imgSquare wrapImgResizeItemProject">
                                            <img src="public/assets/images/project-2.jpg" class="imgItemProject" alt="Deluxe" />
                                        </a>

                                        <div class="wrapTextItemProject">
                                            <a href="phong.htm" class="linkTitleItemProject" title="Deluxe"><h4 class="titleHeaddingItemProject">Deluxe</h4></a>
                                            
                                            <div class="wrapInfoRoomItem">
                                                <span class="textInfRoomItem"><i class="fas fa-compress"></i> 20 m2</span>

                                                <span class="textInfRoomItem"><i class="far fa-eye"></i> View thành phố</span>
                                            </div>

                                            <div class="priceRoomItem">Giá <div class="textPriceRoomItem">280,000 VNĐ</div></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="itemSlideRoomWouldLike">
                                    <div class="contentItemProject">
                                        <a href="phong.htm" title="Deluxe hướng biển" class="wrapImgResize imgSquare wrapImgResizeItemProject">
                                            <img src="public/assets/images/project-3.jpg" class="imgItemProject" alt="Deluxe hướng biển" />
                                        </a>

                                        <div class="wrapTextItemProject">
                                            <a href="phong.htm" class="linkTitleItemProject" title="Deluxe hướng biển"><h4 class="titleHeaddingItemProject">Deluxe hướng biển</h4></a>

                                            <div class="wrapInfoRoomItem">
                                                <span class="textInfRoomItem"><i class="fas fa-compress"></i> 20 m2</span>

                                                <span class="textInfRoomItem"><i class="far fa-eye"></i> View thành phố</span>
                                            </div>

                                            <div class="priceRoomItem">Giá <div class="textPriceRoomItem">280,000 VNĐ</div></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="itemSlideRoomWouldLike">
                                    <div class="contentItemProject">
                                        <a href="phong.htm" title="Senior Deluxe hướng biển" class="wrapImgResize imgSquare wrapImgResizeItemProject">
                                            <img src="public/assets/images/project-4.jpg" class="imgItemProject" alt="Senior Deluxe hướng biển" />
                                        </a>

                                        <div class="wrapTextItemProject">
                                            <a href="phong.htm" class="linkTitleItemProject" title="Senior Deluxe hướng biển"><h4 class="titleHeaddingItemProject">Senior Deluxe hướng biển</h4></a>

                                            <div class="wrapInfoRoomItem">
                                                <span class="textInfRoomItem"><i class="fas fa-compress"></i> 20 m2</span>

                                                <span class="textInfRoomItem"><i class="far fa-eye"></i> View thành phố</span>
                                            </div>

                                            <div class="priceRoomItem">Giá <div class="textPriceRoomItem">280,000 VNĐ</div></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="itemSlideRoomWouldLike">
                                    <div class="contentItemProject">
                                        <a href="phong.htm" title="Suite Hướng biển" class="wrapImgResize imgSquare wrapImgResizeItemProject">
                                            <img src="public/assets/images/project-1.jpg" class="imgItemProject" alt="Suite Hướng biển" />
                                        </a>

                                        <div class="wrapTextItemProject">
                                            <a href="phong.htm" class="linkTitleItemProject" title="Suite Hướng biển"><h4 class="titleHeaddingItemProject">Suite Hướng biển</h4></a>

                                            <div class="wrapInfoRoomItem">
                                                <span class="textInfRoomItem"><i class="fas fa-compress"></i> 20 m2</span>

                                                <span class="textInfRoomItem"><i class="far fa-eye"></i> View thành phố</span>
                                            </div>

                                            <div class="priceRoomItem">Giá <div class="textPriceRoomItem">280,000 VNĐ</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end room detail -->
        <script src="public/assets/js/room-detail.js"></script>