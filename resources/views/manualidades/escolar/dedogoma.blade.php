@extends('layouts.master')

@section('title')
Manualidades escolares dedo de goma
@endsection

{{--@section('subtitle')
Bienvenidos Niños
<p></p>
@endsection--}}
@section('content')
<div class="card">
    <div class="card-title" style="margin-bottom: 0px">
        <p></p>
        <div class="text-center"><h2>Dedo de Goma</h2>
            <h3>Manualidades infantiles para disfrutar</h3>
        </div>
        <div class="card-header">
            <p></p>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="text-sm-left">¡Aprende a fabricar tu propio dedo de goma EVA para animar a tu equipo y pasártelo genial en el estadio. ¡Es facilísimo! Solo necesitas la platilla descargable, goma EVA de colores y ganas de sentir la emoción del deporte.!</p>
                        <p class="text-md-left">No olvides pedir ayuda a tus padres para los pasos más delicados de esta manualidad, sobre todo con el manejo de las tijeras y el pegamento. </p>
                        {{--Lista--}}
                        <div class="card text-white bg-danger mb-3" style="max-width: 40rem;">
                            <div class="card-header"><h5 class="card-title">Materiales que vamos a necesitar:</h5></div>
                            <div class="card-body">
                                <ul>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Plantilla descargable</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Bolígrafo o rotulador
                                        permanente
                                    </li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Tijeras</li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Pistola de pegamento
                                        termofusible o pegamento para goma eva
                                    </li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i> Goma eva de distintos
                                        colores
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-center"><p></p>
                            <hr>
                            <img src="/images/Manualidades/Escolares/dedogoma.jpg" class="rounded mx-auto d-block" alt="..." width="250" height="200">
                            <hr>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<p></p>
<hr>
<div class="card">
    <div class="card-header text-center">
        <h2>Paso a Paso</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 text-center">
                <div class="card" style="width: 18rem;">
                    <img src="/images/Manualidades/Escolares/dedogoma/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><h4>RECORTAR</h4>Imprime la plantilla en un papel A4 y recorta por la línea de puntos las distintas piezas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card" style="width: 18rem;">
                    <img src="/images/Manualidades/Escolares/dedogoma/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><h4>CONTORNEAR</h4>Coloca la plantilla de cada pieza sobre la goma eva del color correspondiente y marca el contorno con un rotulador.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card" style="width: 18rem;">
                    <img src="/images/Manualidades/Escolares/dedogoma/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><h4>RECORTAR</h4>Recorta las piezas de goma eva y enciende la pistola de pegamento colocándola sobre un sitio seguro.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">
                <div class="card" style="width: 18rem;">
                    <img src="/images/Manualidades/Escolares/dedogoma/4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><h4>PEGAR</h4>Coloca las piezas unas sobre otras formando el dibujo y ve pegándolas con pegamento termofusible con cuidado. Deja enfriar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<p></p>
<hr>
<div class="card">
    <div class="card-title" style="margin-bottom: 0px">
        <div class="text-center">
            <h3>Otras manualidades</h3>
            <h4>Disfruta de otras manualidades por temática</h4>

        </div>
        <p></p>
        <div class="card-header">
            <p></p>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{ route('manualidad.escolar') }}">
                            <div class="text-center">
                                <img src="/images/Manualidades/manualidades-escolares.png" class="rounded-circle" alt="" width="200" height="200">
                                <p> Manualidades escolares</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ route('manualidad.navidad') }}">
                            <div class="text-center">
                                <img src="/images/Manualidades/manualidades-navidad.png" class="rounded-circle" alt="" width="200" height="200">
                                <p> Manualidades navideñas</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ route('manualidad.cumple') }}">
                            <div class="text-center">
                                <img src="/images/Manualidades/manualidades-cumpleanos.png" class="rounded-circle" alt="" width="200" height="200">
                                <p> Manualidades de cumpleaños</p>
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
