<?php

namespace App\Models;

use CodeIgniter\Model;

class AppointmentModel extends Model
{
    protected $table = 'clinic001_appointment';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'department_id', 'name', 'date_of_birth', 'phone_number', 'email', 'appointment_reason'];
}
