@extends('layouts.adminbase')
 
@section('title', 'Add Category')
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">

                        <h2>Add Category</h2>

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
                                            <form role="form" action="{{ route ('admin.category.store')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                
                                                <div class="form-group">
                                                    <label>Parent Category</label>
                                                    <select class="form-control select2" name="parent_id">
                                                        <option value="0" selected="selected">Main Category</option>
                                                        @foreach ($data as $rs)
                                                            <option value="{{ $rs->id }}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" name='title' placeholder="Title">
                                                </div>

                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input type="text" class="form-control" name='keywords' placeholder="Keywords">
                                                </div>

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name='description' placeholder="Description">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">Image</label>
                                                    <input class="form-control" type="file" name="image" id="formFile">
                                                  </div>

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="status">
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Save</button>


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