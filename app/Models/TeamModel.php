<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'clinic001_team';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'department_id', 'name', 'short_description', 'speciality', 'degres', 'training', 'office', 'work_days', 'image1', 'image2', 'image3', 'facebook_url', 'googleplus_url', 'mail_url', 'forrst_url'];
}
