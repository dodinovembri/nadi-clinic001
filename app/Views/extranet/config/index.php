<!DOCTYPE html>
<html lang="en" dir="">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<title>Config | <?= $config->name ?></title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
	<link href="<?= base_url('assets/extranet/css/themes/lite-purple.min.css') ?>" rel="stylesheet" />
	<link href="<?= base_url('assets/extranet/css/plugins/perfect-scrollbar.min.css') ?>" rel="stylesheet" />
	<link rel="icon" type="image/png" sizes="48x48" href="<?= base_url('assets/images/favicon/' . $config->favicon) ?>">
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
						<form action="<?= base_url('extranet/config/update/' . $config->id) ?>" method="post" enctype="multipart/form-data">
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label for="lastName1">Clinic Name</label>
											<input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" value="<?= $config->name ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Short Description</label>
											<textarea class="form-control" id="picker2" rows="5" placeholder="Enter address" name="address"><?= $config->short_description ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="frontend_logo">Clinic Logo</label>
											<img src="<?= base_url('assets/images/logo/' . $config->logo) ?>" height="120" alt="">
											<input class="form-control" id="frontend_logo" type="file" name="frontend_logo" value="<?= $config->logo ?>" />
											<sub>.jpg or .png file, size: 785x318 under 10kb</sub>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="firstName1">Text Logo</label>
											<input class="form-control" id="firstName1" type="text" name="title" placeholder="Enter title" value="<?= $config->logo_text ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label for="lastName1">Monday - Friday Opening Hours Label</label>
											<input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" value="<?= $config->title_monday_friday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="lastName1">Monday - Friday Opening Hours</label>
											<input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" value="<?= $config->monday_friday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="lastName1">Saturday Opening Hours Label</label>
											<input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" value="<?= $config->title_saturday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="lastName1">Saturday Opening Hours</label>
											<input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" value="<?= $config->saturday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="lastName1">Sunday Opening Hours Label</label>
											<input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" value="<?= $config->title_sunday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="lastName1">Sunday Opening Hours</label>
											<input class="form-control" id="lastName1" type="text" name="keyword" placeholder="Enter keyword" value="<?= $config->sunday_opening_hours ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">										
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Motto Label</label>
											<input class="form-control" id="picker2" placeholder="Enter phone" name="phone" value="<?= $config->title_motto ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Feature Label</label>
											<input class="form-control" id="picker2" placeholder="Enter email" name="email" value="<?= $config->title_feature ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Benefit Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->title_benefit ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Medical Care Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->title_medical_care ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Our Clinic Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->our_clinic_text ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Laboratory Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->title_laboratory ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Testimonial Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->title_testimonial ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">										
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Department - General Info Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->department_general_info_text ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Department - Service Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->department_service_text ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Department - Doctor Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->department_doctor_text ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Department - Timetable Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->department_timetable_text ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">										
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Map Url</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->url_map ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Latitude</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->latitude ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Longitude</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->longitude ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Address</label>
											<textarea class="form-control" id="picker2" rows="5" placeholder="Enter address" name="address"><?= $config->address ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Appointment - Make Appointment Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->make_appointment_title ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Appointment - Online Appointment Label</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->online_appointment_title ?>" />
										</div>										
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Appointment - Description</label>
											<textarea class="form-control" id="picker2" rows="5" placeholder="Enter address" name="address"><?= $config->make_appointment_description ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">About Us - Title</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->title ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">About Us - Description</label>
											<textarea class="form-control" id="picker2" rows="5" placeholder="Enter address" name="address"><?= $config->description ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Motto</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->motto ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Motto By</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->motto_by ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Our Features</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->our_feature ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Our Feature</label>
											<input class="form-control" id="picker2" placeholder="Enter working days" name="working_day" value="<?= $config->our_feature ?>" />
										</div>										
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label for="picker2">Copy Right</label>
											<input class="form-control" id="picker2" placeholder="Enter copyright" name="copyright" value="<?= $config->copyright ?>" />
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
	<script src="<?= base_url('assets/extranet/js/plugins/jquery-3.3.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/extranet/js/plugins/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/extranet/js/plugins/perfect-scrollbar.min.js') ?>"></script>
	<script src="<?= base_url('assets/extranet/js/scripts/script.min.js') ?>"></script>
	<script src="<?= base_url('assets/extranet/js/scripts/sidebar.large.script.min.js') ?>"></script>
</body>

</html>