@extends('layouts.main')

@section('content')
<div class="box box-primary ml-4">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Informaction of {{$userData->name}}</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form method="post" enctype ='multipart/form-data' action="{{url('admin/update/'.$userData->id)}}" id="user-update">
                                @csrf
                                    <div class="box-body">
                                    <div class="form-group">
                                            <label for="exampleInputEmail1">Full Name <span class="text-danger" title="required">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$userData->name}}" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address <span class="text-danger">*</span> </label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{$userData->email}}" placeholder="Enter email">
                                        </div>
                                   
                                        
                                       
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->


 @endsection                           