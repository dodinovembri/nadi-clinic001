<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'clinic001_teams';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'name', 'short_description', 'speciality', 'degres', 'training', 'office', 'work_days', 'image1', 'image2', 'image3'];
}
