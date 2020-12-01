@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>EchoMeet</title>
                </head>
                <body>

                                                    <!-- CAROUSEL -->
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="http://t3.gstatic.com/images?q=tbn:ANd9GcTWoexfzoEpVYGD6LswveEBN18F_rKmR-8gluFtO29XoPhAVcPtu-0EzgsEfDC3xFghMrETTOBPA88NRyLwKMs" class="d-block w-100" alt="...">
                        <div id="carouselback" class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcT5QaIgwYppBBVj5Tl9-SsTtuOh25VAVKcl6gL8cTBXrBWhh2-l75ao9FOn2D6VYJ2y1t3QD6s-aTeOmYqcVds" class="d-block w-100" alt="...">
                        <div id="carouselback" class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="http://t1.gstatic.com/images?q=tbn:ANd9GcS8BCFhdkX3FHI9jU3cAS-T0JT7vRXgItqvI1IIsrF4q-MbzncbtGnLtvGGGhbsG0Wg6XvBOm1fFnSLMNCv3x0" class="d-block w-100" alt="...">
                        <div id="carouselback" class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                    <div class="container">
                    <h1 id="echomeet">EchoMeet</h1>
                    </div>
                    
                                    <!-- CARDS -->
                            <div class="row row-cols-1 row-cols-md-3">
                            <div class="col mb-4">
                                <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a short card.</p>
                                </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                </div>
                        
                </body>
            </html>
        </div>
    </div>
</div>
@endsection