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
									<h5>Configuration</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-4 form-group mb-3">
											<label>Logo</label>
											<img src="<?= base_url('assets/images/logo/'.$config->logo) ?>" height="120" alt="">
											<input class="form-control" type="file" name="logo" value="<?= $config->logo ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Text Logo</label>
											<input class="form-control" type="text" name="logo_text" value="<?= $config->logo_text ?>" placeholder="Enter text logo" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Opening hours from Monday to Friday</label>
											<input class="form-control" type="text" name="monday_friday_opening_hours" value="<?= $config->monday_friday_opening_hours ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Opening hours on Saturday</label>
											<input class="form-control" type="text" name="saturday_opening_hours" value="<?= $config->saturday_opening_hours ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Opening hours on Sunday</label>
											<input class="form-control" type="text" name="sunday_opening_hours" value="<?= $config->sunday_opening_hours ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Name</label>
											<input class="form-control" type="text" name="name" value="<?= $config->name ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Short Description</label>
											<textarea class="form-control" type="text" rows="5" name="short_description"><?= $config->short_description ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Address</label>
											<textarea class="form-control" type="text" rows="5" name="address" value="<?= $config->address ?>" ><?= $config->address ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Copyright</label>
											<textarea class="form-control" type="text" rows="5" name="copyright"><?= $config->copyright ?></textarea>
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Map Url</label>
											<input class="form-control" type="text" name="url_map" value="<?= $config->url_map ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>Latitude</label>
											<input class="form-control" type="text" name="latitude" value="<?= $config->latitude ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
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
										<div class="col-md-4 form-group mb-3">
											<label>make_appointment_description</label>
											<input class="form-control" type="text" name="make_appointment_description" value="<?= $config->make_appointment_description ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>favicon</label>
											<input class="form-control" type="text" name="favicon" value="<?= $config->favicon ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>keyword</label>
											<input class="form-control" type="text" name="keyword" value="<?= $config->keyword ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>description</label>
											<input class="form-control" type="text" name="description" value="<?= $config->description ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>facebook_url</label>
											<input class="form-control" type="text" name="facebook_url" value="<?= $config->facebook_url ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>googleplus_url</label>
											<input class="form-control" type="text" name="googleplus_url" value="<?= $config->googleplus_url ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>mail_url</label>
											<input class="form-control" type="text" name="mail_url" value="<?= $config->mail_url ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>forrst_url</label>
											<input class="form-control" type="text" name="forrst_url" value="<?= $config->forrst_url ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>twitter_url</label>
											<input class="form-control" type="text" name="twitter_url" value="<?= $config->twitter_url ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>phone</label>
											<input class="form-control" type="text" name="phone" value="<?= $config->phone ?>" />
										</div>
										<div class="col-md-4 form-group mb-3">
											<label>email</label>
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