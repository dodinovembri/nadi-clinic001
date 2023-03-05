<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicalCareModel extends Model
{
    protected $table = 'clinic001_medical_cares';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'icon', 'description'];
}
