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
					<li class="home_box <?php if ($key == 0) { ?> light_blue animated_element animation-fadeIn duration-500 <?php } ?> <?php if ($key == 1) { ?> blue animated_element animation-slideRight duration-800 delay-250 <?php } ?>  ">
						<h2><a href="#"><?= $value->title ?></a></h2>
						<div class="news clearfix">
							<p class="text"><?= $value->description ?></p><a class="more light icon_small_arrow margin_right_white" href="#" title="<?= $config_menu->read_more ?>"><?= $config_menu->read_more ?></a>
						</div>
					</li>
				<?php } ?>
				<li class="home_box dark_blue animated_element animation-slideRight200 duration-800 delay-500">
					<h2><?= ucwords($config_menu->opening_hour) ?></h2>
					<ul class="items_list thin dark_blue opening_hours">
						<li class="clearfix">
							<span><?= ucwords($config_menu->opening_hour_monday_to_friday) ?></span>
							<div class="value"><?= $config->monday_friday_opening_hours ?></div>
						</li>
						<li class="clearfix">
							<span><?= ucwords($config_menu->opening_hour_saturday) ?></span>
							<div class="value"><?= $config->saturday_opening_hours ?></div>
						</li>
						<li class="clearfix">
							<span><?= ucwords($config_menu->opening_hour_sunday) ?></span>
							<div class="value"><?= $config->sunday_opening_hours ?></div>
						</li>
					</ul>
				</li>
			</ul>
			<div class="page_layout page_margin_top clearfix">
				<div class="page_left">
					<h3 class="box_header"><?= ucwords($config_menu->latest_news) ?></h3>
					<div class="columns clearfix">
						<ul class="blog column_left">
							<?php foreach ($blogs as $key => $value) { ?>
								<li class="post">
									<ul class="comment_box clearfix">
										<li class="date">
											<div class="value"><?= $value->date ?></div>
											<div class="arrow_date"></div>
										</li>
										<!-- <li class="comments_number">
											<a href="<?= base_url('blog/show/' . $value->id) ?>" title="5 comments">5</a>
										</li> -->
									</ul>
									<div class="post_content">
										<a class="post_image" href="<?= base_url('blog/show/' . $value->id) ?>">
											<img src="<?= base_url('assets/images/blog/' . $value->image) ?>" alt="" />
										</a>
										<h2>
											<a href="<?= base_url('blog/show/' . $value->id) ?>"><?= $value->title ?></a>
										</h2>
										<p>
											<?= substr($value->description, 0, 200) ?>...
										</p>
										<div class="post_footer">
											<ul class="post_footer_details">
												<li><?= ucwords($config_menu->posted_in) ?></li>
												<li><a href="#"><?= $value->category_name ?></a></li>
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
										<!-- <li class="comments_number">
											<a href="<?= base_url('blog/show/' . $value->id) ?>" title="5 comments">5</a>
										</li> -->
									</ul>
									<div class="post_content">
										<a class="post_image" href="<?= base_url('blog/show/' . $value->id) ?>">
											<img src="<?= base_url('assets/images/blog/' . $value->image) ?>" alt="" />
										</a>
										<h2>
											<a href="<?= base_url('blog/show/' . $value->id) ?>"><?= $value->title ?></a>
										</h2>
										<p>
											<?= substr($value->description, 0, 200) ?>...
										</p>
										<div class="post_footer">
											<ul class="post_footer_details">
												<li><?= ucwords($config_menu->posted_in) ?></li>
												<li><a href="#"><?= $value->category_name ?></a></li>
											</ul>
										</div>
									</div>
								</li>
							<?php if($key == 3) break; } ?>
						</ul>
					</div>
					<div class="show_all clearfix">
						<a class="more" href="#"><?= ucwords($config_menu->show_all) ?> &rarr;</a>
					</div>
				</div>
				<div class="page_right">
					<div class="sidebar_box first">
						<h3 class="box_header"><?= ucwords($config_menu->department) ?></h3>
						<ul class="accordion">
							<?php foreach ($departments as $key => $value) { ?>
								<li>
									<div id="accordion-<?= $value->id ?>">
										<h3><?= $value->name ?></h3>
									</div>
									<div class="clearfix">
										<div class="item_content clearfix">
											<a class="thumb_image" href="#">
												<img src="<?= base_url('assets/images/department/' . $value->image) ?>" alt="" />
											</a>
											<p><?= $value->description ?></p>
										</div>
										<div class="item_footer clearfix">
											<a class="more blue icon_small_arrow margin_right_white" href="<?= base_url('timetable/department/show/' .$value->id) ?>"><?= ucwords($config_menu->timetable) ?></a>
											<a class="more blue icon_small_arrow margin_right_white" href="<?= base_url('department/show/' .$value->id) ?>"><?= ucwords($config_menu->detail) ?></a>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="sidebar_box">
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