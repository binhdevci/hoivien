<div class="main-content">
				<div class="page-content">
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Danh sách hệ thống xếp dưới
							</h1>
						</div><!-- /.page-header -->
						<!-- PAGE CONTENT BEGINS -->
							<div class="row">
								<div class="col-xs-12">
									<table id="sample-table-1" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center">Mã số</th>
												<th>Họ tên</th>
												<th>Ngày đăng ký</th>
												<th class="hidden-480">Xếp sau</th>

												<th class="hidden-480">Tình trạng đóng hụi</th>
												<th class="hidden-480">Lần đóng hụi</th>

												<th>Số HV giới thiệu</th>
												<th>Số HV xếp dưới</th>
											</tr>
										</thead>

										<tbody>
										<? for($i=1;$i<=12;$i++){
											 if($i==12){
												 break;
											 }
											?>
											<tr>
												<td colspan="8" class="header level-line"><img class="level-open" src="<?php echo base_url()?>templates/assets/css/images/open.png" /> Tầng <? echo $i;?> đang có <? echo count($level[$i+1]);?> /3 hội viên</td>
											</tr>
											<? 
												$j = $i+1;
												foreach($rs as $row){
													
													$f_member ='id_member_lv'.$j;
													$f_member ='id_member_lv'.$j;
													$f_cd_member ='cd_member_lev'.$j;
													$f_lb_fullname ='lb_fullname_lv'.$j;
													$f_lb_fullname_b ='lb_fullname_lv'.$i;
													$f_dt_create ='dt_create_lv'.$j;
													
													if($row->$f_member >0){
													
											?>
											<tr class="level-1">
												<td class="center">
												
												<?
											
												echo $row->$f_cd_member;
												?>
												
												</td>

												<td>
													<a href="javascript:;;"><?
											
												echo $row->$f_lb_fullname;
												?></a>
												</td>
												<td><?
											
												echo format_date_view($row->$f_dt_create);
												?></td>
												<td class="hidden-480">
													<?
													echo $row->$f_lb_fullname_b;
													?>
												</td>
												<td class="hidden-480">Pending</td>

												<td class="hidden-480">0</td>
												<td class="hidden-480">0</td>

												<td>0</td>
											</tr>
											<? 	}
												}
											?>
										<? }?>
											<!--<tr>
												<td class="center">12311677</td>

												<td>
													<a href="#">Nguyễn Đức Trung</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480">Pending</td>

												<td class="hidden-480">3</td>
												<td class="hidden-480">5</td>

												<td>3</td>
											</tr>
											<tr>
												<td class="center">12311677</td>

												<td>
													<a href="#">Hoàng Hải Yến</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480"></td>

												<td class="hidden-480"></td>
												<td class="hidden-480"></td>

												<td></td>
											</tr>
											<tr>
												<td colspan="8" class="level-line"><img class="level-open" src="<?php echo base_url()?>templates/assets/css/images/close.png" />Tầng 2 đang có 8/9 hội viên</td>
											</tr>
											<tr>
												<td class="center">12345677</td>

												<td>
													<a href="#">Võ Trương Hoàng Đông</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480">Pending</td>

												<td class="hidden-480"></td>
												<td class="hidden-480"></td>

												<td></td>
											</tr>
											<tr>
												<td class="center">12311677</td>

												<td>
													<a href="#">Nguyễn Đức Trung</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480"></td>

												<td class="hidden-480">3</td>
												<td class="hidden-480"></td>

												<td></td>
											</tr>
											<tr>
												<td class="center">12311677</td>

												<td>
													<a href="#">Hoàng Hải Yến</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480"></td>

												<td class="hidden-480"></td>
												<td class="hidden-480"></td>

												<td></td>
											</tr>-->
										</tbody>
									</table>
								</div><!-- /.span -->
							</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
			</div>