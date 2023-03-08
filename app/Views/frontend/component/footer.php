<div class="footer_container">
    <div class="footer">
        <ul class="footer_banner_box_container clearfix">
            <?php foreach ($footer_features as $key => $value) { ?>
                <li class="footer_banner_box <?php if ($key == 0) { ?> super_light_blue animated_element animation-fadeIn duration-500 <?php  } ?> <?php if ($key == 1) { ?> light_blue animated_element animation-slideRight duration-800 delay-250 <?php } ?> <?php if ($key == 2) { ?> blue animated_element animation-slideRight200 duration-800 delay-500 <?php } ?>">
                    <h2><?= $value->title ?></h2>
                    <p><a class="icon_small_arrow right_white" href="#"><?= $value->subtitle ?></a></p>
                </li>
            <?php } ?>
        </ul>
        <div class="footer_box_container clearfix">
            <div class="footer_box">
                <h3 class="box_header"><?= $config->name ?></h3>
                <p class="info"><?= $config->short_description ?></p>
                <ul class="footer_contact_info_container clearfix">
                    <li class="footer_contact_info_row">
                        <div class="footer_contact_info_left"><?= $config_menu->address ?></div>
                    </li>
                    <p class="info"><?= $config->address ?></p>
                </ul>
                <ul class="social_icons clearfix">
                    <li><a class="social_icon facebook" href="<?= $config->facebook_url ?>" target="_blank">&nbsp;</a></li>
                    <li><a class="social_icon googleplus" href="<?= $config->googleplus_url ?>" target="_blank">&nbsp;</a></li>
                    <li><a class="social_icon mail" href="<?= $config->mail_url ?>" target="_blank">&nbsp;</a></li>
                    <li><a class="social_icon forrst" href="<?= $config->forrst_url ?>" target="_blank">&nbsp;</a></li>
                </ul>
            </div>
            <div class="footer_box">
                <div class="clearfix">
                    <div class="header_left">
                        <h3 class="box_header">
                            <?= ucwords($config_menu->latest_post) ?>
                        </h3>
                    </div>
                    <div class="header_right">
                        <a href="#" id="footer_recent_posts_prev" class="scrolling_list_control_left icon_small_arrow left_white"></a>
                        <a href="#" id="footer_recent_posts_next" class="scrolling_list_control_right icon_small_arrow right_white"></a>
                    </div>
                </div>
                <div class="scrolling_list_wrapper">
                    <ul class="scrolling_list footer_recent_posts">
                        <?php foreach ($blogs as $key => $value) { ?>
                            <li class="icon_small_arrow right_white">
                                <a href="<?php base_url($trial_name . '/blog/show/' . $value->id) ?>">
                                    <?= $value->title ?>
                                </a>
                                <abbr title="<?= $value->date ?>" class="timeago"><?= $value->date ?></abbr>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="footer_box last">
                <div class="clearfix">
                    <div class="header_left">
                        <h3 class="box_header">
                            <?= ucwords($config_menu->latest_tweet) ?>
                        </h3>
                    </div>
                    <div class="header_right">
                        <a href="#" id="latest_tweets_prev" class="scrolling_list_control_left icon_small_arrow left_white"></a>
                        <a href="#" id="latest_tweets_next" class="scrolling_list_control_right icon_small_arrow right_white"></a>
                    </div>
                </div>
                <div class="scrolling_list_wrapper">
                    <ul class="scrolling_list latest_tweets">
                        <?php foreach ($tweets as $key => $value) { ?>
                            <li class="icon_small_arrow right_white">
                                <p><?= $value->description ?><a href="<?= $value->link ?>" target="_blank"><?= $value->link ?></a><abbr title="<?= $value->date ?>" class="timeago"><?= $value->date ?></abbr></p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright_area clearfix">
            <div class="copyright_left">
                <?= $config->copyright ?>
            </div>
            <div class="copyright_right">
                <a class="scroll_top icon_small_arrow top_white" href="#top" title="Scroll to top"><?= ucwords($config_menu->top) ?></a>
            </div>
        </div>
    </div>
</div>