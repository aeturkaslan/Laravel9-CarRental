@extends('layouts.adminbase')
 
@section('title', 'Car List')
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Car List</h2>



                    </div>
                </div>

                <hr />



                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ route ('admin.car.create') }}" class="btn btn-primary btn-lg">Add New Car</a>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Seats</th>
                                                <th>Gear</th>
                                                <th>Fuel</th>
                                                <th>Luggage</th>
                                                <th>Image</th>
                                                <th>Image Gallery</th>
                                                <th>Status</th>
                                                <th style="width: 50px">Edit</th>
                                                <th style="width: 50px">Delete</th>
                                                <th style="width: 50px">Show</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $rs)
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                                                <td>{{ $rs->title }}</td>
                                                <td>{{ $rs->price }}</td>
                                                <td>{{ $rs->seats }}</td>
                                                <td>{{ $rs->gear }}</td>
                                                <td>{{ $rs->fuel }}</td>
                                                <td>{{ $rs->luggage }}</td>
                                                
                                                <td>
                                                    @if ($rs->image)
                                                    <img src="{{ Storage::url($rs->image) }}" style="height: 50px">
                                                    @endif

                                                </td>

                                                <td> <a href="{{ route ('admin.image.index', ['cid'=>$rs->id]) }}" 
                                                    onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                    <img src="{{ asset('assets') }}/admin/img/gallery.png" style="height: 50px">
                                                </a>
                                                </td>
                                                <td>{{ $rs->status }}</td>
                                                <td><a href="{{ route ('admin.car.edit', ['id'=>$rs->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
                                                <td><a href="{{ route ('admin.car.destroy', ['id'=>$rs->id]) }}" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Are you sure you want to delete this car? This action cannot be undone!')">Delete</a></td>
                                                <td><a href="{{ route ('admin.car.show', ['id'=>$rs->id]) }}" class="btn btn-success btn-sm">Show</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>




        </div>
       <!--END PAGE CONTENT -->
@endsection