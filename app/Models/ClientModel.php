<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'clinic001_client';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'nadi_app_client_id', 'app_id', 'domain_live_url', 'trial_access_name', 'email', 'is_production'];
}
