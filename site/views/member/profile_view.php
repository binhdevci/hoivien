	<div class="page-content">
				
					<div class="page-content-area">
						<div id="user-profile-1" class="user-profile row">
							<div class="col-xs-12 col-sm-3 center">
								<div>
									<span class="profile-picture">
										<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="<?=base_url()?>templates/assets/avatars/profile-pic.jpg" />
									</span>

									<div class="space-4"></div>

									<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
										<div class="inline position-relative">
											<a href="#" class="user-title-label"">
												<i class="ace-icon fa fa-circle light-green"></i>
												&nbsp;
												<span class="white">
												<?
													if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
														echo $_SESSION['member']->lb_fullname;
													}
												?>
												</span>
											</a>
										</div>
									</div>
									<div class="vspace-6-sm"></div>
								</div>

							</div>

							<div class="col-xs-12 col-sm-9">
								<div class="tabbable">
									<ul class="nav nav-tabs" id="myTab">
										<li class="active">
											<a data-toggle="tab" href="#basic">
												Thông tin cơ bản
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#profile">
												Thông tin cá nhân
											</a>
										</li>

										<li>
											<a data-toggle="tab" href="#account">
												Thông tin giao dịch
											</a>
										</li>

									</ul>

									<div class="tab-content">
										<div id="basic" class="tab-pane fade in active">
											<div class="row">
												<div class="col-xs-12 col-sm-12">
													<div class="profile-user-info profile-user-info-striped">
														<div class="profile-info-row">
															<div class="profile-info-name"> Mã số </div>

															<div class="profile-info-value">
																<span class="editable" id="usercode">
																<?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo $_SESSION['member']->cd_member;
																	}
																?>			
																</span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Họ và tên </div>

															<div class="profile-info-value">
																<span class="editable" id="fullname"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo $_SESSION['member']->lb_fullname;
																	}
																?>	</span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Ngày đăng ký </div>

															<div class="profile-info-value">
																<span class="editable" id="joined"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo format_date_view($_SESSION['member']->lb_fullname);
																	}
																?>	</span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Tình trạng </div>

															<div class="profile-info-value">
																<span class="editable green" id="status"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		if($_SESSION['member']->bl_active==1){
																			echo "Hoạt động";
																		}else{
																			echo "Đã khóa";
																		}
																	}
																?></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="profile" class="tab-pane fade in">
											<div class="row">
												<div class="col-xs-12 col-sm-12">
													<div class="profile-user-info profile-user-info-striped">
														<div class="profile-info-row">
															<div class="profile-info-name"> Ngày sinh </div>

															<div class="profile-info-value">
																<span class="editable" id="birthday"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo format_date_view($_SESSION['member']->lb_birthday);
																	}
																?></span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> CMND </div>

															<div class="profile-info-value">
																<span class="editable" id="personalid"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_id_card);
																	}
																?></span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Ngày cấp </div>

															<div class="profile-info-value">
																<span class="editable" id="makedate"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo format_date_view($_SESSION['member']->dt_range);
																	}
																?></span>
															</div>
														</div>
														
														<div class="profile-info-row">
															<div class="profile-info-name"> Nơi cấp </div>

															<div class="profile-info-value">
																<span class="editable" id="where"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_place_of_issue);
																	}
																?></span>
															</div>
														</div>
														
														<div class="profile-info-row">
															<div class="profile-info-name"> Địa chỉ thường trú </div>

															<div class="profile-info-value">
																<span class="editable" id="address"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_address_resident);
																	}
																?></span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Địa chỉ tạm trú </div>

															<div class="profile-info-value">
																<span class="editable" id="subaddress"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_address_staying);
																	}
																?></span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Điện thoại </div>

															<div class="profile-info-value">
																<span class="editable" id="mobile"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_phone);
																	}
																?></span>
															</div>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Email </div>

															<div class="profile-info-value">
																<span class="editable" id="mobile"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_email);
																	}
																?></span>
															</div>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Người giới thiệu </div>

															<div class="profile-info-value">
																<span class="editable" id="mobile">
																<?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		$rsperson = get_info_person($_SESSION['member']->id_person_introduce);
																		if(count($rsperson)){
																			echo $rsperson->lb_fullname;
																		}
																	}
																?>
																
																</span>
															</div>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Mã số người giới thiệu </div>

															<div class="profile-info-value">
																<span class="editable" id="mobile"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		if(count($rsperson)){
																			echo $rsperson->cd_member;
																		}
																		
																	}
																?></span>
															</div>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Người chỉ định </div>

															<div class="profile-info-value">
																<span class="editable" id="mobile"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		$rsperson = get_info_person($_SESSION['member']->id_person_assign);
																		if(count($rsperson)){
																			echo $rsperson->lb_fullname;
																		}
																	}
																?></span>
															</div>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Mã số người chỉ định </div>

															<div class="profile-info-value">
																<span class="editable" id="mobile"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		if(count($rsperson)){
																			echo $rsperson->cd_member;
																		}
																		
																	}
																?></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div id="account" class="tab-pane fade">
											<div class="row">
												<div class="col-xs-12 col-sm-12">
													<div class="profile-user-info profile-user-info-striped">
														<div class="profile-info-row bankaccount">
															<span>Tài khoản hưởng thụ thứ 1 </span>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Tên chủ tài khoản </div>

															<div class="profile-info-value">
																<span class="editable" id="birthday"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_name_account_1);
																	}
																?></span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Số tài khoản </div>

															<div class="profile-info-value">
																<span class="editable" id="personalid"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_number_account_1);
																	}
																?></span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Ngân hàng </div>

															<div class="profile-info-value">
																<span class="editable" id="makedate"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_name_bank_1);
																	}
																?></span>
															</div>
														</div>
														
														<div class="profile-info-row">
															<div class="profile-info-name"> Chi nhánh </div>

															<div class="profile-info-value">
																<span class="editable" id="where"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_bank_branch_1);
																	}
																?></span>
															</div>
														</div>
														
														<div class="profile-info-row bankaccount">
															<span>Tài khoản hưởng thụ thứ 2 </span>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Tên chủ tài khoản </div>

															<div class="profile-info-value">
																<span class="editable" id="birthday"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_name_account_2);
																	}
																?></span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Số tài khoản </div>

															<div class="profile-info-value">
																<span class="editable" id="personalid"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_number_account_2);
																	}
																?></span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Ngân hàng </div>

															<div class="profile-info-value">
																<span class="editable" id="makedate"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_name_bank_2);
																	}
																?></span>
															</div>
														</div>
														
														<div class="profile-info-row">
															<div class="profile-info-name"> Chi nhánh </div>

															<div class="profile-info-value">
																<span class="editable" id="where"><?
																	if(isset($_SESSION['id_member'])&&$_SESSION['id_member']>0){
																		echo ($_SESSION['member']->lb_bank_branch_2);
																	}
																?></span>
															</div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- /.col -->
						</div>
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
		
		