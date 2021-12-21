<?php

namespace App\Models;

use Eloquent;

class Category extends BaseModel
{
    /**
     * Class Category
     * @package App\Models
     * @mixin Eloquent
     *
     * @property integer $id
     * @property string $name
     * @property integer $active
     * @property integer $show
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'active',
        'show',
    ];
}
