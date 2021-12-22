<?php

namespace App\Http\Services;

use App\Models\BaseModel;

abstract class BaseService
{
    public function index(): array
    {

        return [];
    }

    public function show(string $what): BaseModel
    {
        return BaseModel();
    }

    public function create(array $params): void
    {

    }

    public function update(array $params): BaseModel
    {
        return BaseModel();
    }

    public function delete(array $params): void
    {

    }
}
