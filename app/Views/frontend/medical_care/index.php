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
						<h1 class="page_title"><?= ucwords($config_menu->medical_care) ?></h1>
						<ul class="bread_crumb">
							<li>
								<a href="<?= base_url('/') ?>" title="<?= ucwords($config_menu->home) ?>">
									<?= ucwords($config_menu->home) ?>
								</a>
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li>
								<?= ucwords($config_menu->medical_care) ?>
							</li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="<?= ucfirst($config_menu->search_placeholder) ?>" placeholder="<?= ucfirst($config_menu->search_placeholder) ?>" />
						</form>
					</div>
				</div>
				<div class="clearfix">
					<h3 class="box_header page_margin_top">
						<?= ucwords($config_menu->medical_care) ?>
					</h3>
					<div class="columns clearfix no_width page_margin_top">
						<ul class="column_left">
							<?php foreach ($medical_cares as $key => $value) { ?>
								<li class="item_content clearfix">
									<a class="features_image" href="#" title="">
										<img src="<?= base_url('assets/images/medical_care/' . $value->icon) ?>" alt="" class="animated_element animation-scale" />
									</a>
									<div class="text">
										<?= ucfirst($value->description) ?>
										<div class="item_footer clearfix">
											<a title="<?= ucfirst($config_menu->read_more) ?>" href="#" class="more">
												<?= ucfirst($config_menu->read_more) ?> &rarr;
											</a>
										</div>
									</div>
								</li>
							<?php if ($key == $medical_care_count / 2 - 1) break;
							} ?>
						</ul>
						<ul class="column_right">
							<?php foreach ($medical_cares as $key => $value) {
								if ($key < 2) continue ?>
								<li class="item_content clearfix">
									<a class="features_image" href="#" title="">
										<img src="<?= base_url('assets/images/medical_care/' . $value->icon) ?>" alt="" class="animated_element animation-scale" />
									</a>
									<div class="text">
										<?= ucfirst($value->description) ?>
										<div class="item_footer clearfix">
											<a title="<?= ucfirst($config_menu->read_more) ?>" href="#" class="more">
												<?= ucfirst($config_menu->read_more) ?> &rarr;
											</a>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="clearfix page_margin_top_section">
						<div class="header_left">
							<h3 class="box_header">
								<?= ucwords($config_menu->our_clinic) ?>
							</h3>
						</div>
						<div class="header_right">
							<a href="#" id="our_clinic_prev" class="scrolling_list_control_left icon_small_arrow left_black"></a>
							<a href="#" id="our_clinic_next" class="scrolling_list_control_right icon_small_arrow right_black"></a>
						</div>
					</div>
					<ul class="gallery horizontal_carousel our_clinic">
						<?php foreach ($clinics as $key => $value) { ?>
							<li class="gallery_box">
								<img src="<?= base_url('assets/images/clinic/' . $value->image) ?>" alt="" />
								<div class="description">
									<h3>
										<?= ucfirst($value->title) ?>
									</h3>
									<h5>
										<?= ucfirst($value->subtitle) ?>
									</h5>
								</div>
								<ul class="controls">
									<li>
										<a href="<?= base_url('assets/images/clinic/' . $value->image) ?>" rel="our_clinic" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
						<?php } ?>
					</ul>
					<div class="clearfix page_margin_top_section">
						<div class="header_left">
							<h3 class="box_header">
								<?= ucwords($config_menu->testimonial) ?>
							</h3>
						</div>
						<div class="header_right">
							<a href="#" id="testimonials_prev" class="scrolling_list_control_left icon_small_arrow left_black"></a>
							<a href="#" id="testimonials_next" class="scrolling_list_control_right icon_small_arrow right_black"></a>
						</div>
					</div>
					<ul class="columns full_width horizontal_carousel testimonials">
						<?php foreach ($testimonials as $key => $value) { ?>
							<li class="column_left">
								<h3 class="sentence">
									<?= ucfirst($value->description) ?>
								</h3>
								<span class="sentence_author">&#8212;&nbsp;&nbsp;<?= ucfirst($value->tester) ?></span>
							</li>
						<?php } ?>
					</ul>
					<h3 class="box_header page_margin_top_section">
						<?= ucwords($config_menu->laboratory) ?>
					</h3>
					<div class="columns columns_3 page_margin_top clearfix">
						<?php $each = round($laboratory_feature_count / 3); ?>
						<ul class="column">
							<?php foreach ($laboratory_features as $key => $value) { ?>
								<li class="item_content clearfix">
									<a class="features_image" href="#" title="">
										<img src="<?= base_url('assets/images/laboratory_feature/' . $value->icon) ?>" alt="" class="animated_element animation-scale" />
									</a>
									<div class="text">
										<?= ucfirst($value->description) ?>
									</div>
								</li>
							<?php if ($key+1 == $each) break;
							} ?>
						</ul>
						<ul class="column">
							<?php foreach ($laboratory_features as $key => $value) {
								if ($key < $each) continue; ?>
								<li class="item_content clearfix">
									<a class="features_image" href="#" title="">
										<img src="<?= base_url('assets/images/laboratory_feature/' . $value->icon) ?>" alt="" class="animated_element animation-scale" />
									</a>
									<div class="text">
										<?= ucfirst($value->description) ?>
									</div>
								</li>
							<?php if ($key+1 == $each*2) break;
							} ?>
						</ul>
						<ul class="column">
							<?php foreach ($laboratory_features as $key => $value) {
								if ($key < $each*2) continue; ?>
								<li class="item_content clearfix">
									<a class="features_image" href="#" title="">
										<img src="<?= base_url('assets/images/laboratory_feature/' . $value->icon) ?>" alt="" class="animated_element animation-scale" />
									</a>
									<div class="text">
										<?= ucfirst($value->description) ?>
									</div>
								</li>
							<?php if ($key+1 == $each*3) break;
							} ?>
						</ul>
					</div>
					<div class="announcement page_margin_top_section clearfix">
						<ul class="columns no_width">
							<li class="column_left">
								<h1><?= ucfirst($config->make_appointment_text_title) ?></h1>
								<p><?= ucfirst($config->make_appointment_text_subtitle) ?></p>
							</li>
							<li class="column_right">
								<div class="vertical_align">
									<div class="vertical_align_cell">
										<a title="<?= ucfirst($config_menu->make_an_appointment) ?>" href="#" class="more blue medium animated_element animation-slideLeft"><?= ucfirst($config_menu->make_an_appointment) ?></a>
									</div>
								</div>
							</li>
						</ul>
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