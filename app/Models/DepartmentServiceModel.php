<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentServiceModel extends Model
{
    protected $table = 'clinic001_department_service';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'department_id', 'description', 'price'];
}
