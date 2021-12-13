<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * Class Role
 * @package App\Models
 * @mixin Eloquent
 *
 * @property integer $id
 * @property string $name
 */
class Role extends Model
{
    use HasFactory;
}
