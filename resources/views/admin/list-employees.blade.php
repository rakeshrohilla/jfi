@if(Auth::user()->user_type=='admin')
   @php $type = "layouts/adminlayout" @endphp
@elseif(Auth::user()->user_type=='worker')
    @php $type = "layouts/workerlayout" @endphp
@else
    @php return 'home' @endphp
@endif

@extends($type)

@section('title', 'employees')

@section('content')
            <!-- sucess alert-->
            <!-- sucess alert-->
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <!-- sucess alert -->

                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8"><h2>Employess <b>Details</b></h2></div>
                                    <div class="col-sm-4">
                                        <div class="search-box">
                                            <i class="material-icons">&#xE8B6;</i>
                                            <input type="text" class="form-control" placeholder="Search&hellip;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Profile Picture</th>
                                        <th>Name <i class="fa fa-sort"></i></th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ( count($data) === 0)
                                    I don't have any records!Let add some <a href="/add-retailer" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus"></span> ADD RETAILER</a><br><br><br>
                                    @else
                                    @foreach ($data as $i)

                                    <tr>
                                        <td>{{$i->id}}</td>
                                        <td><img src="{{asset('/storage/image/users/'.$i->name.'.jpg') }}" alt="..." class="img-thumbnail" style="max-width: 50%"!important></td>
                                        <td>{{$i->name}}</td>
                                        <td>{{$i->email}}</td>
                                        <td>{{$i->phone}}</td>

                                        <td>
                                            <a href="/emp-view/{{$i->id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                            <a href="/emp-edit/{{$i->id}}" class="edit" title="Edit" ><i class="material-icons">&#xE254;</i></a>
                                            <a href="/emp-delete/{{$i->id}}" class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>{{count($data)}}</b> out of <b></b> entries</div>
                                <ul class="pagination">

                                    {{ $data->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

  <!-- //forms 2 -->

  @endsection

