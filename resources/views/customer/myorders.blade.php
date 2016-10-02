@section('content')
@extends('customer.master')
<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"> View My Orders</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Food Item</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $orders)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->food}}</td>
                                    <td>{{$order->qty}}</td>
                                    <td>{{$order->tprice}}</td>
                                    <td>
                                </tr>
                            @endforeach
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