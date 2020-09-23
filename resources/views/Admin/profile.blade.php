@extends('layouts.main')

@section('content')
<div class="box box-primary ml-4">
                                <div class="box-header">
                                    <h3 class="box-title">Update Profile</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form method="post" enctype ='multipart/form-data' action="{{url('admin/profile/'.$user->id)}}" id="profile-update">
                                @csrf
                                    <div class="box-body">
                                    <div class="form-group">
                                            <label for="exampleInputEmail1">Full Name <span class="text-danger" title="required">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address <span class="text-danger">*</span> </label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{$user->email}}" placeholder="Enter email">
                                        </div>
                                   
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" id="exampleInputFile" name="profile_image">
                                        
                                        </div>
                                       
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

<br><br>

<div class="box box-primary ml-4">
                                <div class="box-header">
                                    <h3 class="box-title">Update Password</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form  method="post" action="{{url('/admin/update-pwd') }}" name="password_validate" id="password_validate" novalidate="novalidate">
                                @csrf
                                    <div class="box-body">
                                    <div class="form-group">
                                    <label class="control-label">Current Password</label>
                                            <input type="password" name="current_pwd" id="current_pwd" class="form-control" data-id="{{$user->id}}"/>
                                    <span id="checkpassword"></span>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label">Password <span class="text-danger">*</span></label>
                                            <input type="password" name="new_pwd" id="new_pwd" class="form-control" />
                                        </div>
                                   
                                        <div class="form-group">
                                        <label class="control-label">Confirm password<span class="text-danger">*</span></label>
                                            <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control" />
                                        
                                        </div>
                                       
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
                            


                            
@endsection

