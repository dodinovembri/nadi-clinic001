<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="<?= $config->keyword ?>" />
    <meta name="description" content="<?= $config->description ?>" />

    <title>Faq | <?= $config->name ?></title>
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
                    <h1>Detil Faq</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/faq') ?>">Faq</a></li>
                        <li>Detil Faq</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Pertanyaan</label>
                                        <textarea class="form-control" type="text" rows="5" disabled><?= $faq->question ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Jawaban</label>
                                        <textarea class="form-control" type="text" rows="5" disabled><?= $faq->answer ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Gambar</label>
                                        <img src="<?= base_url('assets/images/faq/' . $faq->image) ?>" height="120" alt="Icon Gambar">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label>Status</label>
                                        <input class="form-control" type="text" value="<?= $faq->status == 1 ? 'Aktif' : 'Nonaktif' ?>" disabled />
                                    </div>
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <a href="<?= base_url('extranet/faq') ?>"><button class="btn btn-primary">Kembali</button></a>
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