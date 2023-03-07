<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientConfigModel extends Model
{
    protected $table = 'clinic001_default_client_config';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'client_id', 'app_id', 'domain_live_url', 'trial_access_name', 'is_production'];
}
