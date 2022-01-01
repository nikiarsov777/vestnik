<?php

namespace App\Http\Services;

use App\Models\School;

class ToolService extends BaseService
{
    public function getSchools(string $name = ''): array
    {
        $schoolArr = [];
        $school = new School();

        if ($name) {
            $school = $school->where('name', 'like', '%' . $name . '%');
        }
        $school = $school->get();

        foreach ($school as $item) {
            $schoolArr[] = [
                'id' => $item->id,
                'name' => $item->name
            ];
        }

//        return $school->get()->pluck('name')->toArray();
        return $schoolArr;
    }
}
