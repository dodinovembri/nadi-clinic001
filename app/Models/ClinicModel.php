<?php

namespace App\Models;

use CodeIgniter\Model;

class ClinicModel extends Model
{
    protected $table = 'clinic001_clinics';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'image', 'name', 'title', 'subtitle'];
}
