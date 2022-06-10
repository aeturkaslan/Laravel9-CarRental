@extends('layouts.adminbase')
 
@section('title', 'Faq List')
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>Faq List</h2>



                    </div>
                </div>

                <hr />



                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ route ('admin.faq.create') }}" class="btn btn-primary btn-lg">Add New Question</a>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Question</th>
                                                <th>Answer</th>
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
                                                <td>{{ $rs->question }}</td>
                                                <td>{!! $rs->answer !!}</td>
                                                <td>{{ $rs->status }}</td>
                                                <td><a href="{{ route ('admin.faq.edit', ['id'=>$rs->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
                                                <td><a href="{{ route ('admin.faq.destroy', ['id'=>$rs->id]) }}" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Are you sure you want to delete this faq? This action cannot be undone!')">Delete</a></td>
                                                <td><a href="{{ route ('admin.faq.show', ['id'=>$rs->id]) }}" class="btn btn-success btn-sm">Show</a></td>
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