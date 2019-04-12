<?php

namespace dayscript\laravelZohoCrm\Controllers;

use App\Http\Controllers\Controller;
use dayscript\laravelZohoCrmModules\ZohoModules;
use dayscript\laravelZohoCrm\laravelZohoCrm;



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
    public function edit($module){
      $vars = [];
      $zoho = new laravelZohoCrm;
      $zoho->setModule($module);
      $zoho->getModule();
      $vars['module'] = $zoho->response;
      return view('laravelzohocrm::modules.edit', compact('vars'));
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
