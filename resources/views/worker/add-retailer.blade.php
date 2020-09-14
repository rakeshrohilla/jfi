@extends('layouts/adminlayout')


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
    @section('title', 'Add Retailer')
    <!-- forms 2 -->
    <form action="submit" method="post" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" name="image">
  </div>
  <button type="submit" class="btn btn-primary" value="submit">Submit</button>
</form>
            <!-- //forms 2 -->

            
  
<!-- main content end-->
</section>
  <!--footer section start-->

<!--footer section end-->

  