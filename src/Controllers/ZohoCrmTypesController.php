<?php

namespace dayscript\laravelZohoCrm\Controllers;

use App\Http\Controllers\Controller;
use dayscript\laravelZohoCrmTypes\ZohoTypes;


class ZohoCrmTypesController extends Controller
{

  /*
  *
  */
  public function index(){

    return view('laravelzohocrm::types.index');

  }

  /*
  *
  */
  public function create(){

    return view('laravelzohocrm::types.create');

  }

  /*
  *
  */
  public function edit(){

    return view('laravelzohocrm::types.edit');

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
