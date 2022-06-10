@extends('layouts.adminbase')
 
@section('title', 'Contact Form Messages List')
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Message List</h2>



                    </div>
                </div>

                <hr />



                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Status</th>
                                                <th style="width: 50px">Show</th>
                                                <th style="width: 50px">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $rs)
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->name }}</td>
                                                <td>{{ $rs->phone }}</td>
                                                <td>{{ $rs->email }}</td>
                                                <td>{{ $rs->subject }}</td>
                                                <td>{{ $rs->status }}</td>


                                                <td>
                                                    <a href="{{ route ('admin.message.show', ['id'=>$rs->id]) }}" class="btn btn-success btn-sm" 
                                                        onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                                                        Show
                                                    </a>

                                                </td>

                                                <td><a href="{{ route ('admin.message.destroy', ['id'=>$rs->id]) }}" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Are you sure you want to delete this message? This action cannot be undone!')">Delete</a></td>

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