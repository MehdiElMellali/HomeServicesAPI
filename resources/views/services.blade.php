@extends('layouts.welcome')

@section('header')
@endsection
@section('content')
<div class="theme-page padding-bottom-70">
    <div class="row gray full-width page-header vertical-align-table">
        <div class="row full-width padding-top-bottom-50 vertical-align-cell">
            <div class="row">
                <div class="page-header-left">
                    <h1>OUR SERVICES</h1>
                </div>
                <div class="page-header-right">
                    <div class="bread-crumb-container">
                        <label>You Are Here:</label>
                        <ul class="bread-crumb">
                            <li>
                                <a title="Home" href="index.html">
                                    HOME
                                </a>
                            </li>
                            <li class="separator">
                                &#47;
                            </li>
                            <li>
                                OUR SERVICES
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="row">
            <ul class="services-list clearfix padding-top-70">
                <li>
                    <a href="service_interior_renovation.html" title="Interior Renovation">
                        <img src="{{Request::root()}}/design/images/samples/390x260/image_01.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="service_interior_renovation.html" title="Interior Renovation">INTERIOR RENOVATION</a></h4>
                    <p>We can help you bring new life to existing rooms and develop unused spaces.</p>
                </li>
                <li>
                    <a href="service_design_build.html" title="Design and Build">
                        <img src="{{Request::root()}}/design/images/samples/390x260/image_02.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="service_design_build.html" title="Design and Build">DESIGN AND BUILD</a></h4>
                    <p>From initial design and project specification to archieving a high end finish.</p>
                </li>
                <li>
                    <a href="service_tiling_painting.html" title="Tiling and Painting">
                        <img src="{{Request::root()}}/design/images/samples/390x260/image_03.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="service_tiling_painting.html" title="Tiling and Painting">TILING AND PAINTING</a></h4>
                    <p>We offer quality tiling and painting solutions for interior and exterior.</p>
                </li>
                <li>
                    <a href="service_paver_walkways.html" title="Paver Walkways">
                        <img src="{{Request::root()}}/design/images/samples/390x260/image_04.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="service_interior_renovation.html" title="PAVER WALKWAYS">PAVER WALKWAYS</a></h4>
                    <p>Brick pavers define beauty, elegance and durability for driveways, patios and walkways.</p>
                </li>
                <li>
                    <a href="service_household_repairs.html" title="Household Repairs">
                        <img src="{{Request::root()}}/design/images/samples/390x260/image_05.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="service_design_build.html" title="Household Repairs">HOUSEHOLD REPAIRS</a></h4>
                    <p>We offer affordable and reliable repairs and improvements to the home.</p>
                </li>
                <li>
                    <a href="service_solar_systems.html" title="Solar Systems">
                        <img src="{{Request::root()}}/design/images/samples/390x260/image_06.jpg" alt="">
                    </a>
                    <h4 class="box-header"><a href="service_tiling_painting.html" title="Solar Systems">SOLAR SYSTEMS</a></h4>
                    <p>Generate cheap, green electricity from sunlight using photovoltaic cells.</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection