<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualidadesControler extends Controller
{
    //
    public function dashboard(){
        return view('inicio');
    }

    public function index(){
        return view('manualidades.index');
    }
    /******MANUALIDADES ESCOLARES******/
    public function escolar(){
        return view('manualidades.escolar');
    }
    public function bolamundo(){
        return view('manualidades.escolar.bolamundo');
    }
    public function huevospintados(){
        return view('manualidades.escolar.huevospintados');
    }
    public function pulsera(){
        return view('manualidades.escolar.pulsera');
    }
    public function sujetalibros(){
        return view('manualidades.escolar.sujetalibros');
    }
    public function antorcha(){
        return view('manualidades.escolar.antorcha');
    }
    public function comedero(){
        return view('manualidades.escolar.comedero');
    }
    public function dedogoma(){
        return view('manualidades.escolar.dedogoma');
    }
    public function instrumento(){
        return view('manualidades.escolar.instrumento');
    }

    /******mANUALIDADES NAVIDEÑAS*******/
    public function navidad(){
        return view('manualidades.navidad');
    }
    /*******MANUALIDADES DE CUMPLEAÑOS*******/
    public function cumple(){
        return view('manualidades.cumple');
    }
}
