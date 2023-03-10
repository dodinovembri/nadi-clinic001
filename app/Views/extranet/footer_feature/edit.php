<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />  
      
    <title>Footer Feature | <?= $config->name ?></title>
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
                    <h1>Edit Slider</h1>
                    <ul>
                        <li><a href="<?= base_url($trial_name . '/extranet/footer_feature') ?>">Slider</a></li>
                        <li>Edit Slider</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url($trial_name . '/extranet/footer_feature/update/' . $footer_feature->id) ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" value="<?= $footer_feature->name ?>" placeholder="Enter name" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image</label>
                                            <img src="<?= base_url('assets/images/footer_features/' . $footer_feature->image) ?>" height="120" alt="">
                                            <input class="form-control" type="file" name="image" />
                                            <sub>.jpg or .png file, size: 1920x500</sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Text 1</label>
                                            <input class="form-control" type="text" name="text1" value="<?= $footer_feature->text1 ?>" placeholder="Enter code" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Text 2</label>
                                            <input class="form-control" type="text" name="text2" value="<?= $footer_feature->text2 ?>" placeholder="Enter code" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Text 3</label>
                                            <input class="form-control" type="text" name="text3" value="<?= $footer_feature->text3 ?>" placeholder="Enter code" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Text 4</label>
                                            <input class="form-control" type="text" name="text4" value="<?= $footer_feature->text4 ?>" placeholder="Enter code" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Text 5</label>
                                            <input class="form-control" type="text" name="text5" value="<?= $footer_feature->text5 ?>" placeholder="Enter code" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Text Button</label>
                                            <input class="form-control" type="text" name="text_button" value="<?= $footer_feature->text_button ?>" placeholder="Enter code" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Button Link</label>
                                            <input class="form-control" type="text" name="button_link" value="<?= $footer_feature->button_link ?>" placeholder="Enter code" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <?php if ($footer_feature->status == 0) { ?>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                <?php } elseif ($footer_feature->status == 1) { ?>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <button class="btn btn-primary">Submit</button>
                                            <a href="<?= base_url($trial_name . '/extranet/footer_feature') ?>"><button type="button" class="btn btn-warning">Cancel</button></a>
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