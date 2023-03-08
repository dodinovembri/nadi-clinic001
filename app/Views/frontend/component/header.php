<div class="header_container">
    <div class="header clearfix">
        <div class="header_left">
            <a href="<?= base_url('/'.$trial_name) ?>">
                <img src="<?= base_url('assets/images/logo/' . $config->logo) ?>" alt="logo" />
                <span class="logo"><?= $config->logo_text ?></span>
            </a>
        </div>
        <ul class="sf-menu header_right">
            <li><a href="<?= base_url('/' . $trial_name) ?>"><?= strtoupper($config_menu->home) ?></a></li>
            <li><a href="<?= base_url($trial_name . '/blog') ?>"><?= strtoupper($config_menu->blog) ?></a>
            </li>
            <li class="submenu">
                <a href="#"><?= strtoupper($config_menu->page) ?></a>
                <ul>
                    <li><a href="<?= base_url($trial_name . '/about') ?>"><?= ucwords($config_menu->about) ?></a></li>
                    <li><a href="<?= base_url($trial_name . '/doctor') ?>"><?= ucwords($config_menu->our_doctor) ?></a></li>
                    <li><a href="<?= base_url($trial_name . '/medical-care') ?>"><?= ucwords($config_menu->medical_care) ?></a></li>
                    <li><a href="<?= base_url($trial_name . '/ext-login') ?>"><?= ucwords($config_menu->signin) ?></a></li>
                </ul>
            </li>
            <li><a href="<?= base_url($trial_name . '/department') ?>"><?= strtoupper($config_menu->department) ?></a></li>
            <li><a href="<?= base_url($trial_name . '/timetable') ?>"><?= strtoupper($config_menu->timetable) ?></a></li>
            <li><a href="<?= base_url($trial_name . '/gallery') ?>"><?= strtoupper($config_menu->gallery) ?></a></li>
            <li><a href="<?= base_url($trial_name . '/contact') ?>"><?= strtoupper($config_menu->contact) ?></a></li>
        </ul>
        <div class="mobile_menu">
            <select>
                <option value="<?= base_url('/'. $trial_name) ?>"><?= strtoupper($config_menu->home) ?></option>
                <option value="<?= base_url($trial_name . '/blog') ?>"><?= strtoupper($config_menu->blog) ?></option>
                <option value="#"><?= strtoupper($config_menu->page) ?></option>
                <option value="<?= base_url($trial_name . '/about') ?>">- <?= ucwords($config_menu->about) ?></option>
                <option value="<?= base_url($trial_name . '/doctor') ?>">- <?= ucwords($config_menu->our_doctor) ?></option>
                <option value="<?= base_url($trial_name . '/medical-care') ?>">- <?= ucwords($config_menu->medical_care) ?></option>
                <option value="<?= base_url($trial_name . '/ext-login') ?>">- <?= ucwords($config_menu->signin) ?></option>
                <option value="<?= base_url($trial_name . '/department') ?>"><?= strtoupper($config_menu->department) ?></option>
                <option value="<?= base_url($trial_name . '/timetable') ?>"><?= strtoupper($config_menu->timetable) ?></option>
                <option value="<?= base_url($trial_name . '/gallery') ?>"><?= strtoupper($config_menu->gallery) ?></option>
                <option value="<?= base_url($trial_name . '/contact') ?>"><?= strtoupper($config_menu->contact) ?></option>
            </select>
        </div>
    </div>
</div>