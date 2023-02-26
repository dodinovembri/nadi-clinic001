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
						<h1 class="page_title"><?= ucwords($config_menu->about) ?></h1>
						<ul class="bread_crumb">
							<li><a href="<?= base_url('/') ?>" title="<?= ucwords($config_menu->home) ?>"><?= ucwords($config_menu->home) ?></a>
							</li>
							<li class="separator icon_small_arrow right_gray">&nbsp;</li>
							<li><?= ucwords($config_menu->about) ?></li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="<?= ucfirst($config_menu->search_placeholder) ?>" placeholder="<?= ucfirst($config_menu->search_placeholder) ?>" />
						</form>
					</div>
				</div>
				<div class="clearfix">
					<div class="gallery_item_details_list clearfix page_margin_top">
						<div class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<ul class="image_carousel">
											<?php for ($i = 1; $i <= 6; $i++) {
												$image = "image" . (string)$i;
												if ($about->$image == null) continue; ?>
												<li class="current_slide">
													<img src="<?= base_url('assets/images/about/' . $about->$image) ?>" alt="" />
													<ul class="controls">
														<li><a href="<?= base_url('assets/images/about/' . $about->$image) ?>" rel="gallery" class="fancybox open_lightbox"></a></li>
													</ul>
												</li>
											<?php } ?>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2><?= ucfirst($about->title) ?></h2>
										<p><?= $about->description ?></p>
										<h3 class="box_header margin_top_10">
											<?= ucwords($config_menu->our_motto) ?>
										</h3>
										<h3 class="sentence animated_element animation-slideLeft50">
											<?= ucfirst($about->motto) ?>
										</h3>
										<span class="sentence_author animated_element animation-slideLeft50 delay-600">&#8212;&nbsp;&nbsp;<?= ucfirst($about->motto_by) ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="columns page_margin_top full_width clearfix">
						<div class="column_left">
							<h3 class="box_header"><?= ucwords($config_menu->our_feature) ?></h3>
							<h3 class="sentence"><?= ucfirst($about->our_feature) ?></h3>
							<div class="clearfix">
								<span class="sentence_author">&#8212;&nbsp;&nbsp;<?= ucfirst($about->our_feature_by) ?></span>
							</div>
							<ul class="accordion medium page_margin_top clearfix">
								<?php foreach ($faqs as $key => $value) { ?>
									<li>
										<div id="accordion-cras-rutrum-<?= $value->id ?>">
											<h3><?= $value->question ?></h3>
										</div>
										<ul class="clearfix">
											<li class="item_content clearfix">
												<a class="features_image" href="#" title="">
													<img src="<?= base_url('assets/images/faq/' . $value->image) ?>" alt="" class="animated_element animation-scale" />
												</a>
												<div class="text">
													<?= ucfirst($value->answer) ?>
													<div class="item_footer clearfix">
														<a title="<?= ucfirst($config_menu->read_more) ?>" href="#" class="more">
															<?= ucfirst($config_menu->read_more) ?> &rarr;
														</a>
													</div>
												</div>
											</li>
										</ul>
									</li>
								<?php } ?>
							</ul>
						</div>
						<div class="column_right">
							<h3 class="box_header">
								<?= ucwords($config_menu->why_choose_us) ?>
							</h3>
							<ul class="page_margin_top clearfix">
								<?php foreach ($benefits as $key => $value) { ?>
									<li class="item_content clearfix">
										<a class="thumb_image" href="#" title="">
											<img src="<?= base_url('assets/images/benefit/' . $value->image) ?>" alt="" />
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
					</div>
					<h3 class="box_header page_margin_top_section">
						<?= ucwords($config_menu->meet_the_team) ?>
					</h3>
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
									<li><a href="<?= base_url('team/show/'. $value->id) ?>" class="open_details"></a></li>
									<li><a href="<?= base_url('assets/images/team/' . $value->image1) ?>" rel="team" class="fancybox open_lightbox"></a></li>
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