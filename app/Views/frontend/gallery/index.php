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
						<h1 class="page_title"><?= ucwords($config_menu->gallery) ?></h1>
						<ul class="bread_crumb">
							<li>
								<a href="<?= base_url('/' . $trial_name) ?>" title="<?= ucwords($config_menu->home) ?>">
									<?= ucwords($config_menu->home) ?>
								</a>
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li>
								<?= ucwords($config_menu->gallery) ?>
							</li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="<?= ucfirst($config_menu->search_placeholder) ?>" placeholder="<?= ucfirst($config_menu->search_placeholder) ?>" />
						</form>
					</div>
				</div>
				<div class="clearfix page_margin_top">
					<ul class="gallery_item_details_list clearfix page_margin_top">
						<?php foreach ($department_galleries as $key => $value) { ?>
							<li id="gallery-details-<?= $value->id ?>" class="gallery_item_details clearfix">
								<div class="columns no_width">
									<div class="column_left">
										<div class="gallery_box">
											<ul class="image_carousel">
												<li class="current_slide">
													<img src="<?= base_url('assets/images/department_gallery/' . $value->image) ?>" alt="" />
													<ul class="controls">
														<li>
															<a href="<?= base_url('assets/images/department_gallery/' . $value->image) ?>" rel="gallery_item_1" class="fancybox open_lightbox"></a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
									<div class="column_right">
										<div class="details_box">
											<h2>
												<?= ucfirst($value->title) ?>
											</h2>
											<p>
												<?= ucfirst($value->description) ?>
											</p>
											<h3 class="box_header margin_top_10">
												<?= ucfirst($config_menu->did_you_know) ?>
											</h3>
											<h3 class="sentence">
												<?= ucfirst($value->short_description) ?>
											</h3>
											<ul class="controls page_margin_top">
												<li>
													<a href="#gallery-details-close" class="close"></a>
												</li>
												<li>
													<a href="#" class="prev icon_small_arrow left_black"></a>
												</li>
												<li>
													<a href="#" class="next icon_small_arrow right_black"></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						<?php } ?>
					</ul>
					<ul class="tabs_navigation isotope_filters page_margin_top clearfix">
						<li>
							<a class="selected" href="#filter=*" title="<?= ucwords($config_menu->all_department) ?>">
								<?= ucwords($config_menu->all_department) ?>
							</a>
						</li>
						<?php foreach ($departments as $key => $value) { ?>
							<li>
								<a href="#filter=.<?= $value->id ?>" title="<?= ucwords($value->name) ?>">
									<?= ucwords($value->name) ?>
								</a>
							</li>
						<?php } ?>
					</ul>
					<ul class="gallery gallery_4_columns">
						<?php foreach ($department_galleries as $key => $value) { ?>
							<li class="<?= $value->department_id ?> gallery_box" id="gallery-item-1">
								<img src="<?= base_url('assets/images/department_gallery/' . $value->image) ?>" alt="" />
								<div class="description">
									<h3>
										<?= ucwords($value->title) ?>
									</h3>
									<h5>
										<?= ucwords($value->subtitle) ?>
									</h5>
								</div>
								<ul class="controls">
									<li>
										<a href="#gallery-details-<?= $value->id ?>" class="open_details"></a>
									</li>
									<li>
										<a href="<?= base_url('assets/images/department_gallery/' . $value->image) ?>" rel="gallery_item_1_main" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
						<?php } ?>
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