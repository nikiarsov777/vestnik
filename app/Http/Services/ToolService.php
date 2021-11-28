<?php

namespace App\Http\Services;

use App\Models\School;

class ToolService extends BaseService
{
    public function getSchools(): array
    {
        $school = new School();

        return $school->get()->pluck('name')->toArray();
    }

}
