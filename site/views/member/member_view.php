<div class="main-content">
				<div class="page-content">
					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-150"></i>
						</div>

						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; Choose Skin</span>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
									<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
									<label class="lbl" for="ace-settings-add-container">
										Inside
										<b>.container</b>
									</label>
								</div>
							</div><!-- /.pull-left -->

							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
								</div>
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->

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
												<th></th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td colspan="9" class="header level-line"><img class="level-open" src="<?php echo base_url()?>templates/assets/css/images/open.png" /> Tầng 1 đang có 3/3 hội viên</td>
											</tr>
											<tr class="level-1">
												<td class="center">12345677</td>

												<td>
													<a href="#">Võ Trương Hoàng Đông</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480">Pending</td>

												<td class="hidden-480">4</td>
												<td class="hidden-480">13</td>

												<td>3</td>
												<td>Building</td>
											</tr>
											<tr>
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
												<td>Building</td>
											</tr>
											<tr>
												<td class="center">12311677</td>

												<td>
													<a href="#">Hoàng Hải Yến</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480">Pending</td>

												<td class="hidden-480">3</td>
												<td class="hidden-480">7</td>

												<td>4</td>
												<td>Building</td>
											</tr>
											<tr>
												<td colspan="9" class="level-line"><img class="level-open" src="<?php echo base_url()?>templates/assets/css/images/close.png" />Tầng 2 đang có 8/9 hội viên</td>
											</tr>
											<tr>
												<td class="center">12345677</td>

												<td>
													<a href="#">Võ Trương Hoàng Đông</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480">Pending</td>

												<td class="hidden-480">4</td>
												<td class="hidden-480">13</td>

												<td>3</td>
												<td>Building</td>
											</tr>
											<tr>
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
												<td>Building</td>
											</tr>
											<tr>
												<td class="center">12311677</td>

												<td>
													<a href="#">Hoàng Hải Yến</a>
												</td>
												<td>1/6/2015</td>
												<td class="hidden-480">Hội Quán Thiện Tâm</td>
												<td class="hidden-480">Pending</td>

												<td class="hidden-480">3</td>
												<td class="hidden-480">7</td>

												<td>4</td>
												<td>Building</td>
											</tr>
										</tbody>
									</table>
								</div><!-- /.span -->
							</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
			</div>