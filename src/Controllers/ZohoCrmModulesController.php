<?php

namespace dayscript\laravelZohoCrm\Controllers;

use App\Http\Controllers\Controller;
use dayscript\laravelZohoCrmModules\ZohoModules;


class ZohoCrmModulesController extends Controller
{

    /*
    *
    */
    public function index(){

      return view('laravelzohocrm::modules.index');
    }

    /*
    *
    */
    public function create(){

      return view('laravelzohocrm::modules.create');
    }

    /*
    *
    */
    public function edit(){
      return view('laravelzohocrm::modules.create');
    }

    /*
    *
    */
    public function store(){

    }

    /*
    *
    */
    public function update(){

    }

    /*
    *
    */
    public function delete(){

    }

}
