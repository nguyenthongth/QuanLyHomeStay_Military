<div class="wrapHeader">
            <div class="wrapHeaderTop"></div>

            <div class="wrapHeaderBottom">
                <div class="container-xl containerHeaderBottom">
                    <div class="clearfix contentHeaderBottom">
                        <a href="#" title="Menu" class="btnShowMenuHeaderMobile">
                            <div class="iconShow"><i class="fas fa-bars"></i></div>
                            <div class="iconHidden"><i class="fas fa-times"></i></div>
                        </a>

                        <h1 class="wrapLogoHeaderBottom">
                            <a class="linkLogoHeaderBottom" href="./home_index" title="Masova Hotel">
                            <img src="public/assets/images/logo.png" class="imgLogoHeaderBottom" 
                            alt="Masova Hotel" /></a>
                        </h1>

                        <div class="wrapBtnBookRoomHeader">
                            <button type="button" name="book-now" class="btnType1 btnBookNowRoomHeader"  data-toggle="modal" data-target="#modalFormBookRoom"
                            >Đặt phòng ngay</button>
                        </div>

                        <div class="wrapCloseMenuHeaderMobile"></div>
                        <div class="wrapMenuMainHeaderBottom">
                            <ul class="listMenuMainHeaderBottom">
                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./home_index" 
                                    title="Trang chủ">Trang chủ</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom menuSubHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./room" title="Phòng">Phòng</a>
                                    <div class="btnDropdowMenuSubHeaderBottom"><i class="fas fa-chevron-down"></i></div>

                                    <div class="wrapListMenuSubHeaderBottom">
                                        <ul class="listMenuSubHeaderBottom">
                                            <?php $listroom = $data["listroom"] ?>
                                            <?php foreach($listroom as $row) { ?>
                                            <li class="listItemMenuSubHeaderBottom">
                                            <a class="listLinkMenuSubHeaderBottom"
                                             href="./room/room-don" name="<?php echo $row["ma_phong"]  ?>" >
                                             <?php echo $row["ten_phong"] ?></a></li>

                                            <?php } ?>
                                        </ul>
                                    </div>
                                </li>

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./dichvu" title="Dịch vụ">Dịch vụ</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="ds-khuyen-mai.htm" title="Khuyến mãi">Khuyến mãi</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom menuSubHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="javascript:void(0)" title="Thư viện">Thư viện</a>
                                    <div class="btnDropdowMenuSubHeaderBottom"><i class="fas fa-chevron-down"></i></div>

                                    <div class="wrapListMenuSubHeaderBottom">
                                        <ul class="listMenuSubHeaderBottom">
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="ds-hinh-anh.htm" title="Thư viện hình ảnh">Thư viện hình ảnh</a></li>

                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="ds-video.htm" title="Thư viện video">Thư viện video</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./lienhe" title="Liên hệ">Liên hệ</a>
                                </li>
                            </ul>

                            <div class="headerTopLeft">
                                <ul class="clearfix listMenuHeaderTop">
                                    <li class="listItemHeaderTop"><a target="_blank" class="listLinkHeaderTop" href="https://www.google.com/maps/place/MASOVA+HOTEL/@12.2264158,109.2001686,15z/data=!4m2!3m1!1s0x0:0x2896ab179721dcf0?sa=X&ved=2ahUKEwitrez7kqfsAhXIG6YKHSq-CuIQ_BIwDHoECBYQBQ" title="100A8 - 100A9, Trần Phú, Lộc Thọ, Thành phố Nha Trang, Khánh Hòa" target="_blank"><i class="fas fa-map-marker-alt"></i> 07 Mai Xuân Thưởng, Vĩnh Hải, Thành phố Nha Trang, Khánh Hòa</a></li>
                                    <li class="listItemHeaderTop"><a class="listLinkHeaderTop" href="tel:02583905999" title="0258 3905 999"><i class="fas fa-phone"></i> Hotline: 0258 8688 888</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="headerTopRight">
                            <ul class="clearfix listMenuHeaderTop menuSearchAndLanguage">
                                <li class="listItemHeaderTop menuSubHeaderBottom menuLanguageHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langVietNam.jpg" class="imgLanguageHeaderBottom" alt="Viet Nam" /></a>
                                    <div class="btnDropdowMenuSubHeaderBottom"><i class="fas fa-chevron-down"></i></div>

                                    <div class="wrapListMenuSubHeaderBottom">
                                        <ul class="listMenuSubHeaderBottom">
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langVietNam.jpg" alt="Viet Nam" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langEnglish.jpg" alt="English" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langChinese.jpg" alt="Chinese" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langKorean.jpg" alt="Korean" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langRussian.jpg" alt="English" /></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>