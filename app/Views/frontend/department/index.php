<!DOCTYPE html>
<html>

<head>
	<title><?= $config->name ?></title>
	<!--meta-->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />

	<!--style-->
	<?= $this->include('frontend/component/style') ?>
</head>

<body>
	<div class="site_container">
		<?= $this->include('frontend/component/header') ?>
		<div class="page relative">
			<div class="page_layout page_margin_top clearfix">
				<div class="page_header clearfix">
					<div class="page_header_left">
						<h1 class="page_title"><?= ucwords($config_menu->department) ?></h1>
						<ul class="bread_crumb">
							<li><a href="<?= base_url('/') ?>" title="<?= ucwords($config_menu->home) ?>"><?= ucwords($config_menu->home) ?></a></li>
							<li class="separator icon_small_arrow right_gray">&nbsp;</li>
							<li><?= ucwords($config_menu->department) ?></li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="<?= ucfirst($config_menu->search_placeholder) ?>" placeholder="<?= ucfirst($config_menu->search_placeholder) ?>" />
						</form>
					</div>
				</div>
				<!-- box menu -->
				<ul class="clearfix tabs_box_navigation sf-menu page_margin_top">
					<li class="tabs_box_navigation_selected submenu wide">
						<span><?= ucwords($department->name) ?></span>
						<ul>
							<?php foreach ($departments as $key => $value) { ?>
								<li>
									<a href="<?= base_url('department/show/' . $value->id) ?>" title="<?= ucwords($value->name) ?>">
										<?= ucwords($value->name) ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</li>
				</ul>
				<div class="page_left">
					<ul class="accordion wide">
						<li>
							<div id="accordion-primary-health-care" style="background-color:#F8F8F8">
							</div>
							<div class="clearfix tabs">
								<!-- menu -->
								<ul class="tabs_navigation clearfix">
									<li>
										<a href="#primary-health-care-general" title="<?= ucwords($config_menu->general_info) ?>">
											<?= ucwords($config_menu->general_info) ?>
										</a>
									</li>
									<li>
										<a href="#primary-health-care-services" title="<?= ucwords($config_menu->service) ?>">
											<?= ucwords($config_menu->service) ?>
										</a>
									</li>
									<li>
										<a href="#primary-health-care-doctors" title="<?= ucwords($config_menu->doctor_list) ?>">
											<?= ucwords($config_menu->doctor_list) ?>
										</a>
									</li>
									<li>
										<a href="<?= base_url('timetable/department/show/' . $department->id) ?>" title="<?= ucwords($config_menu->timetable) ?>">
											<?= ucwords($config_menu->timetable) ?>
										</a>
									</li>
								</ul>
								<!-- description -->
								<div id="primary-health-care-general">
									<h3 class="sentence">
										<?= ucfirst($department->description) ?>
									</h3>
								</div>
								<div id="primary-health-care-services">
									<div class="columns page_margin_top clearfix">
										<div class="column">
											<ul class="items_list page_margin_top clearfix">
												<?php foreach ($department_services as $key => $value) { ?>
													<li class="clearfix"><span><?= ucwords($value->description) ?></span>
														<div class="value"><?= ucwords($value->price) ?></div>
													</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								<div id="primary-health-care-doctors">
									<ul class="doctors_list">
										<?php foreach ($department_doctors as $key => $value) { ?>
											<li class="item clearfix">
												<div class="columns no_width">
													<div class="column_left">
														<div class="gallery_box">
															<img src="<?= base_url('assets/images/team/' . $value->image1) ?>" alt="" />
															<div class="description">
																<h3>
																	<?= ucwords($value->name) ?>
																</h3>
																<h5>
																	<?= ucwords($value->speciality) ?>
																</h5>
															</div>
															<ul class="controls">
																<li>
																	<a href="<?= base_url('assets/images/team/' . $value->image1) ?>" rel="primary-health-care-doctors" class="fancybox open_lightbox"></a>
																</li>
															</ul>
															<ul class="social_icons clearfix">
																<li>
																	<a class="social_icon facebook" href="<?= $value->facebook_url ?>" title="">
																		&nbsp;
																	</a>
																</li>
																<li>
																	<a class="social_icon googleplus" href="<?= $value->googleplus_url ?>" title="">
																		&nbsp;
																	</a>
																</li>
																<li>
																	<a class="social_icon mail" href="<?= $value->mail_url ?>" title="">
																		&nbsp;
																	</a>
																</li>
																<li>
																	<a class="social_icon forrst" href="<?= $value->forrst_url ?>" title="">
																		&nbsp;
																	</a>
																</li>
															</ul>
														</div>
													</div>
													<div class="column_right">
														<div class="details_box">
															<h3 class="box_header">
																<?= ucwords($value->name) ?>
															</h3>
															<ul class="info_list page_margin_top">
																<li class="clearfix">
																	<label>
																		<?= ucwords($config_menu->speciality) ?>
																	</label>
																	<div class="text">
																		<?= ucwords($value->speciality) ?>
																	</div>
																</li>
																<li class="clearfix">
																	<label>
																		<?= ucwords($config_menu->degree) ?>
																	</label>
																	<div class="text">
																		<?= ucwords($value->name) ?>
																	</div>
																</li>
																<li class="clearfix">
																	<label>
																		<?= ucwords($config_menu->training) ?>
																	</label>
																	<div class="text">
																		<?= ucwords($value->training) ?>
																	</div>
																</li>
																<li class="clearfix">
																	<label>
																		<?= ucwords($config_menu->office) ?>
																	</label>
																	<div class="text">
																		<?= ucwords($value->office) ?>
																	</div>
																</li>
																<li class="clearfix">
																	<label>
																		<?= ucwords($config_menu->work_day) ?>
																	</label>
																	<div class="text">
																		<?= ucwords($value->work_days) ?>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="page_right" style="margin-top: -60px;">
					<ul>

						<li class="sidebar_box">
							<h3 class="box_header"><?= ucwords($config_menu->make_an_appointment) ?></h3>
							<p class="info"><?= $config->make_appointment_description ?></p>
							<ul class="contact_data">
								<?php foreach ($appointment_types as $key => $value) { ?>
									<li class="clearfix">
										<span class="social_icon <?= $value->icon ?>"></span>
										<p class="value"><?= $value->description ?></p>
									</li>
								<?php } ?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?= $this->include('frontend/component/footer') ?>
	</div>
	<!--js-->
	<?= $this->include('frontend/component/script') ?>

	<div class="layout_picker">
		<div class="layout_picker_icon">&nbsp;</div>
		<div class="layout_picker_content">
			<ul>
				<li class="layout_picker_header"><?= ucwords($config_menu->layout) ?></a></li>
				<li><a href="#" id="layout_picker_fw" class="selected"><?= ucwords($config_menu->wide) ?></a></a></li>
				<li><a href="#" id="layout_picker_bx"><?= ucwords($config_menu->boxed) ?></a></a></li>
			</ul>
		</div>
	</div>
</body>

</html>