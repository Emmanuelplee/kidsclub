@extends('layouts.master')

@section('title')
    Inicio
@endsection

{{--@section('subtitle')
    Bienvenidos Niños
    <p></p>
@endsection--}}
@section('content')
    <div class="card">
        <div class="card-title" style="margin-bottom: 0px">
            <h3 style="text-align: center;">Club de Niños</h3>
            <p></p>
            <div class="card-header">
                <p></p>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/Logos.jpg" class="d-block w-100" alt="..." width="700" height="500">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/Dibujando/2.jpg" class="d-block w-100" alt="..." width="700" height="500">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/Dibujando/3.jpg" class="d-block w-100" alt="..." width="700" height="500">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/Dibujando/4.jpg" class="d-block w-100" alt="..." width="700" height="500">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/Dibujando/5.jpg" class="d-block w-100" alt="..." width="700" height="500">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-title" style="margin-bottom: 0px">
            <h3 style="text-align: center;">Academia de niños</h3>
            <p></p>
            <div class="card-header">
                <p></p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{ route('manualidad.escolar') }}">
                                <div class="text-center">
                                    <p></p>
                                    <img src="/images/Manualidades.jpg" class="rounded-circle" alt="" width="150" height="150">
                                    <p> Manualidades</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            {{--<a href="#">
                                <div class="text-center">
                                    <img src="/images/Academia.jpg" class="rounded" alt="" width="350" height="250">
                                    <p> Manualidades navideñas</p>
                                </div>
                            </a>--}}
                            <a href="{{route('inicio')}}">
                                <div class="text-center">
                                    <img src="/images/logos.jpg" class="rounded" alt="..." width="300" height="200">
                                </div>
                            </a>
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <a href="{{ route('coloreables.inicio') }}">
                                <div class="text-center"><p></p>
                                    <img src="/images/Coloreables.jpg" class="rounded-circle" alt="" width="150" height="150">
                                    <p>Coloreables</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    <p></p>

@endsection


