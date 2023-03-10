<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentTimetableModel extends Model
{
    protected $table = 'clinic001_department_timetable';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'department_id', 'time', 'monday_title', 'monday_description', 'tuesday_title', 'tuesday_description', 'wednesday_title', 'wednesday_description', 'thursday_title', 'thursday_description', 'friday_title', 'friday_description', 'saturday_title', 'saturday_description', 'sunday_title', 'sunday_description'];
}
