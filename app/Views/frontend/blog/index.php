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
			<a title="SELECT THIS TEMPLATE" href="https://nadi-app.com/get-started/<?= $config->app_id ?>" class="more blue medium home_box_container clearfix" style="position:fixed; background-color: red; margin-top: -8px; z-index: 1;">SELECT THIS TEMPLATE
			</a>
			<div class="page_layout page_margin_top clearfix">
				<div class="page_header clearfix">
					<div class="page_header_left">
						<h1 class="page_title"><?= ucwords($config_menu->blog) ?></h1>
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
								<?= ucwords($config_menu->blog) ?>
							</li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="<?= ucfirst($config_menu->search_placeholder) ?>" placeholder="<?= ucfirst($config_menu->search_placeholder) ?>" />
						</form>
					</div>
				</div>
				<div class="page_left">
					<ul class="blog clearfix">
						<?php foreach ($blogs as $key => $value) { ?>
							<li class="post">
								<ul class="comment_box">
									<li class="date clearfix animated_element animation-slideRight">
										<div class="value"><?= $value->date ?></div>
										<div class="arrow_date"></div>
									</li>
									<!-- <li class="comments_number animated_element animation-slideUp duration-300 delay-500">
										<a href="indexb878.html?page=post#comments_list" title="2 comments">
											2 comments
										</a>
									</li> -->
								</ul>
								<div class="post_content">
									<a class="post_image" href="<?= base_url('blog/show/' . $value->id) ?>" title="<?= $value->title ?>">
										<img src="<?= base_url('assets/images/blog/' . $value->image) ?>" alt="" />
									</a>
									<h2>
										<a href="<?= base_url('blog/show/' . $value->id) ?>" title="<?= $value->title ?>">
											<?= $value->title ?>
										</a>
									</h2>
									<p>
										<?= substr($value->description, 0, 400) ?>...
									</p>
									<a title="<?= $config_menu->read_more ?>" href="<?= base_url('blog/show/' . $value->id) ?>" class="more">
										<?= ucwords($config_menu->read_more) ?> &rarr;
									</a>
									<div class="post_footer clearfix">
										<ul class="post_footer_details">
											<li><?= ucwords($config_menu->posted_in) ?></li>
											<li><a href="#"><?= $value->category_name ?></a></li>
										</ul>
										<ul class="post_footer_details">
											<li><?= ucwords($config_menu->posted_by) ?></li>
											<li>
												<a href="#" title="John Doe">
													John Doe
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
						<?php } ?>
					</ul>
					<!-- <ul class="pagination page_margin_top">
						<li class="selected"><a href="#" title="">1</a></li>
						<li><a href="#" title="">2</a></li>
						<li><a href="#" title="">3</a></li>
					</ul> -->
				</div>
				<div class="page_right">
					<!-- categories -->
					<h3 class="box_header margin">
						<?= ucwords($config_menu->category) ?>
					</h3>
					<div class="sidebar_box first">
						<ul class="categories clearfix page_margin_top">
							<?php foreach ($blog_categories as $key => $value) { ?>
								<li><a href="<?= base_url('blog_category/show/' . $value->id) ?>" title="<?= ucwords($value->name) ?>"><?= ucwords($value->name) ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<!-- most commented -->
					<!-- <div class="sidebar_box">
						<div class="clearfix">
							<div class="header_left">
								<h3 class="box_header">
									<?= ucwords($config_menu->most_commented) ?>
								</h3>
							</div>
							<div class="header_right">
								<a href="#" id="most_commented_prev" class="scrolling_list_control_left icon_small_arrow left_black"></a>
								<a href="#" id="most_commented_next" class="scrolling_list_control_right icon_small_arrow right_black"></a>
							</div>
						</div>
						<div class="scrolling_list_wrapper">
							<ul class="scrolling_list most_commented">
								<li class="icon_small_arrow right_black">
									<a href="indexb878.html?page=post" class="clearfix">
										<span class="left">
											Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
										</span>
										<span class="number">
											18
										</span>
									</a>
									<abbr title="29 May 2012" class="timeago">29 May 2012</abbr>
								</li>
								<li class="icon_small_arrow right_black">
									<a href="indexb878.html?page=post" class="clearfix">
										<span class="left">
											Lorem ipsum dolor sit amat velum.
										</span>
										<span class="number">
											16
										</span>
									</a>
									<abbr title="04 Apr 2012" class="timeago">04 Apr 2012</abbr>
								</li>
								<li class="icon_small_arrow right_black">
									<a href="indexb878.html?page=post" class="clearfix">
										<span class="left">
											Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
										</span>
										<span class="number">
											9
										</span>
									</a>
									<abbr title="02 Feb 2012" class="timeago">02 Feb 2012</abbr>
								</li>
								<li class="icon_small_arrow right_black">
									<a href="indexb878.html?page=post" class="clearfix">
										<span class="left">
											Lorem ipsum dolor sit amat velum, consectetur adipiscing elit.
										</span>
										<span class="number">
											7
										</span>
									</a>
									<abbr title="24 Jan 2011" class="timeago">24 Jan 2011</abbr>
								</li>
							</ul>
						</div>
					</div> -->
					<!-- most viewed -->
					<!-- <div class="sidebar_box">
						<div class="clearfix">
							<div class="header_left">
								<h3 class="box_header">
									Most Viewed
								</h3>
							</div>
							<div class="header_right">
								<a href="#" id="most_viewed_prev" class="scrolling_list_control_left icon_small_arrow left_black"></a>
								<a href="#" id="most_viewed_next" class="scrolling_list_control_right icon_small_arrow right_black"></a>
							</div>
						</div>
						<div class="scrolling_list_wrapper">
							<ul class="scrolling_list most_viewed">
								<li class="icon_small_arrow right_black">
									<a href="indexb878.html?page=post" class="clearfix">
										<span class="left">
											Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
										</span>
										<span class="number">
											423
										</span>
									</a>
									<abbr title="29 May 2012" class="timeago">29 May 2012</abbr>
								</li>
								<li class="icon_small_arrow right_black">
									<a href="indexb878.html?page=post" class="clearfix">
										<span class="left">
											Lorem ipsum dolor sit amat velum.
										</span>
										<span class="number">
											231
										</span>
									</a>
									<abbr title="04 Apr 2012" class="timeago">04 Apr 2012</abbr>
								</li>
								<li class="icon_small_arrow right_black">
									<a href="indexb878.html?page=post" class="clearfix">
										<span class="left">
											Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
										</span>
										<span class="number">
											184
										</span>
									</a>
									<abbr title="02 Feb 2012" class="timeago">02 Feb 2012</abbr>
								</li>
								<li class="icon_small_arrow right_black">
									<a href="indexb878.html?page=post" class="clearfix">
										<span class="left">
											Lorem ipsum dolor sit amat velum, consectetur adipiscing elit.
										</span>
										<span class="number">
											97
										</span>
									</a>
									<abbr title="24 Jan 2011" class="timeago">24 Jan 2011</abbr>
								</li>
							</ul>
						</div>
					</div> -->
					<!-- photostream -->
					<!-- <div class="sidebar_box">
						<h3 class="box_header">
							Photostream
						</h3>
						<ul class="photostream clearfix">
							<li class="gallery_box">
								<img src="images/samples/75x75/image_01.jpg" alt="" />
								<ul class="controls">
									<li>
										<a href="images/samples/image_01.jpg" rel="photostream" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
							<li class="gallery_box">
								<img src="images/samples/75x75/image_02.jpg" alt="" />
								<ul class="controls">
									<li>
										<a href="images/samples/image_02.jpg" rel="photostream" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
							<li class="gallery_box">
								<img src="images/samples/75x75/image_03.jpg" alt="" />
								<ul class="controls">
									<li>
										<a href="images/samples/image_03.jpg" rel="photostream" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
							<li class="gallery_box">
								<img src="images/samples/75x75/image_04.jpg" alt="" />
								<ul class="controls">
									<li>
										<a href="images/samples/image_04.jpg" rel="photostream" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
							<li class="gallery_box">
								<img src="images/samples/75x75/image_05.jpg" alt="" />
								<ul class="controls">
									<li>
										<a href="images/samples/image_05.jpg" rel="photostream" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
							<li class="gallery_box">
								<img src="images/samples/75x75/image_06.jpg" alt="" />
								<ul class="controls">
									<li>
										<a href="images/samples/image_06.jpg" rel="photostream" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
							<li class="gallery_box">
								<img src="images/samples/75x75/image_07.jpg" alt="" />
								<ul class="controls">
									<li>
										<a href="images/samples/image_07.jpg" rel="photostream" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
							<li class="gallery_box">
								<img src="images/samples/75x75/image_08.jpg" alt="" />
								<ul class="controls">
									<li>
										<a href="images/samples/image_08.jpg" rel="photostream" class="fancybox open_lightbox"></a>
									</li>
								</ul>
							</li>
						</ul>
					</div> -->
					<!-- archives -->
					<!-- <div class="sidebar_box">
						<h3 class="box_header">
							Archives
						</h3>
						<ul class="columns list clearfix">
							<li class="column_left icon_small_arrow right_black">
								<a href="#" title="April 2012">
									April 2012
								</a>
							</li>
							<li class="column_right icon_small_arrow right_black">
								<a href="#" title="May 2012">
									May 2012
								</a>
							</li>
							<li class="column_left icon_small_arrow right_black">
								<a href="#" title="June 2012">
									June 2012
								</a>
							</li>
							<li class="column_right icon_small_arrow right_black">
								<a href="#" title="July 2012">
									July 2012
								</a>
							</li>
							<li class="column_left icon_small_arrow right_black">
								<a href="#" title="August 2012">
									August 2012
								</a>
							</li>
							<li class="column_right icon_small_arrow right_black">
								<a href="#" title="November 2012">
									November 2012
								</a>
							</li>
						</ul>
					</div> -->
					<!-- make an appointment -->
					<div class="sidebar_box">
						<h3 class="box_header">
							Make An Appointment
						</h3>
						<p class="info">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros sit amet sollicitudin.
						</p>
						<ul class="contact_data">
							<li class="clearfix">
								<span class="social_icon phone"></span>
								<p class="value">
									by phone: <strong>1-800-643-4300</strong>
								</p>
							</li>
							<li class="clearfix">
								<span class="social_icon mail"></span>
								<p class="value">
									by e-mail: <a href="https://quanticalabs.com/cdn-cgi/l/email-protection#98f5fdfcf1fbfdf6ecfdead8f5f9f1f4b6fbf7f5"><span class="__cf_email__" data-cfemail="48252d2c212b2d263c2d3a0825292124662b2725">[email&#160;protected]</span></a>
								</p>
							</li>
							<li class="clearfix">
								<span class="social_icon form"></span>
								<p class="value">
									or <a href="index53a6.html?page=contact" title="Contact form">fill in the form</a> on our contact page
								</p>
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