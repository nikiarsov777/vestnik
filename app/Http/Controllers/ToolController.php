<?php

namespace App\Http\Controllers;

use App\Http\Services\ToolService;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(array $data)
    {

    }

    public function getSchools()
    {
//        $schools = [
//            '102 Бачо Киро2',
//            '133 Ал. Пушкин',
//            '144 Народни Будители',
//            'Други'
//        ];

        $toolService = new ToolService();
        $schools = $toolService->getSchools();

        return response()->json($schools, 202,
            [
                'Content-Type' => 'application/json',
                'Charset' => 'utf-8'
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
