@section('content')
@extends('master.master')

<section class="content">
    <div class="row">


            <!-- Horizontal Form -->
            <div class="col-md-12">


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
                    @foreach($sample as $samples)
                    @endforeach
                    <div class="col-md-6">
                        <form  method="POST" action="{{ url('updateSample') }}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ $samples->name}}">
                                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter Name" value="{{ $samples->id}}">

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" value="{{ $samples->age }}">
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
                        <form role="form">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker" name="date" id="date" value="{{$samples->date}}">
                                    </div>
                                </div>



                            </div>



                    </div>

                    <!-- /.box-body -->
                    <div class="col-md-12">
                        <div class="box-body">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="width:10%;">Update</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">

                    </div>
                    </form>
                </div>

                <!-- /.box -->

            </div>

       </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@stop