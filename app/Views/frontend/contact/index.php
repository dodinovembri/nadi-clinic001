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
						<h1 class="page_title"><?= ucwords($config_menu->contact) ?></h1>
						<ul class="bread_crumb">
							<li><a href="<?= base_url('/') ?>" title="<?= ucwords($config_menu->home) ?>"><?= ucwords($config_menu->home) ?></a></li>
							<li class="separator icon_small_arrow right_gray">&nbsp;</li>
							<li><?= ucwords($config_menu->contact) ?></li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="<?= ucfirst($config_menu->search_placeholder) ?>" placeholder="<?= ucfirst($config_menu->search_placeholder) ?>" />
						</form>
					</div>
				</div>
				<div class="clearfix">
					<div class="contact_map page_margin_top" id="map">
					</div>
					<div class="page_margin_top clearfix">
						<div class="page_left">
							<h3 class="box_header"><?= ucwords($config_menu->online_appointment_form) ?></h3>
							<form class="contact_form" id="contact_form" method="post" action="<?= $config->url_map ?>">
								<ul class="clearfix tabs_box_navigation sf-menu">
									<li class="tabs_box_navigation_selected submenu wide" aria-haspopup="true">
										<input type="hidden" name="department" value="" />
										<span>Select department</span>
										<ul>
											<li>
												<a href="#laryngological-clinic" title="Laryngological Clinic">
													Laryngological Clinic
												</a>
											</li>
											<li>
												<a href="#primary-health-care" title="Primary Health Care">
													Primary Health Care
												</a>
											</li>
											<li>
												<a href="#ophthalmology-clinic" title="Ophthalmology Clinic">
													Ophthalmology Clinic
												</a>
											</li>
											<li>
												<a href="#pediatric-clinic" title="Pediatric Clinic">
													Pediatric Clinic
												</a>
											</li>
											<li>
												<a href="#dental-clinic" title="Dental Clinic">
													Dental Clinic
												</a>
											</li>
											<li>
												<a href="#outpatient-surgery" title="Outpatient Surgery">
													Outpatient Surgery
												</a>
											</li>
											<li>
												<a href="#outpatient-rehabilitation" title="Outpatient Rehabilitation">
													Outpatient Rehabilitation
												</a>
											</li>
											<li>
												<a href="#gynaecological-clinic" title="Gynaecological Clinic">
													Gynaecological Clinic
												</a>
											</li>
											<li>
												<a href="#cardiac-clinic" title="Cardiac Clinic">
													Cardiac Clinic
												</a>
											</li>
										</ul>
									</li>
								</ul>
								<fieldset class="left">
									<label>First Name</label>
									<div class="block">
										<input class="text_input" name="first_name" type="text" value="" />
									</div>
									<label>Date of Birth (mm/dd/yyyy)</label>
									<div class="block">
										<input class="text_input" type="text" name="date_of_birth" value="" />
									</div>
									<label>Phone Number</label>
									<div class="block">
										<input class="text_input" name="phone_number" type="text" value="" />
									</div>
								</fieldset>
								<fieldset class="right">
									<label>Last Name</label>
									<div class="block">
										<input class="text_input" type="text" name="last_name" value="" />
									</div>
									<label>Social Security Number</label>
									<div class="block">
										<input class="text_input" type="text" name="social_security_number" value="" />
									</div>
									<label>E-mail</label>
									<div class="block">
										<input class="text_input" type="text" name="email" value="" />
									</div>
								</fieldset>
								<fieldset style="clear:both;">
									<label>Reason of Appointment</label>
									<div class="block">
										<textarea name="message"></textarea>
									</div>
									<input type="hidden" name="action" value="contact_form" />
									<input type="submit" name="submit" value="Send" class="more blue" />
								</fieldset>
							</form>
						</div>
						<div class="page_right">
							<h3 class="box_header">
								<?= ucwords($config->name) ?>
							</h3>
							<h3 class="sentence">
								<?= ucfirst($config->short_description) ?>
							</h3>
							<ul class="columns no_padding page_margin_top clearfix">
								<p class="info"><?= $config->address ?></p>
							</ul>
							<ul class="contact_data page_margin_top">
								<li class="clearfix">
									<span class="social_icon phone"></span>
									<p class="value">
										<?= ucwords($config_menu->phone) ?>: <strong><?= $config->phone ?></strong>
									</p>
								</li>
								<li class="clearfix">
									<span class="social_icon mail"></span>
									<p class="value">
										<?= ucwords($config_menu->email) ?>: <a href="<?= $config->mail_url ?>"><span class="__cf_email__"><?= $config->email ?></span></a>
									</p>
								</li>
								<li class="clearfix">
									<span class="social_icon facebook"></span>
									<p class="value">
										<a href="<?= $config->facebook_url ?>" target="_blank"><?= $config->facebook_url ?></a>
									</p>
								</li>
								<li class="clearfix">
									<span class="social_icon twitter"></span>
									<p class="value">
										<a href="<?= $config->twitter_url ?>" target="_blank"><?= $config->twitter_url ?></a>
									</p>
								</li>
								<li class="clearfix">
									<span class="social_icon googleplus"></span>
									<p class="value">
										<a href="<?= $config->googleplus_url ?>" target="_blank"><?= $config->googleplus_url ?></a>
									</p>
								</li>
							</ul>
						</div>
					</div>
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