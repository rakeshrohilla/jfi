@extends('layouts/adminlayout')

@section('title', 'Dashboard')
@section('content')
    <!-- statistics data -->
    <div class="statistics">
        <div class="row">
          <div class="col-xl-6 pr-xl-2">
            <div class="row">
              <div class="col-sm-6 pr-sm-2 statistics-grid">
                <div class="card card_border border-primary-top p-4">
                  <i class="lnr lnr-users"> </i>
                  <a href="add-employees"><h3 class="text-primary number">ADD EMPLOYEES</h3></a>
                  <p class="stat-text">{{App\User::count()}}</p>
                </div>
              </div>
              <div class="col-sm-6 pl-sm-2 statistics-grid">
                <div class="card card_border border-primary-top p-4">
                  <i class="lnr lnr-eye"> </i>
                  <a href="list-employees"><h3 class="text-primary number">EDIT EMPLOYEES</h3></a>
                  <p class="stat-text">VIEW/UPDTE/DELETE</p>
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
      @endsection

