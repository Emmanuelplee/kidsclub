@extends('layouts.master')

@section('title')
    Manualidades escolares instrumento
@endsection

{{--@section('subtitle')
    Bienvenidos Niños
    <p></p>
@endsection--}}
@section('content')
    <div class="card">
        <div class="card-title" style="margin-bottom: 0px">
            <p></p>
            <div class="text-center"><h2>Instrumento</h2>
                <h3>Manualidades infantiles para disfrutar</h3>
            </div>
            <div class="card-header">
                <p></p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="text-sm-left">¡Ten listos materiales reciclados para preparar los instrumentos musicales más divertidos y respetuosos con el medio ambiente. !</p>
                            <p class="text-md-left">Necesitarás botellas de plástico viejas, cinta y pinturas, además de seguir las instrucciones con atención. ¡Prepárate para celebrar la Hora del Planeta con Pocoyo y sus amigos!</p>
                            {{--Lista--}}
                            <div class="card text-white bg-danger mb-3" style="max-width: 40rem;">
                                <div class="card-header"><h5 class="card-title">Materiales que vamos a necesitar:</h5></div>
                                <div class="card-body">
                                    <ul>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> 3 botellas de plástico
                                            transparente pequeñas con sus tapones
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> 3 palillos chinos</li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Punzón y superficie
                                            para punzonar
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Cinta adhesiva de
                                            varios colores
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Cuentas, cascabeles,
                                            arroz, garbanzos… (cosas variadas que suenen, mejor si son de colores)
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Algodón o papel de
                                            periódico
                                        </li>
                                        <li><i class="fa fa-angle-right" aria-hidden="true"></i> Tijeras</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="text-center"><p></p>
                                <hr>
                                <img src="/images/Manualidades/Escolares/instrumentos.jpg" class="rounded mx-auto d-block" alt="..." width="250" height="200">
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
                        <img src="/images/Manualidades/Escolares/instrumentos/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>CONSEGUIR</h4>Consigue 3 botellas pequeñas de plástico transparente usadas (y lavadas), con sus tapones. Consigue 3 palillos chinos usados (y lavados).</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/instrumentos/2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>HACER UN AGUJERO</h4>Con la ayuda de un punzón, haz un agujero en el centro de cada tapón y ensánchalo. No te olvides de poner debajo una superficie blandita para trabajar, como fieltro grueso o corcho.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/instrumentos/3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>INSERTAR</h4>Introduce un palillo chino por cada agujero hasta más o menos la mitad. Cierra las botellas con los tapones y comprueba que el palillo llega hasta el fondo de ésta. Abre otra vez las botellas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/instrumentos/4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>RELLENAR</h4>Rellena cada botella con diferentes cosas. Puedes meter en la primer pequeñas cuentas o arroz, sonará como lluvia. En la segunda mete cuentas o cascabeles medianos o garbanzos; y en la tercera, cascabeles gordos o piedrecitas. Cada una te dará un sonido diferente. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/instrumentos/5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>CUBRIR</h4>Cierra las botellas con los tapones. Recubre la parte del palillo que queda por fuera con algodón o papel de periódico para que quede blandito.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="/images/Manualidades/Escolares/instrumentos/6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><h4>FORRAR</h4>Forra todo el mango con cinta adhesiva de colores, fijando el recubrimiento blandito al tapón y el tapón a la botella para que no se abra mientras…¡haces música!</p>
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
