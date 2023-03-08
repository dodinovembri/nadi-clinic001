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
						<h1 class="page_title"><?= ucwords($config_menu->blog) ?></h1>
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
								<a href="<?= base_url($trial_name . '/blog') ?>" title="<?= ucwords($config_menu->blog) ?>">
									<?= ucwords($config_menu->blog) ?>
								</a>
							</li>
							<li class="separator icon_small_arrow right_gray">
								&nbsp;
							</li>
							<li>
								<?= ucfirst($blog->title) ?>
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
						<li class="post single">
							<ul class="comment_box">
								<li class="date clearfix animated_element animation-slideRight">
									<div class="value"><?= $blog->date ?></div>
									<div class="arrow_date"></div>
								</li>
								<!-- <li class="comments_number animated_element animation-slideUp duration-300 delay-500">
									<a href="indexb878.html?page=post#comments_list" title="2 comments">
										2 comments
									</a>
								</li> -->
							</ul>
							<div class="post_content">
								<div class="gallery_box">
									<ul class="image_carousel">
										<li class="current_slide">
											<img src="<?= base_url('assets/images/blog/' . $blog->image) ?>" alt="" />
											<ul class="controls">
												<li>
													<a href="<?= base_url('assets/images/blog/' . $blog->image) ?>" rel="gallery" class="fancybox open_lightbox"></a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<h2>
									<a href="#" title="<?= ucfirst($blog->title) ?>">
										<?= ucfirst($blog->title) ?>
									</a>
								</h2>
								<p style="text-align:justify">
									<?= ucfirst($blog->description) ?>
								</p>
								<a title="Leave a reply" href="#comment_form" class="more reply_button">
									Leave a reply &rarr;
								</a>
								<div class="post_footer clearfix">
									<ul class="post_footer_details">
										<li><?= ucwords($config_menu->posted_in) ?></li>
										<li>
											<a href="#" title="General">
												<?= $blog->category_name ?>
											</a>
										</li>
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
					</ul>
					<!-- <div class="comments clearfix page_margin_top">
						<div class="comment_box">
							<div class="comments_number animated_element animation-slideRight">
								<a href="indexb878.html?page=post#comments_list" title="2 comments">
									2 comments
								</a>
								<div class="arrow_comments"></div>
							</div>
						</div>
						<div id="comments_list">
							<ul>
								<li class="comment clearfix">
									<div class="comment_author_avatar">
										&nbsp;
									</div>
									<div class="comment_details">
										<div class="posted_by">
											Posted by <a class="author" href="#" title="Jonh Doe">John Doe</a> on 16 Feb 2012, 2.24 pm
										</div>
										<p>
											Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla.
										</p>
										<a class="more reply_button" href="#comment_form">
											Reply &rarr;
										</a>
									</div>
								</li>
								<li class="comment clearfix">
									<div class="comment_author_avatar">
										&nbsp;
									</div>
									<div class="comment_details">
										<div class="posted_by">
											Posted by <a class="author" href="#" title="Jonh Doe">John Doe</a> on 16 Feb 2012, 2.24 pm
										</div>
										<p>
											Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla.
										</p>
										<a class="more reply_button" href="#comment_form">
											Reply &rarr;
										</a>
									</div>
									<ul class="children">
										<li class="comment clearfix">
											<div class="comment_author_avatar">
												&nbsp;
											</div>
											<div class="comment_details">
												<div class="posted_by">
													Posted by <a class="author" href="#" title="Jonh Doe">John Doe</a> on 16 Feb 2012, 2.24 pm
												</div>
												<p>
													Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus.
												</p>
												<a class="more reply_button" href="#comment_form">
													Reply &rarr;
												</a>
											</div>
										</li>
										<li class="comment clearfix">
											<div class="comment_author_avatar">
												&nbsp;
											</div>
											<div class="comment_details">
												<div class="posted_by">
													Posted by <a class="author" href="#" title="Jonh Doe">John Doe</a> on 16 Feb 2012, 2.24 pm
												</div>
												<p>
													Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus.
												</p>
												<a class="more reply_button" href="#comment_form">
													Reply &rarr;
												</a>
											</div>
										</li>
									</ul>
								</li>
							</ul>
							<ul class="pagination">
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
						<div class="comment_form_container">
							<h3 class="box_header">
								Leave a reply
							</h3>
							<form class="comment_form" id="comment_form" method="post" action="https://quanticalabs.com/Medicenter/Template/?page=post">
								<fieldset class="left">
									<label class="first">Your Name</label>
									<input class="text_input" name="name" type="text" value="" />
									<label>Your Email</label>
									<input class="text_input" name="email" type="text" value="" />
								</fieldset>
								<fieldset class="right">
									<label class="first">Message</label>
									<textarea name="message"></textarea>
									<input type="submit" value="Send" class="more blue" />
									<a href="#cancel" id="cancel_comment" title="Cancel reply">Cancel reply</a>
								</fieldset>
							</form>
						</div>
					</div> -->
				</div>
				<div class="page_right">
					<h3 class="box_header margin">
						<?= ucwords($config_menu->category) ?>
					</h3>
					<div class="sidebar_box first">
						<ul class="categories clearfix page_margin_top">
							<?php foreach ($blog_categories as $key => $value) { ?>
								<li><a href="<?= base_url($trial_name . '/blog_category/show/' . $value->id) ?>" title="<?= ucwords($value->name) ?>"><?= ucwords($value->name) ?></a></li>
							<?php } ?>
						</ul>
					</div>
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
					</div>
					<div class="sidebar_box">
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
					</div>
					<div class="sidebar_box">
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
					</div>
					<div class="sidebar_box">
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
									by e-mail: <a href="https://quanticalabs.com/cdn-cgi/l/email-protection#264b43424f454348524354664b474f4a0845494b"><span class="__cf_email__" data-cfemail="08656d6c616b6d667c6d7a4865696164266b6765">[email&#160;protected]</span></a>
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