<?php

namespace App\Models;

use CodeIgniter\Model;

class FooterFeatureModel extends Model
{
    protected $table = 'clinic001_footer_feature';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'title', 'subtitle'];
}
