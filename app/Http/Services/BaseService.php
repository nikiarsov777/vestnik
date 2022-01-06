<?php

namespace App\Http\Services;

use App\Models\BaseModel;
use App\Models\User;

abstract class BaseService
{
    protected $params = [];
    protected $user = null;

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

    public function setUser(User $user)
    {
        $this->user = $user;
    }
}
