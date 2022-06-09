@extends('layouts.adminbase')
 
@section('title', 'Settings')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}
@endsection
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Settings</h2>



                    </div>
                </div>

                <hr />

               {{--  <form action="{{ route('admin.setting.update',['id' => $data->id]) }}" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">General</a>
                                    </li>
                                    <li><a href="#profile" data-toggle="tab">Smtpemail</a>
                                    </li>
                                    <li><a href="#messages" data-toggle="tab">Social Media</a>
                                    </li>
                                    <li><a href="#settings" data-toggle="tab">About Us</a>
                                    </li>
                                </ul>
    
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <h4>General</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <h4>Smtpemail</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="messages">
                                        <h4>Social Media</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="settings">
                                        <h4>About Us</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
 --}}





                <form action="{{ route('admin.setting.update',['id' => $data->id]) }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <input value="{{ $data->id }}" type="hidden" class="form-control" name="id">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input value="{{ $data->title }}" type="text" class="form-control" name="title"  >
                      </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keywords</label>
                        <input value="{{ $data->keywords }}" type="text" class="form-control" name="keywords"  >
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Description</label>
                        <input value="{{ $data->description }}" type="text" class="form-control" name="description"  >
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlInput1">Company</label>
                      <input value="{{ $data->company }}" type="text" class="form-control" name="company">
                    </div>
                       
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Address</label>
                      <input value="{{ $data->address }}" type="text" class="form-control" name="address"  >
                    </div>
                
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Phone</label>
                      <input value="{{ $data->phone }}" type="number" class="form-control" name="phone"  >
                    </div>
                
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Fax</label>
                      <input value{{ $data->fax }} type="text" class="form-control" name="fax"  >
                    </div>
                
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email</label>
                      <input value="{{ $data->email }}" type="email" class="form-control" name="email"  >
                    </div>


                    <hr />

                    <div class="form-group">
                        <label for="exampleFormControlInput1">smtpserver</label>
                        <input value{{ $data->smtpserver }} type="text" class="form-control" name="smtpserver"  >
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">smtpemail</label>
                        <input value{{ $data->smtpemail }} type="email" class="form-control" name="smtpemail"  >
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">smtppassword</label>
                        <input value{{ $data->smtppassword }} type="password" class="form-control" name="smtppassword"  >
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">smtpport</label>
                        <input value{{ $data->smtpport }} type="number" class="form-control" name="smtpport"  >
                      </div>

                      <hr />
                
                    <div class="form-group">
                      <label for="exampleFormControlInput1">facebook</label>
                      <input value{{ $data->facebook }} type="text" class="form-control" name="facebook"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">twitter</label>
                      <input value{{ $data->twitter }} type="text" class="form-control" name="twitter"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">instagram</label>
                      <input value{{ $data->instagram }} type="text" class="form-control" name="instagram"  >
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">youtube</label>
                      <input value{{ $data->youtube }} type="text" class="form-control" name="youtube"  >
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Icon</label>
                        <input class="form-control" type="file" name="icon" id="formFile">
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">status</label>
                      <input value{{ $data->status }} type="text" class="form-control" name="status"  >
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">References</label>
                        <textarea id="references" name="references">{{ $data->references }}</textarea>
                        <script>
                            ClassicEditor
                                    .create( document.querySelector( '#references' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script>
                  
                        <label for="exampleFormControlInput1">Contact</label>
                        <textarea id="contact" name="contact">{{ $data->contact }}</textarea>

                        <script>
                            ClassicEditor
                                    .create( document.querySelector( '#contact' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script>
                  
                        <label for="exampleFormControlInput1">Aboutus</label>
                        <textarea id="aboutus" name="aboutus">{{ $data->aboutus }}</textarea>

                        <script>
                            ClassicEditor
                                    .create( document.querySelector( '#aboutus' ) )
                                    .then( editor => {
                                            console.log( editor );
                                    } )
                                    .catch( error => {
                                            console.error( error );
                                    } );
                    </script>







                        {{-- <script>
                            $(document).ready(function(){
    
                                $('#references').summernote();
                                $('#contact').summernote();
                                $('#aboutus').summernote();
                                
                            });
                            </script> --}}
                        
                          
                      </div>
                
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>


































                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Tabs
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Home</a>
                                    </li>
                                    <li><a href="#profile" data-toggle="tab">Profile</a>
                                    </li>
                                    <li><a href="#messages" data-toggle="tab">Messages</a>
                                    </li>
                                    <li><a href="#settings" data-toggle="tab">Settings</a>
                                    </li>
                                </ul>
    
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <h4>General</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <h4>Smtpemail</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="messages">
                                        <h4>Social Media</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="settings">
                                        <h4>About Us</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
























                {{-- <div class="row">
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
                                                <label>Parent Category</label>
                                                <select class="form-control select2" name="parent_id">
                                                    <option value="0" selected="selected">Main Category</option>
                                                    @foreach ($datalist as $rs)
                                                        <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif> 
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
                </div> --}}




            </div>




        </div>
       <!--END PAGE CONTENT -->
@endsection

@section('foot')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"></script>

{{-- <script>
    $(document).ready(function(){

        $('#references').summernote();
        $('#contact').summernote();
        $('#aboutus').summernote();
        
    });
    </script>

@endsection --}}