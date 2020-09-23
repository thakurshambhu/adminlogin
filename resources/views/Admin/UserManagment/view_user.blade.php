@extends('layouts.main')

@section('content')
<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">All Users </h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                               
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($userData as $row)
                                            <tr> 
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->email}}</td>
                                                <td>
                                                    <a href="{{url('/admin/show_users-'.$row->id)}}"<i class="fa fa-edit" style="font-size:20px;color:blue;cursor: pointer;"title="Edit User"></i></a>
                                                &nbsp;
                                                
                                                <a href={{url('/admin/delete_user-'.$row->id)}}><i class="material-icons delete-user" id="delete-user" style="font-size:20px;color:red;cursor: pointer;" title="Delete User">delete</i></a></td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                           
                                            <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        @endsection