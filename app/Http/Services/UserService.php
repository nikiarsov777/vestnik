<?php

namespace App\Http\Services;


use App\Models\BaseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class UserService extends BaseService
{

    public function __construct()
    {
        $this->params = [];
    }

    public function index(): array
    {
        if ($this->user->isAdmin()) {
            $this->params['users'] = $this->indexAdmin();
        } else if($this->user->isPrincipal()) {
            $this->params['users'] = $this->indexPrincipal($this->user->school);
        }

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
        return BaseModel();
    }

    public function delete(array $params): void
    {

    }

    public function indexAdmin(): Collection
    {

        return User::orderBy('first_name')
            ->orderBy('last_name')
            ->orderBy('email')
            ->get();
    }

    public function indexPrincipal(int $principalId): array
    {

        return User::with('schools')
            ->whereHas('schools', function($q) use($principalId) {
                $q->where('school_id', $principalId);
            })
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->orderBy('email')
            ->get();
    }
}
