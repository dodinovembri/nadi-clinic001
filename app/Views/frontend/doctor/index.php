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
			<?php if ($is_production == 0 || $trial_name == null) { ?>
				<a title="SELECT THIS TEMPLATE" href="https://nadi-app.com/get-started/<?= $config->app_id ?>" class="more blue medium home_box_container clearfix" style="position:fixed; background-color: red; margin-top: -8px; z-index: 1;">SELECT THIS TEMPLATE
				</a>
			<?php } ?>
			<div class="page_layout page_margin_top clearfix">
				<div class="page_header clearfix">
					<div class="page_header_left">
						<h1 class="page_title"><?= ucwords($config_menu->our_doctor) ?></h1>
						<ul class="bread_crumb">
							<li>
								<a href="index9ba3.html?page=home" title="<?= ucwords($config_menu->home) ?>">
									<?= ucwords($config_menu->home) ?>
								</a>
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li>
								<?= ucwords($config_menu->our_doctor) ?>
							</li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="To search type and hit enter..." placeholder="To search type and hit enter..." />
						</form>
					</div>
				</div>
				<div class="clearfix">
					<h3 class="box_header page_margin_top">
						<?= ucwords($config_menu->meet_the_team) ?>
					</h3>
					<ul class="tabs_navigation isotope_filters page_margin_top clearfix">
						<li>
							<a class="selected" href="#filter=*" title="All Departments">
								All Departments
							</a>
						</li>
						<?php foreach ($departments as $key => $value) { ?>
							<li>
								<a href="<?= base_url($trial_name . '/doctor/department/show/' . $value->id) ?>">
									<?= ucwords($value->name) ?>
								</a>
							</li>
						<?php } ?>
					</ul>
					<ul class="gallery">
						<?php foreach ($teams as $key => $value) { ?>
							<li class="gallery_box">
								<img src="<?= base_url('assets/images/team/' . $value->image1) ?>" alt="" />
								<div class="description">
									<h3><?= ucwords($value->name) ?></h3>
									<h5><?= ucwords($value->speciality) ?></h5>
								</div>
								<div class="item_details"><?= ucfirst($value->short_description) ?></div>
								<ul class="social_icons clearfix">
									<li><a class="social_icon facebook" href="<?= $value->facebook_url ?>" target="_blank">&nbsp;</a></li>
									<li><a class="social_icon googleplus" href="<?= $value->googleplus_url ?>" target="_blank">&nbsp;</a></li>
									<li><a class="social_icon mail" href="<?= $value->mail_url ?>" target="_blank">&nbsp;</a></li>
									<li><a class="social_icon forrst" href="<?= $value->forrst_url ?>" target="_blank">&nbsp;</a></li>
								</ul>
								<ul class="controls">
									<li><a href="<?= base_url($trial_name . '/team/show/' . $value->id) ?>" class="open_details"></a></li>
									<li><a href="<?= base_url('assets/images/team/' . $value->image1) ?>" rel="team" class="fancybox open_lightbox"></a></li>
								</ul>
							</li>
						<?php } ?>
					</ul>
					<ul class="pagination page_margin_top">
						<li class="selected">
							<a href="#" title="">
								1
							</a>
						</li>
						<li>
							<a href="#" title="">
								2
							</a>
						</li>
						<li>
							<a href="#" title="">
								3
							</a>
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