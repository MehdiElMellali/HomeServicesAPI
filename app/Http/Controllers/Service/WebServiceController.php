<?php

namespace App\Http\Controllers\service;


use App\Http\Controllers\WebAbstractController;
use App\Http\Requests\Service\ServiceStore;
use App\Repositories\Services\ServiceInterface;
use App\Service;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class WebServiceController extends WebAbstractController
{
    use ValidatesRequests;

    protected $service;

    public function __construct(Service $model ,ServiceInterface $service)
    {
        parent::__construct($model);
        $this->service = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = $this->service->getAll();
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.addService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'images' => 'required',
            'image' => 'required'
        ];
      //  dd($request);
        $this->validate($request,$rules);
        $data = $this->uploadFile($request,'images');
        $datas = $this->uploadFile($request,'image');
        $item =  $this->service->saveOrUpdate($datas , null);
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // $item =  $this->storeOrUpdate($request , $id , true);
      //  dd($request);

        $item =  $this->service->saveOrUpdate($request , $id);
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =  $this->service->delete($id);
        return redirect()->route('services.index');
    }


}
