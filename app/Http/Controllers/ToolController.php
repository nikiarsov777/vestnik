<?php

namespace App\Http\Controllers;

use App\Http\Services\ToolService;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(array $data)
    {

    }

    public function getSchools(string $name)
    {
        $toolService = new ToolService();
        $schools = $toolService->getSchools($name);

        return response()->json($schools, 202,
            [
                'Content-Type' => 'application/json',
                'Charset' => 'utf-8'
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }

    public function getRoles(string $name)
    {
        $toolService = new ToolService();
        $schools = $toolService->getRoles($name);

        return response()->json($schools, 202,
            [
                'Content-Type' => 'application/json',
                'Charset' => 'utf-8'
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
