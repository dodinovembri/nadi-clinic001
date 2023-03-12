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
                                            <label>Department</label>
                                            <select class="form-control" name="department_id" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="required" placeholder="Enter team name" required />
                                        </div>
                                        
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Short Description</label>
                                            <textarea class="form-control" type="text" rows="5" name="short_description" placeholder="Enter short description" ></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Training</label>
                                            <textarea class="form-control" type="text" rows="5" name="training" placeholder="Enter training" ></textarea>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Speciality</label>
                                            <input class="form-control" type="text" name="speciality" placeholder="Enter speciality" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Degrees</label>
                                            <input class="form-control" type="text" name="degres" placeholder="Enter degrees" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Office</label>
                                            <input class="form-control" type="text" name="office" placeholder="Enter office" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Work Days</label>
                                            <input class="form-control" type="text" name="work_days" placeholder="Enter work days" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 1</label>
                                            <input class="form-control" type="file" name="image1" required />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>225x150</b></span></sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 2</label>
                                            <input class="form-control" type="file" name="image2" required />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>225x150</b></span></sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Image 3</label>
                                            <input class="form-control" type="file" name="image3" required />
                                            <sub>.jpg or .png file, size: <span style="color:red"><b>225x150</b></span></sub>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Facebook Url</label>
                                            <input class="form-control" type="text" name="facebook_url" placeholder="Enter facebook url" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Googleplus Url</label>
                                            <input class="form-control" type="text" name="googleplus_url" placeholder="Enter googleplus url" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Email Url</label>
                                            <input class="form-control" type="text" name="mail_url" placeholder="Enter email url" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Forrst Url</label>
                                            <input class="form-control" type="text" name="forrst_url" placeholder="Enter forrst url" />
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