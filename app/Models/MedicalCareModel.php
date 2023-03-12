<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicalCareModel extends Model
{
    protected $table = 'clinic001_medical_care';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'icon', 'description'];
}
