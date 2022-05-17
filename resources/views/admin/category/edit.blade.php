@extends('layouts.adminbase')
 
@section('title', 'Edit Category: '.$data->title)
 
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
                                    Category Elements
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="{{ route ('admin.category.update', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                                @csrf
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