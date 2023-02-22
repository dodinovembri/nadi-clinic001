<?php if (session()->getFlashdata('success')) { ?>
    <div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> <?= session()->getFlashdata('success') ?>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php } else if (session()->getFlashdata('info')) { ?>
    <div class="alert alert-info" role="alert"><strong class="text-capitalize">Info!</strong> <?= session()->getFlashdata('info') ?>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php } else if (session()->getFlashdata('warning')) { ?>
    <div class="alert alert-warning" role="alert"><strong class="text-capitalize">Warning!</strong> <?= session()->getFlashdata('warning') ?>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php } else if (session()->getFlashdata('danger')) { ?>
    <div class="alert alert-danger" role="alert"><strong class="text-capitalize">Danger!</strong> <?= session()->getFlashdata('danger') ?>
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php } ?>