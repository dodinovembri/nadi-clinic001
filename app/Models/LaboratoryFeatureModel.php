<?php

namespace App\Models;

use CodeIgniter\Model;

class LaboratoryFeatureModel extends Model
{
    protected $table = 'clinic001_laboratory_feature';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'icon', 'description'];
}
