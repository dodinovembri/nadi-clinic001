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
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Label & Menu Configuration or translation</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Change</label>
											<input class="form-control" type="text" name="Change" value="<?= $config_menu->id ?>" />
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