@extends('admin.layout.admin')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight ecommerce">


        <div class="ibox-content m-b-sm border-bottom">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="product_name">Product Name</label>
                        <input type="text" id="product_name" name="product_name" value="" placeholder="Product Name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label" for="price">Price</label>
                        <input type="text" id="price" name="price" value="" placeholder="Price" class="form-control">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label" for="quantity">Quantity</label>
                        <input type="text" id="quantity" name="quantity" value="" placeholder="Quantity" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="control-label" for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" selected>Enabled</option>
                            <option value="0">Disabled</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-content">

                        <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                            <thead>
                            <tr>

                                <th data-toggle="true">Product Name</th>
                                <th data-hide="phone">Model</th>
                                <th data-hide="all">Description</th>
                                <th data-hide="phone">Status</th>
                                <th class="text-right" data-sort-ignore="true">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                             @forelse($services as $service)
                                <tr>
                                    <td>
                                            {{$service->title}}
                                    </td>
                                    <td>
                                        Model 1
                                    </td>
                                    <td>
                                            {!! $service->description !!}
                                    </td>
                                    <td>
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right">
                                        <form class="" action="{{route('services.destroy',$service->id)}}" method="post">
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="btn-group">
                                            <a href="{{route('services.edit',$service->id)}}"  class="btn-white btn btn-xs">Edit</a>
                                        </div>
                                            <div class="btn-group">
                                                <input type="submit" class="btn-red btn btn-xs" onclick="return confirm('Are you sure to delete this data');" name="name" value="delete">
                                        </div>
                                        </form>
                                    </td>
                                </tr>
                            @empty

                                <h1>No Services</h1>

                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
