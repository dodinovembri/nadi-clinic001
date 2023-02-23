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
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Volkhov:400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>style/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>style/superfish.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>style/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>style/jquery.qtip.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>style/jquery-ui.custom.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>style/style.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>style/responsive.css" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>style/animations.css" />

	<link rel="shortcut icon" href="<?= base_url('assets/images/favicon/' . $config->favicon) ?>" />
</head>

<body>
	<div class="site_container">
		<div class="header_container">
			<div class="header clearfix">
				<div class="header_left">
					<a href="<?= base_url('/') ?>">
						<img src="<?= base_url('assets/images/' . $config->logo) ?>" alt="logo" />
						<span class="logo"><?= $config->logo_text ?></span>
					</a>
				</div>
				<ul class="sf-menu header_right">
					<li><a href="<?= base_url('/') ?>">HOME</a></li>
					<li><a href="<?= base_url('blog') ?>">BLOG</a>
					</li>
					<li class="submenu">
						<a href="#">PAGES</a>
						<ul>
							<li><a href="<?= base_url('about') ?>">About</a></li>
							<li><a href="<?= base_url('doctor') ?>">Our Doctors</a></li>
							<li><a href="<?= base_url('medical-care') ?>">Medical Care</a></li>
						</ul>
					</li>
					<li class="submenu wide">
						<a href="#">DEPARTMENTS</a>
						<ul>
							<?php foreach ($departments as $key => $value) { ?>
								<li><a href="<?= base_url('department/' . $value->name) ?>"><?= $value->name ?></a></li>
							<?php } ?>
						</ul>
					</li>
					<li><a href="<?= base_url('timetable') ?>">TIMETABLE</a></li>
					<li><a href="<?= base_url('gallery') ?>">GALLERY</a></li>
					<li><a href="<?= base_url('contact') ?>">CONTACT</a></li>
				</ul>
				<div class="mobile_menu">
					<select>
						<option value="<?= base_url('/') ?>">HOME</option>
						<option value="<?= base_url('blog') ?>">BLOG</option>
						<option value="#">PAGES</option>
						<option value="<?= base_url('about') ?>">- About</option>
						<option value="<?= base_url('doctor') ?>">- Our Doctors</option>
						<option value="<?= base_url('medical-care') ?>">- Medical Care</option>
						<option value="?page=departments">DEPARTMENTS</option>
						<?php foreach ($departments as $key => $value) { ?>
							<option value="<?= base_url('department/' . $value->name) ?>">- <?= $value->name ?></a></option>
						<?php } ?>
						<option value="<?= base_url('timetable') ?>">TIMETABLE</option>
						<option value="<?= base_url('gallery') ?>">GALLERY</option>
						<option value="<?= base_url('contact') ?>">CONTACT</option>
					</select>
				</div>
			</div>
		</div>
		<!-- slider -->
		<ul class="slider">
			<?php foreach ($sliders as $key => $value) { ?>
				<li style="background-image: url(<?= base_url('assets/images/slider/' . $value->image) ?>);">&nbsp;</li>
			<?php } ?>
		</ul>
		<div class="page relative noborder">
			<div class="slider_content_box clearfix">
				<?php foreach ($sliders as $key => $value) { ?>
					<div class="slider_content" <?php if ($key == 0) { ?> style="display: block;" <?php } ?>>
						<h1 class="title"><?= $value->title ?></h1>
						<h2 class="subtitle"><?= $value->subtitle ?></h2>
					</div>
				<?php } ?>
			</div>
			<!-- home box -->
			<ul class="home_box_container clearfix">
				<?php foreach ($slider_features as $key => $value) { ?>
					<li class="home_box light_blue animated_element <?php if ($key == 0) { ?> animation-fadeIn duration-500 <?php } ?> <?php if ($key == 1) { ?> animation-slideRight duration-800 delay-250 <?php } ?>  ">
						<h2><a href="#"><?= $value->title ?></a></h2>
						<div class="news clearfix">
							<p class="text"><?= $value->description ?></p><a class="more light icon_small_arrow margin_right_white" href="#" title="Read more">Read more</a>
						</div>
					</li>
				<?php } ?>
				<li class="home_box dark_blue animated_element animation-slideRight200 duration-800 delay-500">
					<h2><?= $config->title_opening_hours ?></h2>
					<ul class="items_list thin dark_blue opening_hours">
						<li class="clearfix">
							<span><?= $config->title_monday_friday_opening_hours ?></span>
							<div class="value"><?= $config->monday_friday_opening_hours ?></div>
						</li>
						<li class="clearfix">
							<span><?= $config->title_saturday_opening_hours ?></span>
							<div class="value"><?= $config->saturday_opening_hours ?></div>
						</li>
						<li class="clearfix">
							<span><?= $config->title_sunday_opening_hours ?></span>
							<div class="value"><?= $config->sunday_opening_hours ?></div>
						</li>
					</ul>
				</li>
			</ul>
			<div class="page_layout page_margin_top clearfix">
				<div class="page_left">
					<h3 class="box_header"><?= $config->latest_news_label ?></h3>
					<div class="columns clearfix">
						<ul class="blog column_left">
							<?php foreach ($blogs as $key => $value) { ?>
								<li class="post">
									<ul class="comment_box clearfix">
										<li class="date">
											<div class="value"><?= $value->date ?></div>
											<div class="arrow_date"></div>
										</li>
										<li class="comments_number">
											<a href="<?= base_url('blog/show/' . $value->id) ?>">2</a>
										</li>
									</ul>
									<div class="post_content">
										<a class="post_image" href="<?= base_url('blog/show/' . $value->id) ?>">
											<img src="<?= base_url('assets/images/blog/' . $value->image) ?>" alt="" />
										</a>
										<h2><a href="<?= base_url('blog/show/' . $value->id) ?>"><?= $value->title ?></a></h2>
										<p><?= $value->description ?></p>
										<div class="post_footer">
											<ul class="post_footer_details">
												<li>Posted in </li>
												<li><a href="#" title="General">General,</a></li>
												<li><a href="#" title="Dental clinic">Dental clinic</a></li>
											</ul>
										</div>
									</div>
								</li>
							<?php if($key == 1) break; } ?>
						</ul>
						<ul class="blog column_right">
							<?php foreach ($blogs as $key => $value) { if ($key <= 1) continue; ?>								
								<li class="post">
									<ul class="comment_box clearfix">
										<li class="date">
											<div class="value"><?= $value->date ?></div>
											<div class="arrow_date"></div>
										</li>
										<li class="comments_number">
											<a href="<?= base_url('blog/show/' . $value->id) ?>" title="5 comments">5</a>
										</li>
									</ul>
									<div class="post_content">
										<a class="post_image" href="<?= base_url('blog/show/' . $value->id) ?>">
											<img src="<?= base_url('assets/images/blog/' . $value->image) ?>" alt="" />
										</a>
										<h2>
											<a href="<?= base_url('blog/show/' . $value->id) ?>"><?= $value->title ?></a>
										</h2>
										<p>
											<?= $value->description ?>
										</p>
										<div class="post_footer">
											<ul class="post_footer_details">
												<li>Posted in</li>
												<li><a href="#" title="General">General,</a></li>
												<li><a href="#" title="Outpatient surgery">Outpatient surgery</a></li>
											</ul>
										</div>
									</div>
								</li>
							<?php if($key == 3) break; } ?>
						</ul>
					</div>
					<div class="show_all clearfix">
						<a class="more" href="indexf6f2.html?page=blog" title="Show all">
							Show all &rarr;
						</a>
					</div>
				</div>
				<div class="page_right">
					<div class="sidebar_box first">
						<h3 class="box_header"><?= $config->department_label ?></h3>
						<ul class="accordion">
							<?php foreach ($departments as $key => $value) { ?>
								<li>
									<div id="accordion-<?= $value->id ?>">
										<h3><?= $value->name ?></h3>
									</div>
									<div class="clearfix">
										<div class="item_content clearfix">
											<a class="thumb_image" href="#" title="Primary Health Care">
												<img src="<?= base_url('assets/images/department/' . $value->image) ?>" alt="" />
											</a>
											<p><?= $value->description ?></p>
										</div>
										<div class="item_footer clearfix">
											<a class="more blue icon_small_arrow margin_right_white" href="indexf608.html?page=timetable#primary-health-care" title="Timetable">Timetable</a>
											<a class="more blue icon_small_arrow margin_right_white" href="indexc6f4.html?page=departments#primary-health-care" title="Details">Details</a>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="sidebar_box">
						<h3 class="box_header"><?= $config->make_appointment_title ?></h3>
						<p class="info"><?= $config->make_appointment_description ?></p>
						<ul class="contact_data">
							<?php foreach ($appointment_types as $key => $value) { ?>
								<li class="clearfix">
									<span class="social_icon <?= $value->icon ?>"></span>
									<p class="value"><?= $value->description ?></p>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_container">
			<div class="footer">
				<ul class="footer_banner_box_container clearfix">
					<?php $duration = 500;
					$delay = 0;
					foreach ($footer_features as $key => $value) { ?>
						<li class="footer_banner_box super_light_blue animated_element animation-fadeIn duration-<?= $duration ?> delay-<?= $delay ?>">
							<h2><?= $value->title ?></h2>
							<p><a class="icon_small_arrow right_white" href="#"><?= $value->subtitle ?></a></p>
						</li>
					<?php $duration = $duration + 300;
						$delay = $delay + 250;
					} ?>
				</ul>
				<div class="footer_box_container clearfix">
					<div class="footer_box">
						<h3 class="box_header"><?= $config->name ?></h3>
						<p class="info"><?= $config->short_description ?></p>
						<ul class="footer_contact_info_container clearfix">
							<li class="footer_contact_info_row">
								<div class="footer_contact_info_left"><?= $config->name ?></div>
							</li>
							<li class="info"><?= $config->address ?></li>
						</ul>
						<ul class="social_icons clearfix">
							<?php foreach ($social_medias as $key => $value) { ?>
								<li><a class="social_icon <?= $value->icon ?>" href="<?= $value->link ?>" target="_blank">&nbsp;</a>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="footer_box">
						<div class="clearfix">
							<div class="header_left">
								<h3 class="box_header">
									Latest Posts
								</h3>
							</div>
							<div class="header_right">
								<a href="#" id="footer_recent_posts_prev" class="scrolling_list_control_left icon_small_arrow left_white"></a>
								<a href="#" id="footer_recent_posts_next" class="scrolling_list_control_right icon_small_arrow right_white"></a>
							</div>
						</div>
						<div class="scrolling_list_wrapper">
							<ul class="scrolling_list footer_recent_posts">
								<li class="icon_small_arrow right_white">
									<a href="indexb878.html?page=post">
										Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
									</a>
									<abbr title="29 May 2012" class="timeago">29 May 2012</abbr>
								</li>
								<li class="icon_small_arrow right_white">
									<a href="indexb878.html?page=post">
										Lorem ipsum dolor sit amat velum.
									</a>
									<abbr title="04 Apr 2012" class="timeago">04 Apr 2012</abbr>
								</li>
								<li class="icon_small_arrow right_white">
									<a href="indexb878.html?page=post">
										Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
									</a>
									<abbr title="02 Feb 2012" class="timeago">02 Feb 2012</abbr>
								</li>
								<li class="icon_small_arrow right_white">
									<a href="indexb878.html?page=post">
										Lorem ipsum dolor sit amat velum, consectetur adipiscing elit.
									</a>
									<abbr title="24 Jan 2011" class="timeago">24 Jan 2011</abbr>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer_box last">
						<div class="clearfix">
							<div class="header_left">
								<h3 class="box_header">
									Latest Tweets
								</h3>
							</div>
							<div class="header_right">
								<a href="#" id="latest_tweets_prev" class="scrolling_list_control_left icon_small_arrow left_white"></a>
								<a href="#" id="latest_tweets_next" class="scrolling_list_control_right icon_small_arrow right_white"></a>
							</div>
						</div>
						<div class="scrolling_list_wrapper">
							<ul class="scrolling_list latest_tweets">
								<li class="icon_small_arrow right_white">
									<p>We've released new version (5.1) of our #Cost #Calculator #WordPress plugin. Please check at #CodeCanyon… <a href="https://t.co/QVy8tmid8K" target="_blank">t.co/QVy8tmid8K</a><abbr title="2023-02-08T16:19:44+00:00" class="timeago">Wed Feb 08 16:19:44 +0000 2023</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>We've released new version (v4.7) of our #CleanMate #Cleaning Company #Maid #Gardening #WordPress Theme. Please che… <a href="https://t.co/iubZ4tZHRn" target="_blank">t.co/iubZ4tZHRn</a><abbr title="2023-02-03T12:30:39+00:00" class="timeago">Fri Feb 03 12:30:39 +0000 2023</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>We've released new version (v2.0) of our #Finpeak #Business #Finance #Consulting #HTML #Template. Please check at… <a href="https://t.co/pGwTniE7Fk" target="_blank">t.co/pGwTniE7Fk</a><abbr title="2023-02-02T13:30:16+00:00" class="timeago">Thu Feb 02 13:30:16 +0000 2023</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>We've released new version (v1.1) of our #Finpeak #Business #Finance #Consulting #WordPress Theme. Please check at… <a href="https://t.co/pdsqI6zDaK" target="_blank">t.co/pdsqI6zDaK</a><abbr title="2023-02-01T13:46:28+00:00" class="timeago">Wed Feb 01 13:46:28 +0000 2023</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>Please check our new WordPress Theme designed for an accountant, consulting advisor, an insurance broker or anyone… <a href="https://t.co/y2GU3uiwuT" target="_blank">t.co/y2GU3uiwuT</a><abbr title="2023-01-31T12:20:10+00:00" class="timeago">Tue Jan 31 12:20:10 +0000 2023</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>We've released new version (5.0) of our #Cost #Calculator #WordPress plugin. Please check at #CodeCanyon… <a href="https://t.co/Z3ptRvJ1o6" target="_blank">t.co/Z3ptRvJ1o6</a><abbr title="2023-01-19T15:14:35+00:00" class="timeago">Thu Jan 19 15:14:35 +0000 2023</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>We've released new version (v4.3) of our #Ajax #Multi #Upload #WP #Plugin. Please check at #CodeCanyon <a href="https://t.co/gcIWQaj7Im" target="_blank">t.co/gcIWQaj7Im</a><abbr title="2022-11-29T16:08:02+00:00" class="timeago">Tue Nov 29 16:08:02 +0000 2022</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>We've released new version (v5.8) of our Pressroom #News #Magazine #WordPress Theme. Please check at #ThemeForest <a href="https://t.co/VSiuakDJvI" target="_blank">t.co/VSiuakDJvI</a><abbr title="2022-10-25T10:46:03+00:00" class="timeago">Tue Oct 25 10:46:03 +0000 2022</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>We've released new version (v13.8) of our MediCenter #Health #Medical #Clinic #WordPress Theme. Please check at… <a href="https://t.co/xPh74vxK99" target="_blank">t.co/xPh74vxK99</a><abbr title="2022-10-25T10:44:01+00:00" class="timeago">Tue Oct 25 10:44:01 +0000 2022</abbr></p>
								</li>
								<li class="icon_small_arrow right_white">
									<p>We've released new version (v14.7) of our GymBase #Gym #Fitness #WordPress Theme. Please check at #ThemeForest <a href="https://t.co/8mEwDr0P7M" target="_blank">t.co/8mEwDr0P7M</a><abbr title="2022-10-24T13:40:19+00:00" class="timeago">Mon Oct 24 13:40:19 +0000 2022</abbr></p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="copyright_area clearfix">
					<div class="copyright_left">
						<?= $config->copyright ?>
					</div>
					<div class="copyright_right">
						<a class="scroll_top icon_small_arrow top_white" href="#top" title="Scroll to top">Top</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--js-->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.ba-bbq.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery-ui-1.12.1.custom.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.easing.1.4.1.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.sliderControl.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.timeago.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.hint.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/jquery.blockUI.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/frontend/') ?>layout_picker/layout_picker.css" />
	<script type="text/javascript" src="<?= base_url('assets/frontend/') ?>layout_picker/layout_picker.js"></script>
	<div class="layout_picker">
		<div class="layout_picker_icon">&nbsp;</div>
		<div class="layout_picker_content">
			<ul>
				<li class="layout_picker_header">LAYOUT</li>
				<li><a href="#" id="layout_picker_fw" class="selected">Wide</a></li>
				<li><a href="#" id="layout_picker_bx">Boxed</a></li>
			</ul>
		</div>
	</div>
</body>

</html>