<!-- start page content -->
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Room Booking</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Booking</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Booking</li>
                            </ol>
                        </div>
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Edit Room Booking</header>
								</div>

                                <!-- from cap nhat booking --> 
                                <?php $one_booking  = json_decode($data["one_booking_room"],true); ?>
                                <?php foreach($one_booking as $row) { ?>
                                <form >
								<div class="card-body row">
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" readonly  value="<?php echo $row["ma_dat_phong"] ?>" 
                                         id = "txtFirstName">
					                     <label class = "mdl-textfield__label">Mã Đặt phòng</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" value="<?php echo $row["thoi_gian_vao"] ?>" id = "txtLasttName">
					                     <label class = "mdl-textfield__label" >Ngày check-in</label>
					                  </div>
						            </div>
						             <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" value="<?php echo $row["email"] ?>" id = "txtemail">
					                     <label class = "mdl-textfield__label" >Email</label>
					                      <span class = "mdl-textfield__error">Enter Valid Email Address!</span>
					                  </div>
						            </div>
						             <div class="col-lg-6 p-t-20"> 
						              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								            <input class="mdl-textfield__input" type="text" id="sample2" value="<?php echo $row["thoi_gian_ra"] ?>"  tabIndex="-1">
								            <label for="sample2" class="pull-right margin-0">
								                
								            </label>
								            <label for="sample2" class="mdl-textfield__label">Ngày check-out</label>
								           
								        </div>
						            </div>
									<div class="col-lg-6 p-t-20">
						               <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" value="<?php echo $row["sdt"] ?>"
					                        pattern = "-?[0-9]*(\.[0-9]+)?" id = "text5">
					                     <label class = "mdl-textfield__label" for = "text5">Số điện thoại</label>
					                     <span class = "mdl-textfield__error">Number required!</span>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" value="<?php echo $row["nguoi_lon"] ?>" >
					                     <label class = "mdl-textfield__label" >Người lớn</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" value="<?php echo $row["ho_ten"] ?>" >
					                     <label class = "mdl-textfield__label" >Họ tên</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" value="<?php echo $row["tre_em"] ?>" >
					                     <label class = "mdl-textfield__label" >Trẻ em</label>
					                  </div>
						            </div>
						             <div class="col-lg-6 p-t-20"> 
						              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								            <input class="mdl-textfield__input" type="text" id="list2" value="<?php echo $row["thoi_gian_dat"] ?>" readonly tabIndex="-1">
								            <label for="list2" class="pull-right margin-0">
								                
								            <label for="list2" class="mdl-textfield__label">Thời Gian Đặt</label>
								         
								        </div>
						           	</div>
						           	<div class="col-lg-6 p-t-20"> 
						              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								            <input class="mdl-textfield__input" type="text" id="list3" value="<?php echo $row["ma_phong"] ?>"  tabIndex="-1">
								            <label for="list3" class="pull-right margin-0">
								                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
								            </label>
								            <label for="list3" class="mdl-textfield__label">Loại Phòng</label>
								            <ul data-mdl-for="list3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
												<?php if(isset($data["listroom"])){
													$list = json_decode($data["listroom"],true);
													if(!empty($list)){
														foreach($list as $row1){
															
															echo '<li class="mdl-menu__item" data-val="1" >'. $row1["ma_phong"] .'</li>';
															
														}
													}
												}							
												
												?>
											</ul>
								        </div>
						           	</div>
						            <div class="col-lg-12 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
					                     <textarea class = "mdl-textfield__input" rows =  "4" 
					                        id = "text7" ><?php echo $row["ghichu"] ?></textarea>
					                     <label class = "mdl-textfield__label" for = "text7">Address</label>
					                  </div>
							         </div>
						           
                                     
							         <div class="col-lg-12 p-t-20 text-center"> 
						              	<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
						            </div>
								</div>
                                    <?php }?>
                                </form>
                                <!-- end  from cap nhat booking --> 
							</div>
						</div>
					</div> 
                </div>
            </div>
            <!-- end page content -->