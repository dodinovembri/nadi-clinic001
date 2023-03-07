<?php

namespace App\Models;

use CodeIgniter\Model;

class AppointmentModel extends Model
{
    protected $table = 'clinic001_default_appointments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'firstname', 'lastname', 'birthdate', 'phone_number', 'email', 'reason_appointment'];
}
