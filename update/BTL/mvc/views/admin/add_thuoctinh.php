			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Thêm Thuộc Tính</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Thuộc Tính</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Thêm Thuộc Tính</li>
                            </ol>
                        </div>
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Add Properties</header>
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
                                <form action="./admin/add_thuoctinh" method="POST" > 
								<div class="card-body row">
										<div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" id="sample2"  tabIndex="-1" name="ma_ThuocTinh">
									            <label for="sample2" class="pull-right margin-0">
									                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
									            </label>
									            <label for="sample2" class="mdl-textfield__label">Mã Thuộc Tính</label>
									            <ul data-mdl-for="sample2" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                                    <?php $thuoctinh = $data["maThuocTinh"];?>
                                                    <?php foreach($thuoctinh as $row){ ?>
									                <li class="mdl-menu__item"> <?php echo $row["ma_thuoc_tinh"]?></li>
                                                    <?php } ?>
									            </ul>
									        </div>
							            </div>
									<!-- -->
						            <div class="col-lg-6 p-t-20"> 
                                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" 
										 id = "txtRoomNo" name="ten_ThuocTinh">
					                     <label class = "mdl-textfield__label">Tên Thuộc Tính</label>
					                  </div>
						           	</div>
									   <div class="col-lg-12 p-t-20"> 
							              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
						                     <textarea class = "mdl-textfield__input" rows =  "4" 
						                        id = "education" name="noi_dung_ThuocTinh"></textarea>
						                     <label class = "mdl-textfield__label" >Nội Dung Mô Tả</label>
						                  </div>
								         </div>
							         <div class="col-lg-12 p-t-20 text-center"> 
                                          <button type="submit"  name="addThuocTinh"
                                          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                              Thêm Thuộc Tính</button>
										<button type="button" onclick="XemDS()"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Xem Danh Sách</button>
						            </div>
                                </div>
                                </form>
							</div>
						</div>
					</div> 
                </div>
			</div>
		<!-- ham ngoai vi danh cho javascript va php -->
		<script type="text/javascript">
			function thanhcong(){
				swal("Thêm Thuộc Tính Thành Công!",
				"");
			}

			function thatbai(){
				swal("Thêm Thuộc Tính không Thành Công!",
				"Hãy Chắc chắn rằng bạn nhập đúng hoặc không bỏ trống các trường.");
			}

			function XemDS(){
				window.location = "./admin/viewThuocTinh"
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

