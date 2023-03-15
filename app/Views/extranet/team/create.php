<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />  
      
    <title>Tim | <?= $config->name ?></title>
    <?= $this->include('extranet/components/style') ?>
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <!-- Header & Sidebar -->
        <?= $this->include('extranet/components/header') ?>
        <?= $this->include('extranet/components/sidebar') ?>
        <!-- Main -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="main-content">
                <div class="breadcrumb">
                    <h1>Tambah Baru</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/team') ?>">Tim</a></li>
                        <li>Tambah Baru</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('extranet/team/store') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Departemen</label>
                                            <select class="form-control" name="department_id" required>
                                                <option value="">Pilih Departemen</option>
                                                <?php foreach ($departments as $key => $value) { ?>
                                                    <option value="<?= $value->id ?>"><?= $value->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="name" placeholder="Masukkan nama" required />
                                        </div>
                                        
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Deskripsi Singkat</label>
                                            <textarea class="form-control" type="text" rows="5" name="short_description" placeholder="Masukkan deskripsi singkat" ></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Pelatihan</label>
                                            <textarea class="form-control" type="text" rows="5" name="training" placeholder="Masukkan pelatihan" ></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Spesialisasi</label>
                                            <input class="form-control" type="text" name="speciality" placeholder="Masukkan spesialisasi" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Pendidikan</label>
                                            <input class="form-control" type="text" name="degres" placeholder="Masukkan pendidikan" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Kantor</label>
                                            <input class="form-control" type="text" name="office" placeholder="Masukkan kantor" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Hari Kerja</label>
                                            <input class="form-control" type="text" name="work_days" placeholder="Masukkan hari kerja" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Gambar 1</label>
                                            <input class="form-control" type="file" name="image1" required />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>225x150</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Gambar 2</label>
                                            <input class="form-control" type="file" name="image2" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>225x150</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Gambar 3</label>
                                            <input class="form-control" type="file" name="image3" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>225x150</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Url Facebook</label>
                                            <input class="form-control" type="text" name="facebook_url" placeholder="Masukkan url facebook" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Url Googleplus</label>
                                            <input class="form-control" type="text" name="googleplus_url" placeholder="Masukkan url googleplus" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Url Email</label>
                                            <input class="form-control" type="text" name="mail_url" placeholder="Masukkan url email" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Url Forrst</label>
                                            <input class="form-control" type="text" name="forrst_url" placeholder="Masukkan url forrst" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="1">Aktif</option>
                                                <option value="0">Nonaktif</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <button class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('extranet/team') ?>"><button type="button" class="btn btn-warning">Batal</button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?= $this->include('extranet/components/footer') ?>
        </div>
    </div>
    <?= $this->include('extranet/components/script') ?>
</body>

</html>