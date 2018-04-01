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
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{route('services.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group"><label class="col-sm-2 control-label">Name:</label>
                                        <div class="col-sm-10"><input type="text" class="form-control" name="title" placeholder="Service name"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Price:</label>
                                        <div class="col-sm-10">
                                            <textarea  name="description">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Images :</label>
                                        <div class="col-sm-10"><input type="file" name="images[]" class="form-control" multiple></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Image :</label>
                                        <div class="col-sm-10"><input type="file" name="image" class="form-control" ></div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            
    
                            </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>

@endsection

