<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentGalleryModel extends Model
{
    protected $table = 'clinic001_department_gallery';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'department_id', 'title', 'subtitle', 'description', 'short_description', 'image', 'video_url'];
}
