@section('content')
@extends('master.master')

<section class="content">
    <div class="row">


            <!-- Horizontal Form -->
            <div class="col-md-12">
                <!--following is a success message after inserting a user -->
                @if(Session::has('flash_message_sample'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        Sample has been created !
                    </div>
                @endif

            <!----------------------------------------------------------->
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Error!</h4>
                        <i ></i>
                        @foreach($errors->all()as $error)
                            <li >{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                @if(Session::has('flash_message_sample_update'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        User has been Successfully Updated !
                    </div>
            @endif
            <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form  method="POST" action="{{ url('addSample') }}">
                    <div class="col-md-6">

                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" value="{{ old('age') }}">
                                </div>

                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control" name="role" id="role">
                                        <option>administrator</option>
                                        <option>manager</option>
                                    </select>
                                </div>

                            </div>
                    </div>

                    <div class="col-md-6">

                                <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker" name="date" id="date">
                                    </div>
                                </div>



                            </div>



                    </div>

                    <!-- /.box-body -->
                    <div class="col-md-12">
                        <div class="box-body">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" style="width:10%;">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">

                    </div>
                    </form>
                </div>

                <!-- /.box -->

            </div>
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"> View Sample Data</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th style="width:13%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($sample != null)
                            @foreach($sample as $samples)
                                <tr>

                                    <td>{{$samples->id}}</td>
                                    <td>{{$samples->name}}</td>
                                    <td>{{$samples->age}}</td>
                                    <td>{{$samples->date}}</td>
                                    <td>

                                        <a href="{{ url('updateSample'.$samples->id) }}" class="btn btn-sm btn-warning btn-flat ">update</a>
                                        <a id="delete" href="{{ url('deleteSample'.$samples->id )}}" class="btn btn-sm btn-danger btn-flat">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8">No user available</td>
                            </tr>
                        @endif
                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
       </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@stop