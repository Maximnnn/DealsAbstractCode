<?php

namespace App\Repositories;

use App\Models\Model;

class Repository implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Get all instances of model
    public function all(): array
    {
    }

    // create a new record in the database
    public function create(array $data): Model
    {
        $model = get_class($this->model);
        return new $model($data);
    }

    // update record in the database
    public function update(array $data, $id): Model
    {
    }

    // remove record from the database
    public function delete($id): bool
    {
        return true;
    }

    // show the record with the given id
    public function show($id): Model
    {
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
    }
}