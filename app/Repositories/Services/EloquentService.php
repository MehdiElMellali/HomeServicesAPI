<?php

namespace  App\Repositories\Services;

use App\Service;

class EloquentService implements ServiceRepository
{
    /**
     * @var $model
     */
    private $model;




    public function __construct(Service $model)
    {
        $this->model = $model;
    }



    public function getAll()
    {
        return $this->model->all();
    }


    public function getById($id)
    {
        return $this->model->find($id);
    }


    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }


    public function update($id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * Delete a task.
     *
     * @param integer $id
     *
     * @return boolean
     */
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
}