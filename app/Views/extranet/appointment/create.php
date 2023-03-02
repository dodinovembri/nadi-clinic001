<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="keywords" content="<?= $config->keyword ?>" />
	<meta name="description" content="<?= $config->description ?>" />  
      
    <title>Appointment | <?= $config->name ?></title>
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
                        <li><a href="<?= base_url('extranet/appointment') ?>">Slider</a></li>
                        <li>Create New</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="<?= base_url('extranet/appointment/store') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-3">
                                            <label>firstname</label>
                                            <input class="form-control" type="text" name="firstname" placeholder="Enter appointment name" required />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>lastname</label>
                                            <input class="form-control" type="text" name="lastname" placeholder="Enter text 1" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>birthdate</label>
                                            <input class="form-control" type="text" name="birthdate" placeholder="Enter text 2" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>phone_number</label>
                                            <input class="form-control" type="text" name="phone_number" placeholder="Enter text 3" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>email</label>
                                            <input class="form-control" type="text" name="email" placeholder="Enter text 4" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>reason_appointment</label>
                                            <input class="form-control" type="text" name="reason_appointment" placeholder="Enter text 5" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Text Button</label>
                                            <input class="form-control" type="text" name="text_button" placeholder="Enter text button" />
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label>Button Link</label>
                                            <input class="form-control" type="text" name="button_link" placeholder="Enter button link" />
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
                                            <a href="<?= base_url('extranet/appointment') ?>"><button type="button" class="btn btn-warning">Cancel</button></a>
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