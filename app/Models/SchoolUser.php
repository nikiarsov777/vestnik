<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;

class SchoolUser extends BaseModel
{
    use SoftDeletes;

    protected $table = 'school_user';
}
