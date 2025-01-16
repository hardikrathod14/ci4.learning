<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['title', 'description'];
}
