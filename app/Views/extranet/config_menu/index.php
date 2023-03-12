<!DOCTYPE html>
<html lang="en" dir="">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />

	<title>Pengaturan Label Menu | <?= $config->name ?></title>
	<?= $this->include('extranet/components/style') ?>
</head>

<body class="text-left">
	<div class="app-admin-wrap layout-sidebar-large">
		<?= $this->include('extranet/components/header') ?>
		<?= $this->include('extranet/components/sidebar') ?>
		<div class="main-content-wrap sidenav-open d-flex flex-column">
			<div class="main-content">
				<div class="breadcrumb">
					<h1>Pengaturan Label Menu</h1>
				</div>
				<div class="separator-breadcrumb border-top"></div>
				<?= $this->include('extranet/components/flashmessage') ?>
				<div class="row">
					<div class="col-md-12">
						<form action="<?= base_url('extranet/config-menu/update/' . $config_menu->id) ?>" method="post" enctype="multipart/form-data">
							<div class="card mb-4">
								<div class="card-body">
									<h5>Pengaturan Label Menu</h5>
									<div class="separator-breadcrumb border-top"></div>
									<div class="row">
										<div class="col-md-3 form-group mb-3">
											<label>Home</label>
											<input class="form-control" type="text" name="home" value="<?= $config_menu->home ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Blog</label>
											<input class="form-control" type="text" name="blog" value="<?= $config_menu->blog ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Halaman</label>
											<input class="form-control" type="text" name="page" value="<?= $config_menu->page ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tentang</label>
											<input class="form-control" type="text" name="about" value="<?= $config_menu->about ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Dokter Kami</label>
											<input class="form-control" type="text" name="our_doctor" value="<?= $config_menu->our_doctor ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Perawatan Medis</label>
											<input class="form-control" type="text" name="medical_care" value="<?= $config_menu->medical_care ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Departemen</label>
											<input class="form-control" type="text" name="department" value="<?= $config_menu->department ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Jadwal</label>
											<input class="form-control" type="text" name="timetable" value="<?= $config_menu->timetable ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Galeri</label>
											<input class="form-control" type="text" name="gallery" value="<?= $config_menu->gallery ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Kontak</label>
											<input class="form-control" type="text" name="contact" value="<?= $config_menu->contact ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Berita Terbaru</label>
											<input class="form-control" type="text" name="latest_news" value="<?= $config_menu->latest_news ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Membuat janji</label>
											<input class="form-control" type="text" name="make_an_appointment" value="<?= $config_menu->make_an_appointment ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Postingan Terbaru</label>
											<input class="form-control" type="text" name="latest_post" value="<?= $config_menu->latest_post ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tweet Terbaru</label>
											<input class="form-control" type="text" name="latest_tweet" value="<?= $config_menu->latest_tweet ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Moto Kami</label>
											<input class="form-control" type="text" name="our_motto" value="<?= $config_menu->our_motto ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Fitur Kami</label>
											<input class="form-control" type="text" name="our_feature" value="<?= $config_menu->our_feature ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Mengapa Memilih Kami</label>
											<input class="form-control" type="text" name="why_choose_us" value="<?= $config_menu->why_choose_us ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Temui Tim</label>
											<input class="form-control" type="text" name="meet_the_team" value="<?= $config_menu->meet_the_team ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Kategori</label>
											<input class="form-control" type="text" name="category" value="<?= $config_menu->category ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Paling Banyak Dikomentari</label>
											<input class="form-control" type="text" name="most_commented" value="<?= $config_menu->most_commented ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Paling Banyak Dilihat</label>
											<input class="form-control" type="text" name="most_viewed" value="<?= $config_menu->most_viewed ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tinggalkan Balasan</label>
											<input class="form-control" type="text" name="leave_a_reply" value="<?= $config_menu->leave_a_reply ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Placeholder Pencarian</label>
											<input class="form-control" type="text" name="search_placeholder" value="<?= $config_menu->search_placeholder ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Aliran Foto</label>
											<input class="form-control" type="text" name="photostream" value="<?= $config_menu->photostream ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Arsip</label>
											<input class="form-control" type="text" name="archive" value="<?= $config_menu->archive ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Kirim</label>
											<input class="form-control" type="text" name="send" value="<?= $config_menu->send ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Atas</label>
											<input class="form-control" type="text" name="top" value="<?= $config_menu->top ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Baca Selengkapnya</label>
											<input class="form-control" type="text" name="read_more" value="<?= $config_menu->read_more ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Kunjungi Tautan</label>
											<input class="form-control" type="text" name="visit_link" value="<?= $config_menu->visit_link ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Balas</label>
											<input class="form-control" type="text" name="reply" value="<?= $config_menu->reply ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Formulir Janji Online</label>
											<input class="form-control" type="text" name="online_appointment_form" value="<?= $config_menu->online_appointment_form ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Jam Buka</label>
											<input class="form-control" type="text" name="opening_hour" value="<?= $config_menu->opening_hour ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Jam Buka Senin Sampai Jumat</label>
											<input class="form-control" type="text" name="opening_hour_monday_to_friday" value="<?= $config_menu->opening_hour_monday_to_friday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Jam Buka Sabtu</label>
											<input class="form-control" type="text" name="opening_hour_saturday" value="<?= $config_menu->opening_hour_saturday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Jam Buka Minggu</label>
											<input class="form-control" type="text" name="opening_hour_sunday" value="<?= $config_menu->opening_hour_sunday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Diposting di</label>
											<input class="form-control" type="text" name="posted_in" value="<?= $config_menu->posted_in ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tunjukkan semua</label>
											<input class="form-control" type="text" name="show_all" value="<?= $config_menu->show_all ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Detil</label>
											<input class="form-control" type="text" name="detail" value="<?= $config_menu->detail ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tata letak</label>
											<input class="form-control" type="text" name="layout" value="<?= $config_menu->layout ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Lebar</label>
											<input class="form-control" type="text" name="wide" value="<?= $config_menu->wide ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Kemas</label>
											<input class="form-control" type="text" name="boxed" value="<?= $config_menu->boxed ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Diposting oleh</label>
											<input class="form-control" type="text" name="posted_by" value="<?= $config_menu->posted_by ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Alamat</label>
											<input class="form-control" type="text" name="address" value="<?= $config_menu->address ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Klinik Kami</label>
											<input class="form-control" type="text" name="our_clinic" value="<?= $config_menu->our_clinic ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Testimoni</label>
											<input class="form-control" type="text" name="testimonial" value="<?= $config_menu->testimonial ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Laboratorium</label>
											<input class="form-control" type="text" name="laboratory" value="<?= $config_menu->laboratory ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Senin</label>
											<input class="form-control" type="text" name="monday" value="<?= $config_menu->monday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Selasa</label>
											<input class="form-control" type="text" name="tuesday" value="<?= $config_menu->tuesday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Rabu</label>
											<input class="form-control" type="text" name="wednesday" value="<?= $config_menu->wednesday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Kamis</label>
											<input class="form-control" type="text" name="thursday" value="<?= $config_menu->thursday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Jumat</label>
											<input class="form-control" type="text" name="friday" value="<?= $config_menu->friday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Sabtu</label>
											<input class="form-control" type="text" name="saturday" value="<?= $config_menu->saturday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Minggu</label>
											<input class="form-control" type="text" name="sunday" value="<?= $config_menu->sunday ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Telepon</label>
											<input class="form-control" type="text" name="phone" value="<?= $config_menu->phone ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Email</label>
											<input class="form-control" type="text" name="email" value="<?= $config_menu->email ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tahukah kamu</label>
											<input class="form-control" type="text" name="did_you_know" value="<?= $config_menu->did_you_know ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Semua Departemen</label>
											<input class="form-control" type="text" name="all_department" value="<?= $config_menu->all_department ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Pilih Departemen</label>
											<input class="form-control" type="text" name="select_department" value="<?= $config_menu->select_department ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Nama</label>
											<input class="form-control" type="text" name="name" value="<?= $config_menu->name ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Tanggal lahir</label>
											<input class="form-control" type="text" name="date_of_birth" value="<?= $config_menu->date_of_birth ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Nomor Identitas</label>
											<input class="form-control" type="text" name="code_number" value="<?= $config_menu->code_number ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Nomor telepon</label>
											<input class="form-control" type="text" name="phone_number" value="<?= $config_menu->phone_number ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Alasan Janji Temu</label>
											<input class="form-control" type="text" name="reason_of_appointment" value="<?= $config_menu->reason_of_appointment ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Informasi Umum</label>
											<input class="form-control" type="text" name="general_info" value="<?= $config_menu->general_info ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Layanan</label>
											<input class="form-control" type="text" name="service" value="<?= $config_menu->service ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Daftar Dokter</label>
											<input class="form-control" type="text" name="doctor_list" value="<?= $config_menu->doctor_list ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Spesialisasi</label>
											<input class="form-control" type="text" name="speciality" value="<?= $config_menu->speciality ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Gelar Pendidikan</label>
											<input class="form-control" type="text" name="degree" value="<?= $config_menu->degree ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Pelatihan</label>
											<input class="form-control" type="text" name="training" value="<?= $config_menu->training ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Kantor</label>
											<input class="form-control" type="text" name="office" value="<?= $config_menu->office ?>" required />
										</div>
										<div class="col-md-3 form-group mb-3">
											<label>Masuk</label>
											<input class="form-control" type="text" name="signin" value="<?= $config_menu->signin ?>" required />
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