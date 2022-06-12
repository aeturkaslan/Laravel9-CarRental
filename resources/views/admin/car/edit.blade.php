@extends('layouts.adminbase')
 
@section('title', 'Edit Car: '.$data->title)

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">

                        <h2>Edit {{ $data->title }}</h2>

                    </div>
                </div>

                

                <hr />



                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Car Elements
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="{{ route ('admin.car.update', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group">
                                                    <label>Parent Category</label>
                                                    <select class="form-control select2" name="category_id">

                                                        @foreach ($datalist as $rs)
                                                            <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif> 
                                                                {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name='title' value="{{ $data->title }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input type="text" class="form-control" name='keywords' value="{{ $data->keywords }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name='description' value="{{ $data->description }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="number" class="form-control" name='price' value="{{ $data->price }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Seats</label>
                                                    <input type="number" class="form-control" name='seats' value="{{ $data->seats }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Gear</label>
                                                    <select class="form-control" name="gear">
                                                        <option selected>{{ $data->gear }}</option>
                                                        <option>Manual</option>
                                                        <option>Automatic</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Fuel</label>
                                                    <select class="form-control" name="fuel">
                                                        <option selected>{{ $data->fuel }}</option>
                                                        <option>Gasoline</option>
                                                        <option>Diesel</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Luggage</label>
                                                    <input type="number" class="form-control" name='luggage' value="{{ $data->luggage }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Detail</label>
                                                    <textarea class="form-control" id="detail" name='detail' >
                                                        {{ $data->detail }}
                                                    </textarea>
                                                    <script>
                                                        ClassicEditor
                                                                .create( document.querySelector( '#detail' ) )
                                                                .then( editor => {
                                                                        console.log( editor );
                                                                } )
                                                                .catch( error => {
                                                                        console.error( error );
                                                                } );
                                                </script>
                                                    
                                                </div>

                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Image</label>
                                                    <input class="form-control" type="file" name="image" id="formFile">
                                                  </div>

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option selected>{{ $data->status }}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update Data</button>


                                            </form>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            








            </div>

            




        </div>
       <!--END PAGE CONTENT -->
@endsection