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
                    <ul><li>About</li></ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('extranet/about/update') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Title</label>
                                            <input class="form-control" type="text" name="title" placeholder="Enter faq name" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Description</label>
                                            <input class="form-control" type="text" name="description" placeholder="Enter text 1" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Motto</label>
                                            <input class="form-control" type="text" name="motto" placeholder="Enter text 1" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Motto by</label>
                                            <input class="form-control" type="text" name="motto_by" placeholder="Enter text 1" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Our Feature</label>
                                            <input class="form-control" type="text" name="our_feature" placeholder="Enter text 1" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Our Feature by</label>
                                            <input class="form-control" type="text" name="our_feature_by" placeholder="Enter text 1" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 1</label>
                                            <input class="form-control" type="file" name="image" required />
                                            <sub>.jpg or .png file, size: 1920x500</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 2</label>
                                            <input class="form-control" type="file" name="image" required />
                                            <sub>.jpg or .png file, size: 1920x500</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 3</label>
                                            <input class="form-control" type="file" name="image" required />
                                            <sub>.jpg or .png file, size: 1920x500</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 4</label>
                                            <input class="form-control" type="file" name="image" required />
                                            <sub>.jpg or .png file, size: 1920x500</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 5</label>
                                            <input class="form-control" type="file" name="image" required />
                                            <sub>.jpg or .png file, size: 1920x500</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 6</label>
                                            <input class="form-control" type="file" name="image" required />
                                            <sub>.jpg or .png file, size: 1920x500</sub>
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
                                            <a href="<?= base_url('extranet/about') ?>"><button type="button" class="btn btn-warning">Cancel</button></a>
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