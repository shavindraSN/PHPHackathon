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
                        Food Items has been Successfully Updated !
                    </div>
            @endif
            <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Food</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    @foreach($food as $foods)
                    @endforeach
                    <form  method="POST" action="{{ url('updateFood') }}">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="col-md-6">


                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Food Name</label>
                                    <input type="text" class="form-control" id="food" name="food" placeholder="Enter Food Name" value="{{ $foods->food}}">
                                    <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter id" value="{{ $foods->id}}">

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Unit Price</label>
                                    <input type="text" class="form-control" id="uprice" name="uprice" placeholder="Enter UnitPrice" value="{{ $foods->uprice }}">
                                </div>

                                <div class="form-group">
                                    <label>Availability</label>
                                    <select class="form-control" name="role" id="role">
                                        <option>available</option>
                                        <option>not available</option>
                                    </select>
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