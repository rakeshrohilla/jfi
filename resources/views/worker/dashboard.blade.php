@extends('layouts/adminlayout')

@section('title', 'Dashboard')
 <!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary">{{Auth::user->}}</span>, Welcome back</h1>
      <p><?php
        echo date("l jS \of F Y h:i:s A");
        ?></p>
    </div>

    <!-- statistics data -->
    <div class="statistics">
        <div class="row">
          <div class="col-xl-6 pr-xl-2">
            <div class="row">
              <div class="col-sm-6 pr-sm-2 statistics-grid">
                <div class="card card_border border-primary-top p-4">
                  <i class="lnr lnr-users"> </i>
                  <a href="add-retailer"><h3 class="text-primary number">ADD RETAILER</h3></a>
                  <p class="stat-text">78</p>
                </div>
              </div>
              <div class="col-sm-6 pl-sm-2 statistics-grid">
                <div class="card card_border border-primary-top p-4">
                  <i class="lnr lnr-eye"> </i>
                  <h3 class="text-secondary number">CHECK-OUT</h3>
                  <p class="stat-text">DURATION</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 pl-xl-2">
            <div class="row">
              <div class="col-sm-6 pr-sm-2 statistics-grid">
                <div class="card card_border border-primary-top p-4">
                  <i class="lnr lnr-cloud-download"> </i>
                  <h3 class="text-success number">MESSAGE</h3>
                  <p class="stat-text">OFFICE</p>
                </div>
              </div>
              <div class="col-sm-6 pl-sm-2 statistics-grid">
                <div class="card card_border border-primary-top p-4">
                  <i class="lnr lnr-cart"> </i>
                  <h3 class="text-danger number">HELP</h3>
                  <p class="stat-text">here</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //statistics data -->

  
<!-- main content end-->
</section>
  <!--footer section start-->

<!--footer section end-->

  