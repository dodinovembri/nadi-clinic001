<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="<?= $config->keyword ?>" />
    <meta name="description" content="<?= $config->description ?>" />

    <title>Testimoni | <?= $config->name ?></title>
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
                    <h1>Edit Testimoni</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/testimonial') ?>">Testimoni</a></li>
                        <li>Edit Testimoni</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('extranet/testimonial/update/' . $testimonial->id) ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" type="text" rows="5" name="description" placeholder="Masukkan deskripsi" required><?= $testimonial->description ?></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Nama Tester</label>
                                            <input class="form-control" type="text" name="tester" placeholder="Masukkan nama tester" value="<?= $testimonial->tester ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <?php if ($testimonial->status == 0) { ?>
                                                    <option value="0">Nonaktif</option>
                                                    <option value="1">Aktif</option>
                                                <?php } elseif ($testimonial->status == 1) { ?>
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Nonaktif</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <button class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('extranet/testimonial') ?>"><button type="button" class="btn btn-warning">Batal</button></a>
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