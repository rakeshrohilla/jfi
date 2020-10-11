@extends('layouts/adminlayout')

@section('title', 'Dashboard')
@section('content')
    <!-- content -->
<!-- content block style 7 -->
<div class="w3l-about1 card card_border p-lg-5 p-3 mb-4">
    <div class="card-body py-3 p-0">
      <h3 class="block__title mb-lg-4">{{$shop->busi_name}}</h3>
      <div class="row cwp23-content">
        <div class="col-md-6 cwp23-text">
          <div class="row cwp23-text-cols">
            <div class="col-md-6 column mt-4">
              <span class="fa fa-laptop icon-fea" aria-hidden="true"></span>
              <a href="#url">Address</a>
              <p>{{$shop->landmark}}<br>{{$shop->city}}</p>
            </div>
            <div class="col-md-6 column mt-4">
              <span class="fa fa-paint-brush icon-fea" aria-hidden="true"></span>
              <a href="#url">Contact</a>
              <p>{{$shop->contact}}</p>
            </div>
            <div class="col-md-6 column mt-4">
              <span class="fa fa-signal icon-fea" aria-hidden="true"></span>
              <a href="#url">Web development</a>
              <p>Type your text here... Lorem ipsum dolor sit amet. </p>
            </div>
            <div class="col-md-6 column mt-4">
              <span class="fa fa-laptop icon-fea" aria-hidden="true"></span>
              <a href="#url">Webdesign</a>
              <p>Type your text here... Lorem ipsum dolor sit amet. </p>
            </div>
            <div class="col-md-6 mt-4">
                <p><strong>Tags: </strong>
                    <span class="tags">html5</span>
                    <span class="tags">css3</span>
                    <span class="tags">jquery</span>
                    <span class="tags">bootstrap3</span>
                </p>
              </div>

          </div>
        </div>
        <div class="col-md-6 mt-md-0 mt-5 cwp23-img">
          <img src="{{ URL::asset('images/avatar1.jpg') }}" class="img-fluid rounded" alt="">
          <br><br><br>
          <a href="#read" class="btn btn-style btn-primary mr-2"> Update</a>
          <a href="#more" class="btn btn-style border-btn"> Convert To Premium</a>
        </div>

      </div>
    </div>
  </div>
  <!-- //content block style 7 -->
      <!-- //content -->
      @endsection

