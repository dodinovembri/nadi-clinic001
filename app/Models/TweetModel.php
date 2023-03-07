<?php

namespace App\Models;

use CodeIgniter\Model;

class TweetModel extends Model
{
    protected $table = 'clinic001_default_tweets';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'date', 'description', 'link'];
}
