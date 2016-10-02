@section('content')
@extends('admin.master')
<!-- Content Header (Page header) -->


<!-- Main content -->
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
                    <h3 class="box-title">Add Cashier</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form  method="POST" action="{{ url('addCashier') }}">
                    <div class="col-md-6">

                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" value="{{ old('age') }}">
                            </div>



                        </div>
                    </div>

                    <div class="col-md-6">



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