<!DOCTYPE html>
<html lang="en" dir="">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />

	<title>Config | <?= $config->name ?></title>
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
						<form action="<?= base_url('extranet/config/update/' . $config->id) ?>" method="post" enctype="multipart/form-data">
							<div class="card mb-4">
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 form-group">
											<h5>Configuration</h5>
										</div>
										<div class="col-md-6 form-group">
											<h5>Content will be Placed</h5>
										</div>
									</div>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Logo</label>
											<input class="form-control" type="file" name="logo" value="<?= $config->logo ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>38x44</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/logo/' . $config->logo) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->logo ?></span>
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Text Logo</label>
											<input class="form-control" type="text" name="logo_text" value="<?= $config->logo_text ?>" placeholder="Enter text logo" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<img src="<?= base_url('assets/images/placed/home.png') ?>" style="margin-top:10px" height="160" alt="">
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Opening hours from Monday to Friday</label>
											<input class="form-control" type="text" name="monday_friday_opening_hours" value="<?= $config->monday_friday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Opening hours on Saturday</label>
											<input class="form-control" type="text" name="saturday_opening_hours" value="<?= $config->saturday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Opening hours on Sunday</label>
											<input class="form-control" type="text" name="sunday_opening_hours" value="<?= $config->sunday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Name</label>
											<input class="form-control" type="text" name="name" value="<?= $config->name ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Short Description</label>
											<textarea class="form-control" type="text" rows="5" name="short_description"><?= $config->short_description ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Address</label>
											<textarea class="form-control" type="text" rows="5" name="address" value="<?= $config->address ?>"><?= $config->address ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Copyright</label>
											<textarea class="form-control" type="text" rows="5" name="copyright"><?= $config->copyright ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Map Url</label>
											<textarea class="form-control" type="text" rows="5" name="url_map"><?= $config->url_map ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Latitude</label>
											<input class="form-control" type="text" name="latitude" value="<?= $config->latitude ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Longitude</label>
											<input class="form-control" type="text" name="longitude" value="<?= $config->longitude ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Configuration</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Description of Make an Appointment</label>
											<textarea class="form-control" type="text" rows="5" name="make_appointment_description"><?= $config->make_appointment_description ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Favicon</label>
											<input class="form-control" type="file" name="favicon" value="<?= $config->favicon ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>16x16</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/favicon/' . $config->favicon) ?>" height="40" style="margin-top:10px" alt="">
											<span><?= $config->favicon ?></span>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Keyword</label>
											<textarea class="form-control" type="text" rows="5" name="keyword"><?= $config->keyword ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Description</label>
											<textarea class="form-control" type="text" rows="5" name="description"><?= $config->description ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Facebook Url</label>
											<input class="form-control" type="text" name="facebook_url" value="<?= $config->facebook_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Googleplus Url</label>
											<input class="form-control" type="text" name="googleplus_url" value="<?= $config->googleplus_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Mail Url</label>
											<input class="form-control" type="text" name="mail_url" value="<?= $config->mail_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Forrst Url</label>
											<input class="form-control" type="text" name="forrst_url" value="<?= $config->forrst_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Twitter Url</label>
											<input class="form-control" type="text" name="twitter_url" value="<?= $config->twitter_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Phone</label>
											<input class="form-control" type="text" name="phone" value="<?= $config->phone ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Email Address</label>
											<input class="form-control" type="text" name="email" value="<?= $config->email ?>" />
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