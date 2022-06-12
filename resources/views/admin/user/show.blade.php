@extends('layouts.adminwindow')
 
@section('title', 'User Detail '.$data->title)
 
@section('content')
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:1200px;">
                <div class="row">
                    <div class="col-lg-12">

                        <h2>User Detail: {{ $data->title }}</h2>

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
                                                <td style="width: 250px">Name & Surname</td>
                                                <td>{{ $data->name }}</td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td style="width: 250px">Email</td>
                                                <td>{{ $data->email }}</td>
                                            </tr>

                                            <tr>
                                                <td style="width: 250px">Roles</td>
                                                <td>
                                                    @foreach ($data->roles as $role)
                                                    {{ $role->name }}
                                                    <a href="{{ route ('admin.user.destroyrole', ['uid'=>$data->id, 'rid'=>$role->id]) }}" class="btn btn-danger btn-sm" 
                                                        onclick="return confirm('Are you sure you want to delete this role? This action cannot be undone!')">[X]</a>
                                                    @endforeach    
                                                </td>
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
                                                <td style="width: 250px">Add Role to User</td>
                                                <td>
                                                    <form role="form" action="{{ route ('admin.user.addrole', ['id'=>$data->id]) }}" method="post" >
                                                    @csrf
                                                    <select name="role_id">
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                    <button type="submit" class="btn btn-primary">Add Role</button>
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