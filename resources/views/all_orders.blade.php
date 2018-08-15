@extends('admin_index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
		    <div class="card" >
		        <div class="card-header" align="center" style="font-size: 20px;">{{ __('List of all Orders') }}</div>

		        <table id="dtBasicExample" class="table table-striped table-bordered table-sm">
		            <thead>
		                <tr>
		                    <th>Customer Name</th>
		                    <th>Food Ordered</th>
		                    <th>Quantity (Plates)</th>
		                    <th>Total Price</th>
		                    <th>Delivery Time</th>
		                    <th>Payment Status</th>
		                    <th>Reciept Number</th>
		                    <th>Delivery Status</th>
		                    <th>Time of Order</th>
		                </tr>
		            </thead>
		            <tfoot>
		                <tr>
		                    <th>Total</th>
		                    <th></th>
		                    <th></th>
		                    <th>Total income</th>
		                    <th></th>
		                    <th></th>
		                    <th></th>
		                    <th></th>
		                    <th></th>
		                </tr>
		            </tfoot>
		            <tbody>
		                @if(isset($all_orders))
		                @foreach($all_orders as $orders)
		                <tr>
		                    <td>{{ $orders->customer }}</td>
		                    <td>{{ $orders->food_name }}</td>
		                    <td>{{ $orders->quantity }}</td>
		                    <td>{{ $orders->price }}</td>
		                    <td>{{ $orders->delivery_time }}</td>
		                    <td>{{ $orders->payment_status }}</td>
		                    <td>{{ $orders->reciept_number }}</td>
		                    <td>{{ $orders->delivery_status }}</td>
		                    <td>{{ $orders->created_at }}</td>
		                </tr>
		                @endforeach
		                @endif
		            </tbody>
		        </table>
		 	</div>
        </div>
    </div>
</div>

@endsection