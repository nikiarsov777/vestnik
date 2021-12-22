<?php

namespace App\Http\Services;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;

abstract class BaseService
{
    protected $params = [];

    public function index(): array
    {

        return [];
    }

    public function show(string $name)
    {
        return BaseModel();
    }

    public function create(array $params): void
    {

    }

    public function update(array $params): ?BaseModel
    {
        return BaseModel();
    }

    public function delete(array $params): void
    {

    }
}
