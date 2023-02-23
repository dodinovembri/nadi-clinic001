<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigSocialMediaModel extends Model
{
    protected $table = 'config_social_medias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'name', 'icon', 'link'];
}
