<?php

namespace App\Http\Services;


use App\Models\BaseModel;
use App\Models\User;

class UserService extends BaseService
{

    public function __construct()
    {
        $this->params = [];
    }

    public function index(): array
    {

        $this->params['users'] = User::orderBy('first_name')
                        ->orderBy('last_name')
                        ->orderBy('email')
                        ->get();


        return $this->params;
    }

    public function show(string $id)
    {
        return User::where('id', $id)->first();
    }

    public function create(array $params): void
    {

    }

    public function update(array $params): ?BaseModel
    {

    }

    public function delete(array $params): void
    {

    }
}
