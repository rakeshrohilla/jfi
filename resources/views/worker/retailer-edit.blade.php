@if(Auth::user()->user_type=='admin')
   @php $type = "layouts/adminlayout" @endphp
@elseif(Auth::user()->user_type=='worker')
    @php $type = "layouts/workerlayout" @endphp
@else
    @php return 'home' @endphp
@endif

@extends($type)

@section('title', 'Edit Retailer')

@section('content')
            <!-- sucess alert-->
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <!-- sucess alert -->
        <!-- forms 2 -->
    <div class="card card_border py-2 mb-4">
      <div class="card-body">
          <form action="/update-retailer/{{$shop->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{method_field('PUT')}}
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label class="input__label">Business Name</label>
                      <input type="text" id="fname"name="busi_name" value="{{$shop->busi_name}}" class="form-control input-style"
                          placeholder="Business Name,Shop name...">
                  </div>
                  <div class="form-group col-md-4">
                  <label class="input__label">Business Type</label>
                  <select class="custom-select input-style" name="busi_type">
                      <option value="{{$shop->busi_type}}">Select...</option>
                      <option value="72">Accommodation and Food Services</option>
<option value="56">Administrative and Support and Waste Management and Remediation Services</option>
<option value="11">Agriculture, Forestry, Fishing and Hunting</option>
<option value="71">Arts, Entertainment, and Recreation</option>
<option value="23">Construction</option>
<option value="61">Educational Services</option>
<option value="52">Finance and Insurance</option>
<option value="62">Health Care and Social Assistance</option>
<option value="51">Information</option>
<option value="55">Management of Companies and Enterprises</option>
<option value="31">Manufacturing: Food, Beverage, Textile, Apparel &amp; Leather</option>
<option value="33">Manufacturing: Metal, Machinery, Electronics, Transportation, Furniture &amp; Other </option>
<option value="32">Manufacturing: Wood, Paper, Printing, Petroleum, Chemicals, Plastics &amp; Minerals</option>
<option value="21">Mining, Quarrying, and Oil and Gas Extraction</option>
<option value="81">Other Services (except Public Administration)</option>
<option value="54">Professional, Scientific, and Technical Services</option>
<option value="92">Public Administration</option>
<option value="53">Real Estate and Rental and Leasing</option>
<option value="45">Retail: Sporting Goods, Hobby, Book and Music, General Merchandise, and Misc. Retail</option>
<option value="44">Retail: Vehicle, Furnishings, Electronics, Building Materials, Food, Health, Fuel &amp; Clothing</option>
<option value="48">Transporation: Air/Rail/Water/Truck/Transit/Pipeline/Scenic </option>
<option value="49">Transportation: Postal, Courier &amp; Messengers, and Warehouse/Storage</option>
<option value="22">Utilities</option>
<option value="42">Wholesale Trade</option>
                  </select>
                  <div class="invalid-feedback">Example invalid custom select feedback</div>
                  </div>
                  <div class="form-group col-md-4">
                      <label  class="input__label">Mobile Number</label>
                      <input type="text" id="mnumber" name="contact" value="{{$shop->contact}}" class="form-control input-style"
                          placeholder="Mob Number">
                  </div>
              </div>

              <div class="form-group">
                  <label for="inputAddress2" class="input__label">Landmark</label>
                  <input type="text" class="form-control input-style"name="landmark" value="{{$shop->landmark}}" id="inputAddress2"
                      placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputCity" class="input__label">City</label>
                      <input type="text" class="form-control input-style" name="city" value="{{$shop->city}}" id="inputCity">
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
                      <input type="text" class="form-control input-style" name="zip" value="{{$shop->zip}}" id="inputZip">
                  </div>

              </div>
              <label for="inputAddress2" class="input__label">Business image</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="busi_img" id="validatedCustomFile">
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
              </div><br><br><br>
              <div class="form-check check-remember check-me-out">
                  <input class="form-check-input checkbox" type="checkbox" id="gridCheck">
                  <label class="form-check-label checkmark" for="gridCheck">
                      Check me out
                  </label>

              </div>


              <button type="submit" class="btn btn-primary btn-style mt-4" >Update</button>
              <a herf="/edit" class="btn btn-danger btn-style mt-4">Cancel</a>
          </form>
      </div>
  </div>

  <!-- //forms 2 -->

  @endsection

