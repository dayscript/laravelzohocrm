@extends('laravelzohocrm::layouts.app')
<div class="wrapper ">
  <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('vendor/laravelZohoCrm/assets/img/sidebar-2.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    @include('laravelzohocrm::partials.left-bar')
  </div>

  <div class="main-panel">
    @include('laravelzohocrm::partials.nav-bar')
    <div class="content">
      <div class="container-fluid">
        @include('laravelzohocrm::partials.dasboard-header')
        <div class="row">
          {{-- @include('laravelzohocrm::partials.stats')
          @include('laravelzohocrm::partials.tasks') --}}
        </div>
      </div>
    </div>
    @include('laravelzohocrm::partials.footer')
  </div>
</div>
@include('laravelzohocrm::partials.fixed-plugin')
