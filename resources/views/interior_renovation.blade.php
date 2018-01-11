@extends('layouts.welcome')

@section('header')
@endsection
@section('content')
<div class="theme-page">
    <div class="row gray full-width page-header vertical-align-table">
        <div class="row full-width padding-top-bottom-50 vertical-align-cell">
            <div class="row">
                <div class="page-header-left">
                    <h1>INTERIOR RENOVATION</h1>
                </div>
                <div class="page-header-right">
                    <div class="bread-crumb-container">
                        <label>You Are Here:</label>
                        <ul class="bread-crumb">
                            <li>
                                <a title="Our Services" href="services.html">
                                    OUR SERVICES
                                </a>
                            </li>
                            <li class="separator">
                                &#47;
                            </li>
                            <li>
                                INTERIOR RENOVATION
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="row margin-top-70">
            <div class="column column-1-4">
                <ul class="vertical-menu">
                    <li class="selected">
                        <a href="service_interior_renovation.html" title="Interior Renovation">
                            Interior Renovation
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="service_design_build.html" title="Design and Build">
                            Design and Build
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="service_tiling_painting.html" title="Tiling and Painting">
                            Tiling and Painting
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="service_paver_walkways.html" title="Paver Walkways">
                            Paver Walkways
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="service_household_repairs.html" title="Household Repair">
                            Household Repair
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                    <li>
                        <a href="service_solar_systems.html" title="Solar Systems">
                            Solar Systems
                            <span class="template-arrow-menu"></span>
                        </a>
                    </li>
                </ul>
                <div class="call-to-action sl-small-wallet page-margin-top">
                    <h4>COST CALCULATOR</h4>
                    <p class="description t1">Use our form to estimate the initial cost of renovation or installation.</p>
                    <a class="more" href="cost_calculator.html" title="REQUEST A QUOTE">REQUEST A QUOTE</a>
                </div>
                <h6 class="box-header page-margin-top">Download Brochures</h6>
                <ul class="buttons margin-top-30">
                    <li class="template-arrow-circle-down">
                        <a href="#" title="Download Brochure">Download Brochure</a>
                    </li>
                    <li class="template-arrow-circle-down">
                        <a href="#" title="Download Summary">Download Summary</a>
                    </li>
                </ul>
            </div>
            <div class="column column-3-4">
                <div class="row">
                    <div class="column column-1-2">
                        <a href="{{Request::root()}}/design/images/samples/750x500/image_01.jpg" class="prettyPhoto re-preload" title="Interior Renovation">
                            <img src='{{Request::root()}}/design/images/samples/480x320/image_01.jpg' alt='img'>
                        </a>
                    </div>
                    <div class="column column-1-2">
                        <a href="{{Request::root()}}/design/images/samples/750x500/image_07.jpg" class="prettyPhoto re-preload" title="Interior Renovation">
                            <img src='{{Request::root()}}/design/images/samples/480x320/image_07.jpg' alt='img'>
                        </a>
                    </div>
                </div>
                <div class="row page-margin-top">
                    <div class="column-1-1">
                        <h3 class="box-header">SERVICE OVERVIEW</h3>
                        <p class="description t1">When it comes to choosing a renovator to transfor the interior of your home, quality and trust should never be compromised.
                        Working with a professional is an absolute must. With over 15 years experience and a real focus on customer satisfaction, you can rely
                        on us for your next renovation, driveway sett on home repair. Our installations are carried out by fully trained staff to the highest
                        professional standards. Always on time and on budget.</p>
                        <p class="description t1">Renovate has proven results for setting exceptional standards in cost control, planning, scheduling and project safety. We have
                        experience that gives us a competitive advantage over others in our field.</p>
                        <h3 class="box-header page-margin-top">PLAN AND DETAILS</h3>
                        <table class="margin-top-40">
                            <tbody>
                                <tr>
                                    <td>Prepare Home Remodeling Ideas</td>
                                    <td>$600 - $1150</td>
                                </tr>
                                <tr>
                                    <td>Specify Materials</td>
                                    <td>$250 - $350</td>
                                </tr>
                                <tr>
                                    <td>Paint Rooms</td>
                                    <td>$2.50 - $3.50 Per Square Feet</td>
                                </tr>
                                <tr>
                                    <td>Install Interior Door</td>
                                    <td>$150 - $350 Per Door</td>
                                </tr>
                                <tr>
                                    <td>Install Light Switch</td>
                                    <td>$100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row page-margin-top padding-bottom-70">
                    <div class="column column-1-2">
                        <h4 class="box-header">WHY CHOOSE US</h4>
                        <p class="description t1 margin-top-34">With over 15 years experience and a real focus on customer satisfaction, you can rely on us for your next project.
                        We provide a professional renovation and installation services with a real focus on customer satisfaction.</p>
                        <ul class="list margin-top-20">
                            <li class="template-bullet">Financial Responsibility to Our Clients</li>
                            <li class="template-bullet">Superior Quality and Craftsmanship</li>
                            <li class="template-bullet">Quality and Value to the <a href="projects.html">Projects We Deliver</a></li>
                            <li class="template-bullet">Highest Standards in <a href="cost_calculator.html">Cost Control</a></li>
                            <li class="template-bullet">On Time and on Budget</li>
                            <li class="template-bullet">Real Focus on Customer Satisfaction</li>
                        </ul>
                    </div>
                    <div class="column column-1-2">
                        <h4 class="box-header">POPULAR QUESTIONS</h4>
                        <ul class="accordion margin-top-40 clearfix">
                            <li>
                                <div id="accordion-renovation-cost">
                                    <h5>Why does a renovation project cost so much?</h5>
                                </div>
                                <p class="description t1">Morbi nulla tortor, degnissim at node cursus euismod est arcu.
                                Nomad turbina uter vehicula justo magna paetos in accumsan
                                tempus, terminal ullamcorper a quam suscipit.</p>
                            </li>
                            <li>
                                <div id="accordion-project-timeline">
                                    <h5>What is the timeline for the project?</h5>
                                </div>
                                <p class="description t1">Morbi nulla tortor, degnissim at node cursus euismod est arcu.
                                Nomad turbina uter vehicula justo magna paetos in accumsan
                                tempus, terminal ullamcorper a quam suscipit.</p>
                            </li>
                            <li>
                                <div id="accordion-construction-budget">
                                    <h5>What is the total budget for construction?</h5>
                                </div>
                                <p class="description t1">Morbi nulla tortor, degnissim at node cursus euismod est arcu.
                                Nomad turbina uter vehicula justo magna paetos in accumsan
                                tempus, terminal ullamcorper a quam suscipit.</p>
                            </li>
                            <li>
                                <div id="accordion-project-initiation">
                                    <h5>How is renovation project initiated?</h5>
                                </div>
                                <p class="description t1">Morbi nulla tortor, degnissim at node cursus euismod est arcu.
                                Nomad turbina uter vehicula justo magna paetos in accumsan
                                tempus, terminal ullamcorper a quam suscipit.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection