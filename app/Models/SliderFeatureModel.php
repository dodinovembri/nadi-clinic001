<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderFeatureModel extends Model
{
    protected $table = 'slider_features';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'description'];
}