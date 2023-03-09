<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signin | <?= $config->name ?></title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link href="<?= base_url('assets/extranet/css/themes/lite-purple.min.css') ?>" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="48x48" href="<?= base_url('assets/images/icons/favicon.png') ?>">
</head>

<body>

    <div class="auth-layout-wrap" style="background-image: url(<?= base_url('assets/images/default/background.jpg') ?>)">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4"><img src="<?= base_url('assets/images/logo/' . $config->logo) ?>" alt=""></div>
                            <?= $this->include('extranet/components/flashmessage') ?>
                            <h1 class="mb-3 text-18">Sign In</h1>
                            <form action="<?= base_url($trial_name . '/ext-auth') ?>" method="post">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input class="form-control form-control-rounded" id="email" type="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control form-control-rounded" id="password" type="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>
                            </form>
                            <div class="mt-3 text-center">
                                <a class="text-muted" href="#">
                                    <u>Forgot Password?</u>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>