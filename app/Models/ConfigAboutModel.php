<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigAboutModel extends Model
{
    protected $table = 'config_about';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'description', 'motto', 'motto_by', 'our_feature', 'our_feature_by'];
}
