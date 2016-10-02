@section('content')
@extends('admin.master')
<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
    <div class="row">


        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"> View Fooods Data</h3>
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
                                    <td>{{$samples->food}}</td>
                                    <td>{{$samples->uprice}}</td>
                                    <td>{{$samples->available}}</td>
                                    <td>

                                        <button onclick="myFunction()"  class="btn btn-sm btn-warning btn-flat ">Print</button>

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
<script>
    function myFunction() {
        window.print();
    }
</script>
<!-- /.content -->
@stop