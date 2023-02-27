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
						<h1 class="page_title">Gallery 4 Columns</h1>
						<ul class="bread_crumb">
							<li>
								<a href="index9ba3.html?page=home" title="Home">
									Home
								</a>
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li>
								Gallery 4 Columns
							</li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="To search type and hit enter..." placeholder="To search type and hit enter..." />
						</form>
					</div>
				</div>
				<div class="clearfix page_margin_top">
					<ul class="gallery_item_details_list clearfix page_margin_top">
						<li id="gallery-details-1" class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<ul class="image_carousel">
											<li class="current_slide">
												<img src="images/samples/480x300/image_03.jpg" alt="" />
												<ul class="controls">
													<li>
														<a href="images/samples/image_03.jpg" rel="gallery_item_1" class="fancybox open_lightbox"></a>
													</li>
												</ul>
											</li>
											<li>
												<img src="images/samples/480x300/image_02.jpg" alt="" />
												<ul class="controls">
													<li>
														<a href="https://www.youtube.com/embed/AivyFZXT2ek" class="fancybox-video open_video_lightbox"></a>
													</li>
												</ul>
											</li>
											<li>
												<img src="images/samples/480x300/image_04.jpg" alt="" />
												<ul class="controls">
													<li>
														<a href="images/samples/image_04.jpg" rel="gallery_item_1" class="fancybox open_lightbox"></a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2>
											Lorem ipsum dolor sit amet
										</h2>
										<p>
											Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor.
										</p>
										<h3 class="box_header margin_top_10">
											Did you know that?
										</h3>
										<h3 class="sentence">
											Scientists estimate that laughing 100 times is equivalent to a 10-minute workout on a rowing machine.
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
						<li id="gallery-details-2" class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<ul class="image_carousel">
											<li class="current_slide">
												<img src="images/samples/480x300/image_01.jpg" alt="" />
												<ul class="controls">
													<li>
														<a href="images/samples/image_01.jpg" rel="gallery_item_2" class="fancybox open_lightbox"></a>
													</li>
												</ul>
											</li>
											<li>
												<img src="images/samples/480x300/image_05.jpg" alt="" />
												<ul class="controls">
													<li>
														<a href="https://player.vimeo.com/video/56755711" class="fancybox-video open_video_lightbox"></a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2>
											Lorem ipsum dolor sit amet 2
										</h2>
										<p>
											Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor.
										</p>
										<h3 class="box_header margin_top_10">
											Did you know that?
										</h3>
										<h3 class="sentence">
											Quick naps not only improve your alertness, but they also help in decision making, creativity and sensory perception.
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
						<li id="gallery-details-3" class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<img src="images/samples/480x300/image_02.jpg" alt="" />
										<ul class="controls">
											<li>
												<a href="https://www.youtube.com/embed/AivyFZXT2ek" rel="gallery_item_3" class="fancybox-video open_video_lightbox"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2>
											Lorem ipsum dolor sit amet 3
										</h2>
										<p>
											Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor.
										</p>
										<h3 class="box_header margin_top_10">
											Did you know that?
										</h3>
										<h3 class="sentence">
											Scientists estimate that laughing 100 times is equivalent to a 10-minute workout on a rowing machine.
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
						<li id="gallery-details-4" class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<img src="images/samples/480x300/image_04.jpg" alt="" />
										<ul class="controls">
											<li>
												<a href="https://quanticalabs.com/" rel="gallery_item_4" class="fancybox-iframe open_iframe_lightbox"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2>
											Lorem ipsum dolor sit amet 4
										</h2>
										<p>
											Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor.
										</p>
										<h3 class="box_header margin_top_10">
											Did you know that?
										</h3>
										<h3 class="sentence">
											Scientists estimate that laughing 100 times is equivalent to a 10-minute workout on a rowing machine.
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
						<li id="gallery-details-5" class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<img src="images/samples/480x300/image_03.jpg" alt="" />
										<ul class="controls">
											<li>
												<a href="https://player.vimeo.com/video/56755711" class="fancybox-video open_video_lightbox"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2>
											Lorem ipsum dolor sit amet 5
										</h2>
										<p>
											Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor.
										</p>
										<h3 class="box_header margin_top_10">
											Did you know that?
										</h3>
										<h3 class="sentence">
											Quick naps not only improve your alertness, but they also help in decision making, creativity and sensory perception.
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
						<li id="gallery-details-6" class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<img src="images/samples/480x300/image_01.jpg" alt="" />
										<ul class="controls">
											<li>
												<a href="images/samples/image_01.jpg" rel="gallery_item_6" class="fancybox open_lightbox"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2>
											Lorem ipsum dolor sit amet 6
										</h2>
										<p>
											Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor.
										</p>
										<h3 class="box_header margin_top_10">
											Did you know that?
										</h3>
										<h3 class="sentence">
											Scientists estimate that laughing 100 times is equivalent to a 10-minute workout on a rowing machine.
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
						<li id="gallery-details-7" class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<img src="images/samples/480x300/image_02.jpg" alt="" />
										<ul class="controls">
											<li>
												<a href="images/samples/image_02.jpg" rel="gallery_item_7" class="fancybox open_lightbox"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2>
											Lorem ipsum dolor sit amet 7
										</h2>
										<p>
											Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor.
										</p>
										<h3 class="box_header margin_top_10">
											Did you know that?
										</h3>
										<h3 class="sentence">
											An average heart beats 100,000 times a day, pumping some 2,000 gallons of blood through its chambers. Over a 70-year life span, that adds up to more than 2.5 billion heartbeats.
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
						<li id="gallery-details-8" class="gallery_item_details clearfix">
							<div class="columns no_width">
								<div class="column_left">
									<div class="gallery_box">
										<img src="images/samples/480x300/image_04.jpg" alt="" />
										<ul class="controls">
											<li>
												<a href="images/samples/image_04.jpg" rel="gallery_item_8" class="fancybox open_lightbox"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="column_right">
									<div class="details_box">
										<h2>
											Lorem ipsum dolor sit amet 8
										</h2>
										<p>
											Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor.
										</p>
										<h3 class="box_header margin_top_10">
											Did you know that?
										</h3>
										<h3 class="sentence">
											Scientists estimate that laughing 100 times is equivalent to a 10-minute workout on a rowing machine.
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
					</ul>
					<ul class="tabs_navigation isotope_filters page_margin_top clearfix">
						<li>
							<a class="selected" href="#filter=*" title="All Departments">
								All Departments
							</a>
						</li>
						<li>
							<a href="#filter=.primary-health-care" title="Primary Health Care">
								Primary Health Care
							</a>
						</li>
						<li>
							<a href="#filter=.pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic
							</a>
						</li>
						<li>
							<a href="#filter=.outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery
							</a>
						</li>
						<li>
							<a href="#filter=.cardiac-clinic" title="Cardiac Clinic">
								Cardiac Clinic
							</a>
						</li>
					</ul>
					<ul class="gallery gallery_4_columns">
						<li class="pediatric-clinic gallery_box" id="gallery-item-1">
							<img src="images/samples/480x300/image_03.jpg" alt="" />
							<div class="description">
								<h3>
									Lorem ipsum dolor sit amet
								</h3>
								<h5>
									Primary health care clinic
								</h5>
							</div>
							<ul class="controls">
								<li>
									<a href="#gallery-details-1" class="open_details"></a>
								</li>
								<li>
									<a href="images/samples/image_03.jpg" rel="gallery_item_1_main" class="fancybox open_lightbox"></a>
								</li>
							</ul>
						</li>
						<li class="primary-health-care gallery_box" id="gallery-item-2">
							<img src="images/samples/480x300/image_01.jpg" alt="" />
							<div class="description">
								<h3>
									Lorem ipsum dolor sit amet 2
								</h3>
								<h5>
									Primary health care clinic
								</h5>
							</div>
							<ul class="controls">
								<li>
									<a href="#gallery-details-2" class="open_details"></a>
								</li>
								<li>
									<a href="images/samples/image_01.jpg" rel="gallery_item_2_main" class="fancybox open_lightbox"></a>
								</li>
							</ul>
						</li>
						<li class="cardiac-clinic gallery_box" id="gallery-item-3">
							<img src="images/samples/480x300/image_02.jpg" alt="" />
							<div class="description">
								<h3>
									Lorem ipsum dolor sit amet 3
								</h3>
								<h5>
									Primary health care clinic
								</h5>
							</div>
							<ul class="controls">
								<li>
									<a href="#gallery-details-3" class="open_details"></a>
								</li>
								<li>
									<a href="https://www.youtube.com/embed/AivyFZXT2ek" rel="gallery_item_3_main" class="fancybox-video open_video_lightbox"></a>
								</li>
							</ul>
						</li>
						<li class="pediatric-clinic gallery_box" id="gallery-item-4">
							<img src="images/samples/480x300/image_04.jpg" alt="" />
							<div class="description">
								<h3>
									Lorem ipsum dolor sit amet 4
								</h3>
								<h5>
									Primary health care clinic
								</h5>
							</div>
							<ul class="controls">
								<li>
									<a href="#gallery-details-4" class="open_details"></a>
								</li>
								<li>
									<a href="https://quanticalabs.com/" rel="gallery_item_4_main" class="fancybox-iframe open_iframe_lightbox"></a>
								</li>
							</ul>
						</li>
						<li class="cardiac-clinic gallery_box" id="gallery-item-5">
							<img src="images/samples/480x300/image_03.jpg" alt="" />
							<div class="description">
								<h3>
									Lorem ipsum dolor sit amet 5
								</h3>
								<h5>
									Primary health care clinic
								</h5>
							</div>
							<ul class="controls">
								<li>
									<a href="#gallery-details-5" class="open_details"></a>
								</li>
								<li>
									<a href="https://player.vimeo.com/video/56755711" class="fancybox-video open_video_lightbox"></a>
								</li>
							</ul>
						</li>
						<li class="pediatric-clinic gallery_box" id="gallery-item-6">
							<img src="images/samples/480x300/image_01.jpg" alt="" />
							<div class="description">
								<h3>
									Lorem ipsum dolor sit amet 6
								</h3>
								<h5>
									Primary health care clinic
								</h5>
							</div>
							<ul class="controls">
								<li>
									<a href="#gallery-details-6" class="open_details"></a>
								</li>
								<li>
									<a href="images/samples/image_01.jpg" rel="gallery_item_6_main" class="fancybox open_lightbox"></a>
								</li>
							</ul>
						</li>
						<li class="primary-health-care gallery_box" id="gallery-item-7">
							<img src="images/samples/480x300/image_02.jpg" alt="" />
							<div class="description">
								<h3>
									Lorem ipsum dolor sit amet 7
								</h3>
								<h5>
									Primary health care clinic
								</h5>
							</div>
							<ul class="controls">
								<li>
									<a href="#gallery-details-7" class="open_details"></a>
								</li>
								<li>
									<a href="images/samples/image_02.jpg" rel="gallery_item_7_main" class="fancybox open_lightbox"></a>
								</li>
							</ul>
						</li>
						<li class="outpatient-surgery gallery_box" id="gallery-item-8">
							<img src="images/samples/480x300/image_04.jpg" alt="" />
							<div class="description">
								<h3>
									Lorem ipsum dolor sit amet 8
								</h3>
								<h5>
									Primary health care clinic
								</h5>
							</div>
							<ul class="controls">
								<li>
									<a href="#gallery-details-8" class="open_details"></a>
								</li>
								<li>
									<a href="images/samples/image_04.jpg" rel="gallery_item_8_main" class="fancybox open_lightbox"></a>
								</li>
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