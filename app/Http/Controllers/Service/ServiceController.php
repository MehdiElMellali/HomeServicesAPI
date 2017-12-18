<?php

namespace App\Http\Controllers\Service;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Storage;
use App\Transformers\ServiceTransformer;

class ServiceController extends ApiController
{


    public function __construct(){
        parent::__construct();
        $this->middleware('transform.input:'.ServiceTransformer::class)->only(['store','update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return $this->showAll($service);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return $this->showOne($service);
    }

   /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'images' => 'required',
        ];

        $this->validate($request,$rules);
        $data =  $request->all();
        $data['images'] = $request->images->store('');

        $service = Service::create($data);

        return $this->showOne($service);
    }
     /**
      *  Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Service $service)
    {
             // dd($service->title);
        if ($request->hasFile('images')) {
          
              Storage::delete($service->images);
             $service->images = $request->images->store('');
 
        }
       $service->update();

        return $this->showOne($service);
    }
      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        Storage::delete($service->images);
        return $this->showOne($service);
    }
}
