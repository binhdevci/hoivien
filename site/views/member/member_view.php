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
										<? $total =1;
										$img_close = base_url().'templates/assets/css/images/open.png';
										$img_open = base_url().'templates/assets/css/images/close.png';
										
										for($i=1;$i<=6;$i++){
											$img_title = $img_close;
											if($i==1){
												$img_title = $img_open;
											}
											$total = 3*$total;
											 if($i==6){
												 break;
											 }
											?>
											<tr class="header-title-<?=$i?>" onclick="common.show_hide(<?=$i?>);">
												<td colspan="8" class="header level-line"><img class="level-open-<?=$i?>" src="<?php echo $img_title;?>" /> Tầng <? echo $i;?> đang có <span style="color:#FFF;"><? echo count($level[$i+1]);?> /<?=$total?></span> hội viên</td>
											</tr>
											<? 
												$j = $i+1;
												$array[$j] = array();
												foreach($rs as $row){
													
													$f_member ='id_member_lv'.$j;
													$f_nb_payment ='nb_payment_lv'.$j;
													$f_nb_introduce ='nb_introduce_lv'.$j;
													$f_nb_assign ='nb_assign_lv'.$j;
													$f_cd_member ='cd_member_lev'.$j;
													$f_lb_fullname ='lb_fullname_lv'.$j;
													$f_lb_fullname_b ='lb_fullname_lv'.$i;
													$f_dt_create ='dt_create_lv'.$j;
													if($row->$f_member >0 && in_array($row->$f_member,$level[$j])&& !in_array($row->$f_member,$array[$j])){
													array_push($array[$j],$row->$f_member );
											?>
											<tr class="level-<?=$i?>">
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
												<td class="hidden-480"><?
											
												echo $row->$f_lb_fullname_b;
												?></td>
												<td class="hidden-480">Pending</td>

												<td class="hidden-480">
												<?
											
												echo $row->$f_nb_payment;
												?></td>
												<td class="hidden-480"><?
											
												echo $row->$f_nb_introduce;
												?></td>

												<td><?
											
												echo $row->$f_nb_assign;
												?></td>
											</tr>
											<? 	}
												}
											?>
										<? }?>
											<script>
											 url_open = "<?=$img_close?>";
											 url_close = "<?=$img_open?>";
											</script>
										</tbody>
									</table>
								</div><!-- /.span -->
							</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
				<script>
				common.hide_all();
				</script>
			</div>