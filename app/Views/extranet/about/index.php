<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="<?= $config->keyword ?>" />
    <meta name="description" content="<?= $config->description ?>" />

    <title>About | <?= $config->name ?></title>
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
                    <h1>About</h1>
                    <ul>
                        <li>About</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url($trial_name . '/extranet/about/update/' . $about->id) ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Title</label>
                                            <input class="form-control" type="text" name="title" placeholder="Enter title" value="<?= $about->title ?>" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Description</label>
                                            <textarea class="form-control" type="text" rows="5" name="description" placeholder="Enter description" required><?= $about->description ?></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Motto</label>
                                            <textarea class="form-control" type="text" rows="5" name="motto" placeholder="Enter motto"><?= $about->motto ?></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Motto by</label>
                                            <input class="form-control" type="text" name="motto_by" placeholder="Enter motto creator" value="<?= $about->motto_by ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Our Feature</label>
                                            <textarea class="form-control" type="text" rows="5" name="our_feature" placeholder="Enter our feature"><?= $about->our_feature ?></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Our Feature by</label>
                                            <input class="form-control" type="text" name="our_feature_by" placeholder="Enter our feature creator" value="<?= $about->our_feature_by ?>" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 1</label>
                                            <img src="<?= base_url('assets/images/about/' . $about->image1) ?>" height="120" alt="">
                                            <input class="form-control" type="file" name="image1" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 2</label>
                                            <img src="<?= base_url('assets/images/about/' . $about->image2) ?>" height="120" alt="">
                                            <input class="form-control" type="file" name="image2" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 3</label>
                                            <img src="<?= base_url('assets/images/about/' . $about->image3) ?>" height="120" alt="">
                                            <input class="form-control" type="file" name="image3" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 4</label>
                                            <img src="<?= base_url('assets/images/about/' . $about->image4) ?>" height="120" alt="">
                                            <input class="form-control" type="file" name="image4" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 5</label>
                                            <img src="<?= base_url('assets/images/about/' . $about->image5) ?>" height="120" alt="">
                                            <input class="form-control" type="file" name="image5" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 6</label>
                                            <img src="<?= base_url('assets/images/about/' . $about->image6) ?>" height="120" alt="">
                                            <input class="form-control" type="file" name="image6" />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>480x300</b></span> pixels</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <button class="btn btn-primary">Submit</button>
                                            <a href="<?= base_url($trial_name . '/extranet/about') ?>"><button type="button" class="btn btn-warning">Cancel</button></a>
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