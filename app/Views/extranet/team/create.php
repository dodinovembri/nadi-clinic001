<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />  
      
    <title>Team | <?= $config->name ?></title>
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
                    <h1>Create New</h1>
                    <ul>
                        <li><a href="<?= base_url('extranet/team') ?>">Slider</a></li>
                        <li>Create New</li>
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
                                            <label>department_id</label>
                                            <select class="form-control" name="department_id" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>name</label>
                                            <input class="form-control" type="text" name="name" placeholder="Enter team name" required />
                                        </div>
                                        
                                        <div class="col-md-6 form-group mb-3">
                                            <label>short_description</label>
                                            <input class="form-control" type="text" name="short_description" placeholder="Enter text 1" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>speciality</label>
                                            <input class="form-control" type="text" name="speciality" placeholder="Enter text 2" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>degres</label>
                                            <input class="form-control" type="text" name="degres" placeholder="Enter text 3" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>training</label>
                                            <input class="form-control" type="text" name="training" placeholder="Enter text 4" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>office</label>
                                            <input class="form-control" type="text" name="office" placeholder="Enter text 5" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>work_days</label>
                                            <input class="form-control" type="text" name="work_days" placeholder="Enter text button" />
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
                                            <label>facebook_url</label>
                                            <input class="form-control" type="text" name="facebook_url" placeholder="Enter button link" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>googleplus_url</label>
                                            <input class="form-control" type="text" name="googleplus_url" placeholder="Enter button link" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>mail_url</label>
                                            <input class="form-control" type="text" name="mail_url" placeholder="Enter button link" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>forrst_url</label>
                                            <input class="form-control" type="text" name="forrst_url" placeholder="Enter button link" />
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
                                            <a href="<?= base_url('extranet/team') ?>"><button type="button" class="btn btn-warning">Cancel</button></a>
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