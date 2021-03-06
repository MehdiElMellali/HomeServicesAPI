@extends('admin.layout.admin')

@section('content')


</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Product edit</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>E-commerce</a>
            </li>
            <li class="active">
                <strong>Product edit</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1"> Product info</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3"> Image Home</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <form class="form-horizontal" method="post" action="{{route('services.update', $service->id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="PATCH">
                                    <div class="form-group"><label class="col-sm-2 control-label">Name:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="title" value="{{ $service->title }}"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Price:</label>
                                        <div class="col-sm-10">
                                            <textarea  name="description">
                                                    {{ $service->description }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Images :</label>
                                        <div class="col-sm-10"><input type="file" name="images[]" class="form-control" multiple></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Image :</label>
                                        <div class="col-sm-10"><input type="file" name="image" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            
    
                            </form>
                            </div>
                        </div>
                    
                    <div id="tab-4" class="tab-pane">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Image preview
                                            </th>
                                            <th>
                                                Image url
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>



                                                @if(isset($service) && $service->images != "")

                                                    @if(is_array(json_decode($service->images)))

                                                       @foreach(json_decode($service->images) as $img)
                                                           <tr>
                                                    <td>
                                                            <br>
                                                            <img src="{{ url(env("UPLOAD_PATH")."/".$img) }}" class="thumbnail" alt="">
                                                            <br>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="{{ url(env("UPLOAD_PATH")."/".$img) }}">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                           </tr>
                                                       @endforeach
                                                        @else
                                                        <tr>
                                                            <td>
                                                                <br>
                                                                <img src="{{ url(env("UPLOAD_PATH")."/".$service->images) }}" class="thumbnail" alt="">
                                                                <br>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control" disabled value="{{ url(env("UPLOAD_PATH")."/".$service->images) }}">
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                           @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                        <tr>
                                            <th>
                                                Image preview
                                            </th>
                                            <th>
                                                Image url
                                            </th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>



                                        @if(isset($service) && $service->image != "")

                                                <tr>
                                                    <td>
                                                        <br>
                                                        <img src="{{ url(env("UPLOAD_PATH")."/".$service->image) }}" class="thumbnail" alt="">
                                                        <br>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled value="{{ url(env("UPLOAD_PATH")."/".$service->image) }}">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
            </div>
        </div>
        </div>
    </div>

</div>

@endsection

