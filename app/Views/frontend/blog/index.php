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
								<?= ucwords($config_menu->blog) ?>
							</li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search" action="<?= base_url($trial_name. '/blog/search') ?>" method="get">
							<input class="search_input" name="keyword" type="text" value="<?= ucfirst($config_menu->search_placeholder) ?>" placeholder="<?= ucfirst($config_menu->search_placeholder) ?>" />
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
									<a class="post_image" href="<?= base_url($trial_name . '/blog/show/' . $value->id) ?>" title="<?= $value->title ?>">
										<img src="<?= base_url('assets/images/blog/' . $value->image) ?>" alt="" />
									</a>
									<h2>
										<a href="<?= base_url($trial_name . '/blog/show/' . $value->id) ?>" title="<?= $value->title ?>">
											<?= $value->title ?>
										</a>
									</h2>
									<p>
										<?= substr($value->description, 0, 400) ?>...
									</p>
									<a title="<?= $config_menu->read_more ?>" href="<?= base_url($trial_name . '/blog/show/' . $value->id) ?>" class="more">
										<?= ucwords($config_menu->read_more) ?> &rarr;
									</a>
									<div class="post_footer clearfix">
										<ul class="post_footer_details">
											<li><?= ucwords($config_menu->posted_in) ?></li>
											<li><a href="<?= base_url($trial_name . '/blog/category/' . $value->category_id) ?>"><?= $value->category_name ?></a></li>
										</ul>
										<?php if ($value->creator_name){ ?>
											<ul class="post_footer_details">
												<li><?= ucwords($config_menu->posted_by) ?></li>
												<li>
													<?= ucwords($value->creator_name) ?>
												</li>
											</ul>
										<?php } ?>
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
								<li><a href="<?= base_url($trial_name . '/blog/category/' . $value->id) ?>" title="<?= ucwords($value->name) ?>"><?= ucwords($value->name) ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<!-- make an appointment -->
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