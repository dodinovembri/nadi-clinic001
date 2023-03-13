<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />  
      
    <title>Slide Gambar | <?= $config->name ?></title>
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
                    <h1>Edit Slide Gambar</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/slider') ?>">Slide Gambar</a></li>
                        <li>Edit Slide Gambar</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('extranet/slider/update/' . $slider->id) ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Judul</label>
                                            <input class="form-control" type="text" name="title" value="<?= $slider->title ?>" placeholder="Masukkan judul" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Sub Judul</label>
                                            <input class="form-control" type="text" name="subtitle" value="<?= $slider->subtitle ?>" placeholder="Enter code" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Gambar</label>
                                            <img src="<?= base_url('assets/images/slider/' . $slider->image) ?>" height="120" alt="">
                                            <input class="form-control" type="file" name="image" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>1590x670</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <?php if ($slider->status == 0) { ?>
                                                    <option value="0">Nonaktif</option>
                                                    <option value="1">Aktif</option>
                                                <?php } elseif ($slider->status == 1) { ?>
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Nonaktif</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <button class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('extranet/slider') ?>"><button type="button" class="btn btn-warning">Batal</button></a>
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