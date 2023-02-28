<div class="header_container">
    <div class="header clearfix">
        <div class="header_left">
            <a href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/images/' . $config->logo) ?>" alt="logo" />
                <span class="logo"><?= $config->logo_text ?></span>
            </a>
        </div>
        <ul class="sf-menu header_right">
            <li><a href="<?= base_url('/') ?>"><?= strtoupper($config_menu->home) ?></a></li>
            <li><a href="<?= base_url('blog') ?>"><?= strtoupper($config_menu->blog) ?></a>
            </li>
            <li class="submenu">
                <a href="#"><?= strtoupper($config_menu->page) ?></a>
                <ul>
                    <li><a href="<?= base_url('about') ?>"><?= ucwords($config_menu->about) ?></a></li>
                    <li><a href="<?= base_url('doctor') ?>"><?= ucwords($config_menu->our_doctor) ?></a></li>
                    <li><a href="<?= base_url('medical-care') ?>"><?= ucwords($config_menu->medical_care) ?></a></li>
                </ul>
            </li>
            <li><a href="<?= base_url('department') ?>"><?= strtoupper($config_menu->department) ?></a></li>
            <li><a href="<?= base_url('timetable') ?>"><?= strtoupper($config_menu->timetable) ?></a></li>
            <li><a href="<?= base_url('gallery') ?>"><?= strtoupper($config_menu->gallery) ?></a></li>
            <li><a href="<?= base_url('contact') ?>"><?= strtoupper($config_menu->contact) ?></a></li>
        </ul>
        <div class="mobile_menu">
            <select>
                <option value="<?= base_url('/') ?>"><?= strtoupper($config_menu->home) ?></option>
                <option value="<?= base_url('blog') ?>"><?= strtoupper($config_menu->blog) ?></option>
                <option value="#"><?= strtoupper($config_menu->page) ?></option>
                <option value="<?= base_url('about') ?>">- <?= ucwords($config_menu->about) ?></option>
                <option value="<?= base_url('doctor') ?>">- <?= ucwords($config_menu->our_doctor) ?></option>
                <option value="<?= base_url('medical-care') ?>">- <?= ucwords($config_menu->medical_care) ?></option>
                <option value="<?= base_url('timetable') ?>"><?= strtoupper($config_menu->timetable) ?></option>
                <?php foreach ($departments as $key => $value) { ?>
                    <option value="<?= base_url('department/' . $value->id) ?>">- <?= $value->name ?></a></option>
                <?php } ?>
                <option value="<?= base_url('timetable') ?>"><?= strtoupper($config_menu->timetable) ?></option>
                <option value="<?= base_url('gallery') ?>"><?= strtoupper($config_menu->gallery) ?></option>
                <option value="<?= base_url('contact') ?>"><?= strtoupper($config_menu->contact) ?></option>
            </select>
        </div>
    </div>
</div>