<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigMenuModel extends Model
{
    protected $table = 'config_menus';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'home', 'blog', 'page', 'about', 'our-doctor', 'department', 'timetable', 'gallery', 'contact', 'latest-news', 'make-an-appointment', 'medicenter-clinic', 'latest-post', 'latest-tweet', 'our-motto', 'our-feature', 'why-choose-medicenter', 'meet-the-team', 'category', 'most-commented', 'most-viewed', 'leave-a-reply', 'search-placeholder', 'photostream', 'archive', 'send', 'top', 'read-more', 'visit-link', 'reply', 'online-appointment-form'];
}
