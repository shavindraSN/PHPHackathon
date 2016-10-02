@section('content')
@extends('cashier.master')
<!-- Content Header (Page header) -->
<section class="content">
    <div class="row">


        <!-- Horizontal Form -->
        <div class="col-md-12">
            <!--following is a success message after inserting a user -->
            @if(Session::has('flash_message_food'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    Food has been added succesfully !
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
                    Food Item has been Successfully Updated !
                </div>
        @endif
        <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Food Item</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form  method="POST" action="{{ url('addFood') }}">
                    <div class="col-md-6">

                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Food Name</label>
                                <input type="text" class="form-control" id="food" name="food" placeholder="Enter Name" value="{{ old('food') }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">UnitPrice</label>
                                <input type="number" class="form-control" id="uprice" name="uprice" placeholder="Enter UnitPrice" value="{{ old('uprice') }}">
                            </div>

                            <div class="form-group">
                                <label>Availability</label>
                                <select class="form-control" name="available" id="available">
                                    <option>availabe</option>
                                    <option>not available</option>
                                </select>
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
                    <h3 class="box-title"> Edit or Remove Food Item</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Food Id</th>
                            <th>Food Name</th>
                            <th>Unit Price</th>
                            <th>Availability</th>
                            <th style="width:13%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($food != null)
                            @foreach($food as $foods)
                                <tr>

                                    <td>{{$foods->id}}</td>
                                    <td>{{$foods->food}}</td>
                                    <td>{{$foods->uprice}}</td>
                                    <td>{{$foods->available}}</td>
                                    <td>

                                        <a href="{{ url('updateFood'.$foods->id) }}" class="btn btn-sm btn-warning btn-flat ">update</a>
                                        <a id="delete" href="{{ url('deletefood'.$foods->id )}}" class="btn btn-sm btn-danger btn-flat">delete</a>
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