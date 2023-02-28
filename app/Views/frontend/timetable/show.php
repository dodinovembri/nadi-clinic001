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
						<h1 class="page_title"><?= ucwords($config_menu->timetable) ?></h1>
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
								<?= ucwords($config_menu->timetable) ?>
							</li>
						</ul>
					</div>
					<div class="page_header_right">
						<form class="search">
							<input class="search_input" type="text" value="<?= ucfirst($config_menu->search_placeholder) ?>" placeholder="<?= ucfirst($config_menu->search_placeholder) ?>" />
						</form>
					</div>
				</div>
				<!-- box menu -->
				<ul class="clearfix tabs_box_navigation sf-menu page_margin_top">
					<li class="tabs_box_navigation_selected submenu wide">
						<span><?= ucwords($config_menu->all_department) ?></span>
						<ul>
							<li class="selected">
								<a href="<?= base_url('timetable') ?>" title="<?= ucwords($config_menu->all_department) ?>">
									<?= ucwords($config_menu->all_department) ?>
								</a>
							</li>
							<?php foreach ($departments as $key => $value) { ?>
								<li>
									<a href="<?= base_url('timetable/department/show/'. $value->id) ?>" title="<?= ucwords($value->name) ?>">
										<?= ucwords($value->name) ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</li>
				</ul>
				<div class="clearfix tabs page_margin_top">
					<div>
						<table class="timetable">
							<thead>
								<tr>
									<th></th>
									<th><?= strtoupper($config_menu->monday) ?></th>
									<th><?= strtoupper($config_menu->tuesday) ?></th>
									<th><?= strtoupper($config_menu->wednesday) ?></th>
									<th><?= strtoupper($config_menu->thursday) ?></th>
									<th><?= strtoupper($config_menu->friday) ?></th>
									<th><?= strtoupper($config_menu->saturday) ?></th>
									<th><?= strtoupper($config_menu->sunday) ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($department_timetables as $key => $value) { ?>
									<tr <?php if ($key % 2) {
										} else { ?> class="row_gray" <?php } ?>>
										<!-- time -->
										<td><?= $value->time ?></td>
										<!-- monday -->
										<?php if ($value->monday_title === null) { ?>
											<td></td>
										<?php } else { ?>
											<td rowspan="1" class="event tooltip">
												<a href="#" title="<?= ucwords($value->monday_title) ?>"><?= ucwords($value->monday_title) ?></a>
												<span class="hours"><?= $value->time ?></span><br /><?= ucwords($value->monday_description) ?>
												<div class="tooltip_text">
													<div class="tooltip_content">
														<a href="#" title="<?= ucwords($value->monday_title) ?>"><?= ucwords($value->monday_title) ?></a>
														<?= $value->time ?><br />
														<?= ucwords($value->monday_description) ?>
													</div>
												</div>
											</td>
										<?php } ?>
										<!-- tuesday -->
										<?php if ($value->tuesday_title === null) { ?>
											<td></td>
										<?php } else { ?>
											<td rowspan="1" class="event tooltip">
												<a href="#" title="<?= ucwords($value->tuesday_title) ?>"><?= ucwords($value->tuesday_title) ?></a>
												<span class="hours"><?= $value->time ?></span><br /><?= ucwords($value->tuesday_description) ?>
												<div class="tooltip_text">
													<div class="tooltip_content">
														<a href="#" title="<?= ucwords($value->tuesday_title) ?>"><?= ucwords($value->tuesday_title) ?></a>
														<?= $value->time ?><br />
														<?= ucwords($value->tuesday_description) ?>
													</div>
												</div>
											</td>
										<?php } ?>
										<!-- wednesday -->
										<?php if ($value->wednesday_title === null) { ?>
											<td></td>
										<?php } else { ?>
											<td rowspan="1" class="event tooltip">
												<a href="#" title="<?= ucwords($value->wednesday_title) ?>"><?= ucwords($value->wednesday_title) ?></a>
												<span class="hours"><?= $value->time ?></span><br /><?= ucwords($value->wednesday_description) ?>
												<div class="tooltip_text">
													<div class="tooltip_content">
														<a href="#" title="<?= ucwords($value->wednesday_title) ?>"><?= ucwords($value->wednesday_title) ?></a>
														<?= $value->time ?><br />
														<?= ucwords($value->wednesday_description) ?>
													</div>
												</div>
											</td>
										<?php } ?>
										<!-- thursday -->
										<?php if ($value->thursday_title === null) { ?>
											<td></td>
										<?php } else { ?>
											<td rowspan="1" class="event tooltip">
												<a href="#" title="<?= ucwords($value->thursday_title) ?>"><?= ucwords($value->thursday_title) ?></a>
												<span class="hours"><?= $value->time ?></span><br /><?= ucwords($value->thursday_description) ?>
												<div class="tooltip_text">
													<div class="tooltip_content">
														<a href="#" title="<?= ucwords($value->thursday_title) ?>"><?= ucwords($value->thursday_title) ?></a>
														<?= $value->time ?><br />
														<?= ucwords($value->thursday_description) ?>
													</div>
												</div>
											</td>
										<?php } ?>
										<!-- friday -->
										<?php if ($value->friday_title === null) { ?>
											<td></td>
										<?php } else { ?>
											<td rowspan="1" class="event tooltip">
												<a href="#" title="<?= ucwords($value->friday_title) ?>"><?= ucwords($value->friday_title) ?></a>
												<span class="hours"><?= $value->time ?></span><br /><?= ucwords($value->friday_description) ?>
												<div class="tooltip_text">
													<div class="tooltip_content">
														<a href="#" title="<?= ucwords($value->friday_title) ?>"><?= ucwords($value->friday_title) ?></a>
														<?= $value->time ?><br />
														<?= ucwords($value->friday_description) ?>
													</div>
												</div>
											</td>
										<?php } ?>
										<!-- saturday -->
										<?php if ($value->saturday_title === null) { ?>
											<td></td>
										<?php } else { ?>
											<td rowspan="1" class="event tooltip">
												<a href="#" title="<?= ucwords($value->saturday_title) ?>"><?= ucwords($value->saturday_title) ?></a>
												<span class="hours"><?= $value->time ?></span><br /><?= ucwords($value->saturday_description) ?>
												<div class="tooltip_text">
													<div class="tooltip_content">
														<a href="#" title="<?= ucwords($value->saturday_title) ?>"><?= ucwords($value->saturday_title) ?></a>
														<?= $value->time ?><br />
														<?= ucwords($value->saturday_description) ?>
													</div>
												</div>
											</td>
										<?php } ?>
										<!-- sunday -->
										<?php if ($value->sunday_title === null) { ?>
											<td></td>
										<?php } else { ?>
											<td rowspan="1" class="event tooltip">
												<a href="#" title="<?= ucwords($value->sunday_title) ?>"><?= ucwords($value->sunday_title) ?></a>
												<span class="hours"><?= $value->time ?></span><br /><?= ucwords($value->sunday_description) ?>
												<div class="tooltip_text">
													<div class="tooltip_content">
														<a href="#" title="<?= ucwords($value->sunday_title) ?>"><?= ucwords($value->sunday_title) ?></a>
														<?= $value->time ?><br />
														<?= ucwords($value->sunday_description) ?>
													</div>
												</div>
											</td>
										<?php } ?>
									</tr>
								<?php } ?>
								<tr>
									<td colspan="8" class="last">
										<div class="tip">
											Hover over table block to get additional info
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="timetable small">
							<h3 class="box_header">
								Monday
							</h3>
							<ul class="items_list thin page_margin_top clearfix">
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#primary-health-care" title="Primary Health Care">
										Primary Health Care, Ann Blyumin, Office 367, Hall A
									</a>
									<div class="value">
										06.00 - 07.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Robert Brown, Office 224, Hall B
									</a>
									<div class="value">
										07.00 - 09.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#laryngological-clinic" title="Laryngological Clinic">
										Laryngological Clinic, Earlene Milone, Office 150, Hall B
									</a>
									<div class="value">
										10.00 - 13.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#pediatric-clinic" title="Pediatric Clinic">
										Pediatric Clinic, Clare Mitchell, Office 112, Hall C
									</a>
									<div class="value">
										15.00 - 16.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#outpatient-surgery" title="Outpatient Surgery">
										Outpatient Surgery, John D. Tom, Office 6, Hall B
									</a>
									<div class="value">
										16.00 - 18.00
									</div>
								</li>
							</ul>
							<h3 class="box_header page_margin_top">
								Tuesday
							</h3>
							<ul class="items_list thin page_margin_top clearfix">
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#primary-health-care" title="Primary Health Care">
										Primary Health Care, Ann Blyumin, Office 367, Hall A
									</a>
									<div class="value">
										06.00 - 07.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Robert Brown, Office 224, Hall B
									</a>
									<div class="value">
										07.00 - 09.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#pediatric-clinic" title="Pediatric Clinic">
										Pediatric Clinic, Clare Mitchell, Office 112, Hall C
									</a>
									<div class="value">
										09.00 - 11.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Tim Duncan, Office 224, Hall B
									</a>
									<div class="value">
										13.00 - 15.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#outpatient-surgery" title="Outpatient Surgery">
										Outpatient Surgery, John D. Tom, Office 6, Hall B
									</a>
									<div class="value">
										15.00 - 19.00
									</div>
								</li>
							</ul>
							<h3 class="box_header page_margin_top">
								Wednesday
							</h3>
							<ul class="items_list thin page_margin_top clearfix">
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Robert Brown, Office 224, Hall B
									</a>
									<div class="value">
										07.00 - 09.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#pediatric-clinic" title="Pediatric Clinic">
										Pediatric Clinic, Clare Mitchell, Office 112, Hall C
									</a>
									<div class="value">
										10.00 - 12.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Tim Duncan, Office 224, Hall B
									</a>
									<div class="value">
										13.00 - 14.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#cardiac-clinic" title="Cardiac Clinic">
										Cardiac Clinic, John D. Tom, Office 25, Hall A
									</a>
									<div class="value">
										14.00 - 16.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#dental-clinic" title="Dental Clinic">
										Dental Clinic, Norma Blueman, Office 8, Hall A
									</a>
									<div class="value">
										16.00 - 17.00
									</div>
								</li>
							</ul>
							<h3 class="box_header page_margin_top">
								Thursday
							</h3>
							<ul class="items_list thin page_margin_top clearfix">
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#outpatient-surgery" title="Outpatient Surgery">
										Outpatient Surgery, John D. Tom, Office 6, Hall B
									</a>
									<div class="value">
										06.00 - 10.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">
										Ophthalmology Clinic, Sue Collins, Office 114, Hall C
									</a>
									<div class="value">
										06.30 - 07.30
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Tim Duncan, Office 224, Hall B
									</a>
									<div class="value">
										12.00 - 13.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#laryngological-clinic" title="Laryngological Clinic">
										Laryngological Clinic, Earlene Milone, Office 150, Hall B
									</a>
									<div class="value">
										13.00 - 17.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#primary-health-care" title="Primary Health Care">
										Primary Health Care, Earlene Milone, Office 150, Hall B
									</a>
									<div class="value">
										17.00 - 20.00
									</div>
								</li>
							</ul>
							<h3 class="box_header page_margin_top">
								Friday
							</h3>
							<ul class="items_list thin page_margin_top clearfix">
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Robert Brown, Office 224, Hall B
									</a>
									<div class="value">
										07.00 - 11.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#outpatient-surgery" title="Outpatient Surgery">
										Outpatient Surgery, John D. Tom, Office 6, Hall B
									</a>
									<div class="value">
										12.00 - 16.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">
										Outpatient Rehabilitation, Robert van Hex, Gym Arena
									</a>
									<div class="value">
										13.00 - 16.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#dental-clinic" title="Dental Clinic">
										Dental Clinic, Norma Blueman, Office 8, Hall A
									</a>
									<div class="value">
										16.00 - 17.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#primary-health-care" title="Primary Health Care">
										Primary Health Care, Earlene Milone, Office 150, Hall B
									</a>
									<div class="value">
										17.00 - 20.00
									</div>
								</li>
							</ul>
							<h3 class="box_header page_margin_top">
								Saturday
							</h3>
							<ul class="items_list thin page_margin_top clearfix">
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#primary-health-care" title="Primary Health Care">
										Primary Health Care, Robert van Hex, Office 207, Hall B
									</a>
									<div class="value">
										09.00 - 10.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Robert Brown, Office 224, Hall B
									</a>
									<div class="value">
										10.00 - 11.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#pediatric-clinic" title="Pediatric Clinic">
										Pediatric Clinic, Clare Mitchell, Office 112, Hall C
									</a>
									<div class="value">
										12.00 - 13.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#laryngological-clinic" title="Laryngological Clinic">
										Laryngological Clinic, Earlene Milone, Office 150, Hall B
									</a>
									<div class="value">
										13.00 - 17.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">
										Ophthalmology Clinic, Sue Collins, Office 114, Hall C
									</a>
									<div class="value">
										13.00 - 17.00
									</div>
								</li>
							</ul>
							<h3 class="box_header page_margin_top">
								Sunday
							</h3>
							<ul class="items_list thin page_margin_top clearfix">
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#primary-health-care" title="Primary Health Care">
										Primary Health Care, Robert van Hex, Office 207, Hall B
									</a>
									<div class="value">
										09.00 - 10.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
										Gynaecological Clinic, Robert Brown, Office 224, Hall B
									</a>
									<div class="value">
										10.00 - 11.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#pediatric-clinic" title="Pediatric Clinic">
										Pediatric Clinic, Clare Mitchell, Office 112, Hall C
									</a>
									<div class="value">
										12.00 - 13.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#outpatient-surgery" title="Outpatient Surgery">
										Outpatient Surgery, John D. Tom, Office 6, Hall B
									</a>
									<div class="value">
										13.00 - 14.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#outpatient-surgery" title="Outpatient Surgery">
										Outpatient Surgery, John D. Tom, Office 6, Hall B
									</a>
									<div class="value">
										15.00 - 19.00
									</div>
								</li>
								<li class="clearfix icon_clock_black">
									<a href="indexc6f4.html?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">
										Outpatient Rehabilitation, Robert van Hex, Gym Arena
									</a>
									<div class="value">
										16.00 - 19.00
									</div>
								</li>
							</ul>
						</div>
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