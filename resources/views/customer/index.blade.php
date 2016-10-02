@section('content')
@extends('customer.master')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Customer Home Page

    </h1>

</section>

<!-- Main content -->
<section class="content">
    <div class="row">
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
                            <th>Food Id</th>
                            <th>Food Name</th>
                            <th>Unit Price</th>
                            <th>Availability</th>
                            <th style="width:13%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($foods != null)
                            @foreach($foods as $food)
                                <tr>

                                    <td>{{$food->id}}</td>
                                    <td>{{$food->food}}</td>
                                    <td>{{$food->uprice}}</td>
                                    <td>{{$food->available}}</td>
                                    <td>

                                        <a href="{{ url('updateSample'.$food->id) }}" class="btn btn-sm btn-info btn-flat ">Add To Bag</a>
                                        {{--<a id="delete" href="{{ url('deleteSample'.$food->id )}}" class="btn btn-sm btn-danger btn-flat">delete</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8">No Foods available</td>
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