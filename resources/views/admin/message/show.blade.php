@extends('layouts.adminwindow')
 
@section('title', 'Show Message: '.$data->title)
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">

                        <h2>Show Message: {{ $data->title }}</h2>

                    </div>
                </div>

                

                <hr />

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>{{ $data->title }} Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width: 250px">id</td>
                                                <td>{{ $data->id }}</td>
                                            </tr>


                                            
                                            <tr>
                                                <td style="width: 250px">Name</td>
                                                <td>{{ $data->name }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="width: 250px">Phone Number</td>
                                                <td>{{ $data->phone }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="width: 250px">Email</td>
                                                <td>{{ $data->email }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Subject</td>
                                                <td>{{ $data->subject }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Message</td>
                                                <td>{{ $data->message }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Ip Number</td>
                                                <td>{{ $data->ip }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Status</td>
                                                <td>{{ $data->status }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="width: 250px">Created At</td>
                                                <td>{{ $data->created_at }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Updated At</td>
                                                <td>{{ $data->updated_at }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Admin Note: </td>
                                                <td>
                                                    <form role="form" action="{{ route ('admin.message.update', ['id'=>$data->id]) }}" method="post" >
                                                    @csrf
                                                    <textarea cols="100" id="note" name='note'>{{ $data->note }}</textarea>
                                                    <button type="submit" class="btn btn-primary">Update Note</button>
                                                    </form>                                     
                                                </td>
                                            </tr>
                                            
                                            
 


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