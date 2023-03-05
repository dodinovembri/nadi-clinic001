<?php

namespace App\Models;

use CodeIgniter\Model;

class AppointmentTypeModel extends Model
{
    protected $table = 'clinic001_appointment_types';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'icon', 'name', 'description', 'link'];
}
