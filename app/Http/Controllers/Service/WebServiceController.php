<?php

namespace App\Http\Controllers\service;


use App\Repositories\Services\ServiceRepository;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebServiceController extends Controller
{

    private $service;

    public function __construct(ServiceRepository $service)
    {
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
            'images' => 'mimes:png,jpg,jpeg|max:30000',
        ];
        //dd($request);
       // $data =  $request->all();
  
        $formInput=$request->except('images');

        $image=$request->images;
        if($image)
        {

            $random = rand(0, 999999);

            $imageName=$image->getClientOriginalName();
            $image->move('img',$random . "_" .  date("d-m-Y") ."_".$imageName);
            $formInput['images']=$random . "_" .  date("d-m-Y") ."_".$imageName;
          //  dd($formInput);


        }
       $this->validate($request,$rules);
       //dd($formInput);
       // dd($data);


        Service::create($formInput);

        return redirect()->route('home');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
