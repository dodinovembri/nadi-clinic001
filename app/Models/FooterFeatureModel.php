<?php

namespace App\Models;

use CodeIgniter\Model;

class FooterFeatureModel extends Model
{
    protected $table = 'footer_features';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'subtitle'];
}
