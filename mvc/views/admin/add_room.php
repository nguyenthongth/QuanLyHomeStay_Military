
 			
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Thêm phòng mới</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Rooms</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Room Details</li>
                            </ol>
                        </div>
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add room</header>
									  <!--<button id = "panel-button" 
			                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
			                           data-upgraded = ",MaterialButton">
			                            <i class = "material-icons">more_vert</i>
			                        </button>
			                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
			                           data-mdl-for = "panel-button">
			                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
			                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
			                        <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li> -->
			                        </ul>
								</div>

								<form action="./admin/add_room" method="POST">
								<!-- from thêm Phòng-->
								<div class="card-body row">
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ma_phong">
					                     <label class = "mdl-textfield__label">Mã Phòng của Bạn</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
                                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ten_phong">
					                     <label class = "mdl-textfield__label">Tên Phòng</label>
					                  </div>
						           	</div>
						           	<div class="col-lg-6 p-t-20"> 
                                       <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "number" id = "txtRoomNo" name="gia_phong">
					                     <label class = "mdl-textfield__label">Giá Phòng</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ma_ha">
					                     <label class = "mdl-textfield__label">Mã hình ảnh</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
                                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ma_tt" >
					                     <label class = "mdl-textfield__label">Mã thuộc Tính</label>
					                  </div>
						            </div>
                                       <div class="col-lg-12 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
					                     <textarea class = "mdl-textfield__input" rows =  "4"  name="noi_dung"
					                        id = "education" ></textarea>
					                     <label class = "mdl-textfield__label" for = "text7">Nhập nội dung mô tả cho phòng của bạn</label>
					                  </div>
							         </div>
							         <div class="col-lg-12 p-t-20 text-center"> 
						              	<button type="submit" name="add_new_room"
										  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
										  Thêm Phòng Này</button>
										<button type="button" onclick="xem_ds()" 
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">
										Xem Danh Sách</button>
						            </div>
								</div>
								</form>


								<!-- END from thêm Phòng-->
							</div>
						</div>
					</div> 
                </div>
            </div>
            <!-- end page content -->
<!-- phần này dành cho java scrip hoặc php --> 
<script type="text/javascript">
			function thanhcong(){
				swal("Thành Công!",
				"Phòng Của Bạn Đã Được Thêm Vào Hệ Thống");
			}

			function thatbai(){
				swal("Lỗi......!",
				"Sự cố không mong muốn khi  thêm phòng. Kiểm Tra các ô và thử lại");
			}
		</script>

		<?php 
		if(isset($data["result"])){
			if($data["result"] == true){
				echo '<script type="text/javascript"> thanhcong(); </script>';
			}else{
				echo '<script type="text/javascript"> thatbai(); </script>';
			}
		}
		?>