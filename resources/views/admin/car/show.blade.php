@extends('layouts.adminbase')
 
@section('title', 'Show Details: '.$data->title)
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">

                        <h2>Show Details: {{ $data->title }}</h2>

                    </div>
                </div>

                

                <hr />

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ route ('admin.car.edit', ['id'=>$data->id]) }}" class="btn btn-info btn-lg">Edit Car</a>
                                <a href="{{ route ('admin.car.destroy', ['id'=>$data->id]) }}" class="btn btn-danger btn-lg" 
                                onclick="return confirm('Are you sure you want to delete this car? This action cannot be undone!')">Delete Car</a>
                            </div>
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
                                                <td style="width: 250px">Category</td>
                                                <td>{{ $data->category_id }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="width: 250px">Title</td>
                                                <td>{{ $data->title }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="width: 250px">Keywords</td>
                                                <td>{{ $data->keywords }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="width: 250px">Description</td>
                                                <td>{{ $data->description }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Price</td>
                                                <td>{{ $data->price }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Seats</td>
                                                <td>{{ $data->seats }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Gear</td>
                                                <td>{{ $data->gear }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Fuel</td>
                                                <td>{{ $data->fuel }}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="width: 250px">Luggage</td>
                                                <td>{{ $data->luggage }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Detail</td>
                                                <td>{{ $data->detail }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Image</td>
                                                <td> 

                                                    @if ($data->image)
                                                    <img src="{{ Storage::url($data->image) }}" style="height: 100px">
                                                    @endif 
                                                
                                                </td>
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