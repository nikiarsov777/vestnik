<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

abstract class BaseModel extends Model
{
//    use HasFactory;

    public function __construct()
    {
        parent::__construct();
    }
}
