<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />  
      
    <title>Config Menu | <?= $config->name ?></title>
    <?= $this->include('extranet/components/style') ?>
</head>

<body class="text-left">
	<div class="app-admin-wrap layout-sidebar-large">
		<?= $this->include('extranet/components/header') ?>
		<?= $this->include('extranet/components/sidebar') ?>
		<div class="main-content-wrap sidenav-open d-flex flex-column">
			<div class="main-content">
				<div class="breadcrumb">
					<h1>Config</h1>
					<ul>
						<li>Config</li>
					</ul>
				</div>
				<div class="separator-breadcrumb border-top"></div>
				<?= $this->include('extranet/components/flashmessage') ?>
				<div class="row">
					<div class="col-md-12">
						<form action="<?= base_url($trial_name . '/extranet/config-menu/update/' . $config_menu->id) ?>" method="post" enctype="multipart/form-data">
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Home</label>
											<input class="form-control" type="text" name="home" value="<?= $config_menu->home ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Blog</label>
											<input class="form-control" type="text" name="blog" value="<?= $config_menu->blog ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Page</label>
											<input class="form-control" type="text" name="page" value="<?= $config_menu->page ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>About</label>
											<input class="form-control" type="text" name="about" value="<?= $config_menu->about ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Our Doctor</label>
											<input class="form-control" type="text" name="our_doctor" value="<?= $config_menu->our_doctor ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Medical Care</label>
											<input class="form-control" type="text" name="medical_care" value="<?= $config_menu->medical_care ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Department</label>
											<input class="form-control" type="text" name="department" value="<?= $config_menu->department ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Timetable</label>
											<input class="form-control" type="text" name="timetable" value="<?= $config_menu->timetable ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Gallery</label>
											<input class="form-control" type="text" name="gallery" value="<?= $config_menu->gallery ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Contact</label>
											<input class="form-control" type="text" name="contact" value="<?= $config_menu->contact ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Latest News</label>
											<input class="form-control" type="text" name="latest_news" value="<?= $config_menu->latest_news ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Make an Appointment</label>
											<input class="form-control" type="text" name="make_an_appointment" value="<?= $config_menu->make_an_appointment ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Medicenter Clinic</label>
											<input class="form-control" type="text" name="medicenter_clinic" value="<?= $config_menu->medicenter_clinic ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Latest Post</label>
											<input class="form-control" type="text" name="latest_post" value="<?= $config_menu->latest_post ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Latest Tweet</label>
											<input class="form-control" type="text" name="latest_tweet" value="<?= $config_menu->latest_tweet ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Our Motto</label>
											<input class="form-control" type="text" name="our_motto" value="<?= $config_menu->our_motto ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Our Feature</label>
											<input class="form-control" type="text" name="our_feature" value="<?= $config_menu->our_feature ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Why Choose Us</label>
											<input class="form-control" type="text" name="why_choose_us" value="<?= $config_menu->why_choose_us ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Meet The Team</label>
											<input class="form-control" type="text" name="meet_the_team" value="<?= $config_menu->meet_the_team ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Category</label>
											<input class="form-control" type="text" name="category" value="<?= $config_menu->category ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Most Commented</label>
											<input class="form-control" type="text" name="most_commented" value="<?= $config_menu->most_commented ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Most Viewed</label>
											<input class="form-control" type="text" name="most_viewed" value="<?= $config_menu->most_viewed ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Leave a Reply</label>
											<input class="form-control" type="text" name="leave_a_reply" value="<?= $config_menu->leave_a_reply ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Search Placeholder</label>
											<input class="form-control" type="text" name="search_placeholder" value="<?= $config_menu->search_placeholder ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Photostream</label>
											<input class="form-control" type="text" name="photostream" value="<?= $config_menu->photostream ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Archive</label>
											<input class="form-control" type="text" name="archive" value="<?= $config_menu->archive ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Send</label>
											<input class="form-control" type="text" name="send" value="<?= $config_menu->send ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Top</label>
											<input class="form-control" type="text" name="top" value="<?= $config_menu->top ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Read MMore</label>
											<input class="form-control" type="text" name="read_more" value="<?= $config_menu->read_more ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Visit Link</label>
											<input class="form-control" type="text" name="visit_link" value="<?= $config_menu->visit_link ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Reply</label>
											<input class="form-control" type="text" name="reply" value="<?= $config_menu->reply ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Online Appointment Form</label>
											<input class="form-control" type="text" name="online_appointment_form" value="<?= $config_menu->online_appointment_form ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Opening Hour</label>
											<input class="form-control" type="text" name="opening_hour" value="<?= $config_menu->opening_hour ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Opening Hour Monday t Friday</label>
											<input class="form-control" type="text" name="opening_hour_monday_to_friday" value="<?= $config_menu->opening_hour_monday_to_friday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Opening Hour Saturday</label>
											<input class="form-control" type="text" name="opening_hour_saturday" value="<?= $config_menu->opening_hour_saturday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Opening Hour Sunday</label>
											<input class="form-control" type="text" name="opening_hour_sunday" value="<?= $config_menu->opening_hour_sunday ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Posted in</label>
											<input class="form-control" type="text" name="posted_in" value="<?= $config_menu->posted_in ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Show all</label>
											<input class="form-control" type="text" name="show_all" value="<?= $config_menu->show_all ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Detail</label>
											<input class="form-control" type="text" name="detail" value="<?= $config_menu->detail ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Layout</label>
											<input class="form-control" type="text" name="layout" value="<?= $config_menu->layout ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Wide</label>
											<input class="form-control" type="text" name="wide" value="<?= $config_menu->wide ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Boxed</label>
											<input class="form-control" type="text" name="boxed" value="<?= $config_menu->boxed ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Posted by</label>
											<input class="form-control" type="text" name="posted_by" value="<?= $config_menu->posted_by ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Address</label>
											<input class="form-control" type="text" name="address" value="<?= $config_menu->address ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Our Clinic</label>
											<input class="form-control" type="text" name="our_clinic" value="<?= $config_menu->our_clinic ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Testimonial</label>
											<input class="form-control" type="text" name="testimonial" value="<?= $config_menu->testimonial ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Laboratory</label>
											<input class="form-control" type="text" name="laboratory" value="<?= $config_menu->laboratory ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Service</label>
											<input class="form-control" type="text" name="service" value="<?= $config_menu->service ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Monday</label>
											<input class="form-control" type="text" name="monday" value="<?= $config_menu->monday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tuesday</label>
											<input class="form-control" type="text" name="tuesday" value="<?= $config_menu->tuesday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Wednesday</label>
											<input class="form-control" type="text" name="wednesday" value="<?= $config_menu->wednesday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Thursday</label>
											<input class="form-control" type="text" name="thursday" value="<?= $config_menu->thursday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Friday</label>
											<input class="form-control" type="text" name="friday" value="<?= $config_menu->friday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Saturday</label>
											<input class="form-control" type="text" name="saturday" value="<?= $config_menu->saturday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Sunday</label>
											<input class="form-control" type="text" name="sunday" value="<?= $config_menu->sunday ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Phone</label>
											<input class="form-control" type="text" name="phone" value="<?= $config_menu->phone ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Email</label>
											<input class="form-control" type="text" name="email" value="<?= $config_menu->email ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Did You Know</label>
											<input class="form-control" type="text" name="did_you_know" value="<?= $config_menu->did_you_know ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>General Info</label>
											<input class="form-control" type="text" name="general_info" value="<?= $config_menu->general_info ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Work Day</label>
											<input class="form-control" type="text" name="work_day" value="<?= $config_menu->work_day ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>All Department</label>
											<input class="form-control" type="text" name="all_department" value="<?= $config_menu->all_department ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Select Department</label>
											<input class="form-control" type="text" name="select_department" value="<?= $config_menu->select_department ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>First Name</label>
											<input class="form-control" type="text" name="first_name" value="<?= $config_menu->first_name ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Last Name</label>
											<input class="form-control" type="text" name="last_name" value="<?= $config_menu->last_name ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Date of Birth</label>
											<input class="form-control" type="text" name="date_of_birth" value="<?= $config_menu->date_of_birth ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Code Number</label>
											<input class="form-control" type="text" name="code_number" value="<?= $config_menu->code_number ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Phone Number</label>
											<input class="form-control" type="text" name="phone_number" value="<?= $config_menu->phone_number ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Reason of Appointment</label>
											<input class="form-control" type="text" name="reason_of_appointment" value="<?= $config_menu->reason_of_appointment ?>" />
										</div>
										
										
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Doctor List</label>
											<input class="form-control" type="text" name="doctor_list" value="<?= $config_menu->doctor_list ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Speciality</label>
											<input class="form-control" type="text" name="speciality" value="<?= $config_menu->speciality ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Degree</label>
											<input class="form-control" type="text" name="degree" value="<?= $config_menu->degree ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Training</label>
											<input class="form-control" type="text" name="training" value="<?= $config_menu->training ?>" />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Office</label>
											<input class="form-control" type="text" name="office" value="<?= $config_menu->office ?>" />
										</div>
										
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<button class="btn btn-primary" type="submit">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?= $this->include('extranet/components/footer') ?>
		</div>
	</div>
	<?= $this->include('extranet/components/script') ?>
</body>

</html>