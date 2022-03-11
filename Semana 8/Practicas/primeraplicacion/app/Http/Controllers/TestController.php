<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController{
    //Metodos
    public function index(){
        //return "Primer controlador";

        $arrayData = array(
            "title" => "Programación Computacional IV",
            "description" => "Primera aplicación con Laravel",
            "studentName" => "Juan Antonio Villatoro Vásquez",
        );

        return View("Test/index")->with($arrayData);

    }
}
