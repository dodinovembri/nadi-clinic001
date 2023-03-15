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
                    <h1>Detil Tim</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/team') ?>">Tim</a></li>
                        <li>Detil Tim</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Departemen</label>
                                        <input class="form-control" type="text" value="<?= $team->department_id ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Nama</label>
                                        <input class="form-control" type="text" value="<?= $team->name ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Deskripsi Singkat</label>
                                        <textarea class="form-control" type="text" rows="5" disabled><?= $team->short_description ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Pelatihan</label>
                                        <textarea class="form-control" type="text" rows="5" disabled><?= $team->training ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Spesialisasi</label>
                                        <input class="form-control" type="text" value="<?= $team->speciality ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Pendidikan</label>
                                        <input class="form-control" type="text" value="<?= $team->degres ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Kantor</label>
                                        <input class="form-control" type="text" value="<?= $team->office ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Hari Kerja</label>
                                        <input class="form-control" type="text" value="<?= $team->work_days ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Gambar 1</label>
                                        <img src="<?= base_url('assets/images/team/' . $team->image1) ?>" height="120" alt="Gambar 1">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Gambar 2</label>
                                        <img src="<?= base_url('assets/images/team/' . $team->image2) ?>" height="120" alt="Gambar 2">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Gambar 3</label>
                                        <img src="<?= base_url('assets/images/team/' . $team->image3) ?>" height="120" alt="Gambar 3">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Url Facebook</label>
                                        <input class="form-control" type="text" value="<?= $team->facebook_url ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Url Googleplus</label>
                                        <input class="form-control" type="text" value="<?= $team->googleplus_url ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Url Email</label>
                                        <input class="form-control" type="text" value="<?= $team->mail_url ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Url Forrst</label>
                                        <input class="form-control" type="text" value="<?= $team->forrst_url ?>" disabled />
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Status</label>
                                        <input class="form-control" type="text" value="<?= $team->status == 1 ? 'Aktif' : 'Nonaktif' ?>" disabled />
                                    </div>
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <a href="<?= base_url('extranet/team') ?>"><button class="btn btn-primary">Kembali</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of main-content -->
            </div>
            <?= $this->include('extranet/components/footer') ?>
        </div>
    </div>
    <?= $this->include('extranet/components/script') ?>
</body>

</html>