<?php

namespace  App\Repositories\Services;


use App\Repositories\AbstractEloquent;
use App\Service;
use App\Traits\UploadTrait;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;


class EloquentService extends AbstractEloquent implements ServiceInterface
{
    use  ValidatesRequests,UploadTrait;
    /**
     * @var $model
     */
    protected $model;




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

    public function delete($id)
    {
        $item  = $this->getById($id);
        Storage::delete($item->images);
        return $this->model->find($id)->delete();
    }



    public function saveOrUpdate($request, $id = null){
        if($id === null){
            return $this->createNew($request);
        }
        return $this->updateExist($request , $id);
    }

    public function updateExist($request  , $id){
        $item  = $this->getById($id);
        if ($request->hasFile('images')) {
            Storage::delete($item->images);
            $img = $this->uploadFile($request,'images');
           // dd($img['images']);
            $item->images = $img['images'];
        }
        if ($request->hasFile('image')) {
            Storage::delete($item->images);
            $img = $this->uploadFile($request,'image');
            // dd($img['images']);
            $item->images = $img['image'];
        }
        $item->title = $request->title;
        $item->description = $request->description;
      //    dd($item);
        if($item){
            $item->save();
            return $item;
        }
        return false;
    }

    public function createNew($request){

        $this->model->create($request);
    }
}