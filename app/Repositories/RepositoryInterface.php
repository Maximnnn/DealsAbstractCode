<?php

namespace App\Repositories;

use App\Models\Model;

interface RepositoryInterface
{
    public function all(): array;

    public function create(array $data): Model;

    public function update(array $data, $id): Model;

    public function delete($id): bool;

    public function show($id): Model;
}