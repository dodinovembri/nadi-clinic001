<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentGalleryModel extends Model
{
    protected $table = 'department_galleries';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'department_id', 'title', 'subtitle', 'description', 'short_description', 'image', 'video_url'];
}
