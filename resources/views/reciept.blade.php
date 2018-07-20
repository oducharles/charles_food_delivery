@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('This is your Reciept') }}</div>
                <div class="card-body">
                	<div class="form-group row">
                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Food:') }}</label>
                        <div class="col-md-6">
                		{{ $order->food_name }}
                        </div>
                    <!-- </div>

                    <div class="form-group row"> -->
                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Quantity:') }}</label>
                        <div class="col-md-6">
                		{{ $order->quantity }}
                        </div>
                    <!-- </div>

                    <div class="form-group row"> -->
                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Amount:') }}</label>
                        <div class="col-md-6">
                		{{ $order->price }}
                        </div>

                        <label for="reciept_number" class="col-md-4 text-md-right">{{ __('Reciept_number:') }}</label>
                        <div class="col-md-6">
                		{{ $order->reciept_number }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection