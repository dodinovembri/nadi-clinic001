<!DOCTYPE html>
<html lang="en" dir="">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />

	<title>Pengaturan | <?= $config->name ?></title>
	<?= $this->include('extranet/components/style') ?>
</head>

<body class="text-left">
	<div class="app-admin-wrap layout-sidebar-large">
		<?= $this->include('extranet/components/header') ?>
		<?= $this->include('extranet/components/sidebar') ?>
		<div class="main-content-wrap sidenav-open d-flex flex-column">
			<div class="main-content">
				<div class="breadcrumb">
					<h1>Pengaturan</h1>
				</div>
				<div class="separator-breadcrumb border-top"></div>
				<?= $this->include('extranet/components/flashmessage') ?>
				<div class="row">
					<div class="col-md-12">
						<form action="<?= base_url('extranet/config/update/' . $config->id) ?>" method="post" enctype="multipart/form-data">
							<div class="card mb-4">
								<div class="card-body">
									<h5>Informasi Umum</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Nama Klinik</label>
											<input class="form-control" type="text" name="name" value="<?= $config->name ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>No. Telepon</label>
											<input class="form-control" type="text" name="phone" value="<?= $config->phone ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Penjelasan Singkat</label>
											<textarea class="form-control" type="text" rows="5" name="short_description"><?= $config->short_description ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Alamat Email</label>
											<input class="form-control" type="text" name="email" value="<?= $config->email ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Alamat Klinik</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Alamat</label>
											<textarea class="form-control" type="text" rows="5" name="address" value="<?= $config->address ?>"><?= $config->address ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Url Google Map</label>
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
									<h5>Jam Operasional</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Jam buka dari Senin ke Jumat</label>
											<input class="form-control" type="text" name="monday_friday_opening_hours" value="<?= $config->monday_friday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Jam buka hari Sabtu</label>
											<input class="form-control" type="text" name="saturday_opening_hours" value="<?= $config->saturday_opening_hours ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Jam buka hari Minggu</label>
											<input class="form-control" type="text" name="sunday_opening_hours" value="<?= $config->sunday_opening_hours ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Janji Temu</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Keterangan dari membuat Janji Temu</label>
											<textarea class="form-control" type="text" rows="5" name="make_appointment_description"><?= $config->make_appointment_description ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Sosial Media</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Url Facebook</label>
											<input class="form-control" type="text" name="facebook_url" value="<?= $config->facebook_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Url Googleplus</label>
											<input class="form-control" type="text" name="googleplus_url" value="<?= $config->googleplus_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Url Email</label>
											<input class="form-control" type="text" name="mail_url" value="<?= $config->mail_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Url Forrst</label>
											<input class="form-control" type="text" name="forrst_url" value="<?= $config->forrst_url ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Url Twitter</label>
											<input class="form-control" type="text" name="twitter_url" value="<?= $config->twitter_url ?>" />
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Tentang Klinik</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<input type="hidden" name="about_id" value="<?= $about->id ?>">
											<label>Judul halaman tentang</label>
											<input class="form-control" type="text" name="title" placeholder="Enter title" value="<?= $about->title ?>" required />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Deskripsi</label>
											<textarea class="form-control" type="text" rows="5" name="description" placeholder="Enter description" required><?= $about->description ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Moto</label>
											<textarea class="form-control" type="text" rows="5" name="motto" placeholder="Enter motto"><?= $about->motto ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Moto Oleh</label>
											<input class="form-control" type="text" name="motto_by" placeholder="Enter motto creator" value="<?= $about->motto_by ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Unggulan Kami</label>
											<textarea class="form-control" type="text" rows="5" name="our_feature" placeholder="Enter our feature"><?= $about->our_feature ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Unggulan Kami Oleh</label>
											<input class="form-control" type="text" name="our_feature_by" placeholder="Enter our feature creator" value="<?= $about->our_feature_by ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Gambar 1</label>
											<img src="<?= base_url('assets/images/about/' . $about->image1) ?>" height="120" alt="">
											<input class="form-control" type="file" name="image1" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Gambar 2</label>
											<img src="<?= base_url('assets/images/about/' . $about->image2) ?>" height="120" alt="">
											<input class="form-control" type="file" name="image2" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Gambar 3</label>
											<img src="<?= base_url('assets/images/about/' . $about->image3) ?>" height="120" alt="">
											<input class="form-control" type="file" name="image3" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<h5>Sistem</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-6 form-group mb-3">
											<label>Logo</label>
											<input class="form-control" type="file" name="logo" value="<?= $config->logo ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>38x44</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/logo/' . $config->logo) ?>" style="margin-top:10px" height="60" alt="">
											<span><?= $config->logo ?></span>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Teks Logo</label>
											<input class="form-control" type="text" name="logo_text" value="<?= $config->logo_text ?>" />
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Favicon</label>
											<input class="form-control" type="file" name="favicon" value="<?= $config->favicon ?>" />
											<sub>.jpg or .png file, size: <span style="color:red"><b>16x16</b></span> pixels</sub><br>
											<img src="<?= base_url('assets/images/favicon/' . $config->favicon) ?>" height="40" style="margin-top:10px" alt="">
											<span><?= $config->favicon ?></span>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Kata kunci</label>
											<textarea class="form-control" type="text" rows="5" name="keyword"><?= $config->keyword ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Keterangan</label>
											<textarea class="form-control" type="text" rows="5" name="description"><?= $config->description ?></textarea>
										</div>
										<div class="col-md-6 form-group mb-3">
											<label>Hak Cipta</label>
											<textarea class="form-control" type="text" rows="5" name="copyright"><?= $config->copyright ?></textarea>
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