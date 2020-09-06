@extends('layouts/adminlayout')

@section('title', 'Add Retailer')
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
      <h1>Hi <span class="text-primary">John</span>, Welcome back</h1>
      <p><?php
        echo date("l jS \of F Y h:i:s A");
        ?></p>
    </div>

    <!-- forms 2 -->
    <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="submit" method="post">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="input__label">Business Name</label>
                                <input type="name" class="form-control input-style" 
                                    placeholder="Business Name,Shop name...">
                            </div>
                            <div class="form-group col-md-6">
                                <label  class="input__label">Mobile Number</label>
                                <input type="text" class="form-control input-style" 
                                    placeholder="Mob Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Address</label>
                            <input type="text" class="form-control input-style" id="inputAddress"
                                placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2" class="input__label">Address 2</label>
                            <input type="text" class="form-control input-style" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity" class="input__label">City</label>
                                <input type="text" class="form-control input-style" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="input__label">State</label>
                                <select id="inputState" class="form-control input-style">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip" class="input__label">Zip</label>
                                <input type="text" class="form-control input-style" id="inputZip">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <select class="custom-select input-style" required>
                                <option value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div><br><br><br>
                        <div class="form-check check-remember check-me-out">
                            <input class="form-check-input checkbox" type="checkbox" id="gridCheck">
                            <label class="form-check-label checkmark" for="gridCheck">
                                Check me out
                            </label>
                            
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input class="form-check-input checkbox" type="checkbox" id="gridCheck">
                            <label class="form-check-label checkmark" for="gridCheck">
                                Check me out
                            </label>
                            
                        </div>
                        <div class="form-check check-remember check-me-out">
                            <input class="form-check-input checkbox" type="checkbox" id="gridCheck">
                            <label class="form-check-label checkmark" for="gridCheck">
                                Check me out
                            </label>
                            
                        </div><div class="form-check check-remember check-me-out">
                            <input class="form-check-input checkbox" type="checkbox" id="gridCheck">
                            <label class="form-check-label checkmark" for="gridCheck">
                                Check me out
                            </label>
                            
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>
                    </form>
                </div>
            </div>
            <!-- //forms 2 -->

            
  
<!-- main content end-->
</section>
  <!--footer section start-->

<!--footer section end-->

  