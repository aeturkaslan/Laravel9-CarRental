@extends('layouts.adminwindow')
 
@section('title', 'Car Image Gallery')
 
@section('content')


        <!--PAGE CONTENT -->
        <div > <!--id="content"-->

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Car Image Gallery</h2>



                    </div>
                </div>

                <hr />

                <h2>{{ $car->title }} - Add Image</h2>
<form role="form" action="{{ route ('admin.image.store',['cid'=>$car->id])}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name='title' placeholder="Title">
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" name="image" id="formFile">
      </div>

      <button type="submit" class="btn btn-primary">Save</button>

      <hr />



                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th style="width: 50px">Update</th>
                                                <th style="width: 50px">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($images as $rs)
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</td>
                                                <td>{{ $rs->title }}</td>
                                                
                                                <td>
                                                    @if ($rs->image)
                                                    <img src="{{ Storage::url($rs->image) }}" style="height: 50px">
                                                    @endif

                                                </td>

                                                
                                                <td><a href="{{ route ('admin.image.destroy', ['cid'=>$car->id, 'id'=>$rs->id]) }}" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Are you sure you want to delete this image? This action cannot be undone!')">Delete</a></td>
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