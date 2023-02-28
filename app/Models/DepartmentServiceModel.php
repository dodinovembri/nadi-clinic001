<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentServiceModel extends Model
{
    protected $table = 'department_services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'department_id', 'description', 'price'];
}
