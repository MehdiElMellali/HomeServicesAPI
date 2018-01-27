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

                    <services></services>
    </div>
</div>
@endsection