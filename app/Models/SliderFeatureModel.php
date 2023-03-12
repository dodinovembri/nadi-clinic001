<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderFeatureModel extends Model
{
    protected $table = 'clinic001_slider_feature';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'title', 'description'];
}
