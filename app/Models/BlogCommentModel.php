<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogCommentModel extends Model
{
    protected $table = 'clinic001_blog_comment';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'client_id', 'blog_id', 'comment_by', 'date', 'comment'];
}
