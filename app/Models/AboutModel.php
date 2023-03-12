<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'clinic001_about';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'title', 'description', 'motto', 'motto_by', 'our_feature', 'our_feature_by', 'image1', 'image2', 'image3'];
}
