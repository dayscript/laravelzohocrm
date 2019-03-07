<?php

namespace dayscript\laravelZohoCrm\Controllers;

use App\Http\Controllers\Controller;
use dayscript\laravelZohoCrmFields\ZohoFields;


class ZohoCrmFieldsController extends Controller
{

  /*
  *
  */
  public function index(){

    return view('laravelzohocrm::fields.index');

  }

  /*
  *
  */
  public function create(){

    return view('laravelzohocrm::fields.create');

  }

  /*
  *
  */
  public function edit(){

    return view('laravelzohocrm::fields.edit');

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
