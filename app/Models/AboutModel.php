<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'clinic001_default_about';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'description', 'motto', 'motto_by', 'our_feature', 'our_feature_by', 'image1', 'image2', 'image3', 'image4', 'image5', 'image6'];
}
