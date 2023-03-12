<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigModel extends Model
{
    protected $table = 'clinic001_config';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'app_id', 'logo', 'logo_text', 'monday_friday_opening_hours', 'saturday_opening_hours', 'sunday_opening_hours', 'name', 'short_description', 'address', 'copyright', 'url_map', 'latitude', 'longitude', 'make_appointment_description', 'favicon', 'keyword', 'description', 'facebook_url', 'googleplus_url', 'mail_url', 'forrst_url', 'twitter_url', 'phone', 'email', 'user_image_default'];
}
