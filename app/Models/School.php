<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;

/**
 * Class School
 * @package App\Models
 * @mixin Eloquent
 *
 * @property integer $id
 * @property string $name
 * @property integer $active
 */
class School extends BaseModel
{
    use SoftDeletes;
    protected $table = 'schools';

    public function __construct()
    {
        parent::__construct();
    }
}
