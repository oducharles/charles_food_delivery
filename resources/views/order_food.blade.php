@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Select Food of your interest') }}</h2></div>

                <div class="card-body">
                    <form method="GET" action="/make_payment">
                        @csrf

                        <div class="card-group">
                            @foreach($foods_to_order as $food)
                                <div class="card local_food_name" id="local_food_name" price="{{$food->price}}" food_name="{{$food->food_name}}">
                                    <img class="card-img-top" src="{{$food->food_photo}}" style="height: 170px !important; padding: 2px; border-radius: 5px;" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$food->food_name}}</h4>
                                        <p class="card-text" style="height: 150px !important;">This is a placeholder for food details. To be impelemented later.</p>
                                        <p class="card-text"><small class="text-muted">Take This</small></p>
                                    </div>
                                </div>
                            @endforeach
                        </div><br>
                        <input id="foody" type="hidden"  name="local_food_menu">
                        <div id="loca_food_specifications">
                            <h2 id="foodorder"></h2>
                            <div class="card"><br>
                                <div class="form-group row" id="local_food_price">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Unit Price') }}</label>
                                    <div class="col-md-6">
                                        <input id="price" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="price" required autofocus>
                                        
                                    </div>
                                </div><!--Price-->

                                <div class="form-group row" id="local_food_quantity">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" id="qty" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" style="width: 50px !important;" value="1" name="quantity" id="quantity" required>
                                    </div>
                                </div><!--Quantity-->
                                <div id="expected_by">
                                    <div class="form-group row" id="expected_by">
                                        <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Delivery Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="expected_time" class="form-control meal_times_select" style="height: 35px !important;" name="expected_time">
                                                <option class="meal_times" value="">Select Time</option>
                                                <optgroup label="Lunch Time">
                                                    <option class="lunch_time" value="1:00 pm">1:00pm</option>
                                                    <option class="lunch_time" value="2:30 pm">2:30 pm</option>
                                                </optgroup>
                                                <optgroup label="Supper Time">
                                                    <option class="super_time" value="7:00 pm">7:00pm</option>
                                                    <option class="super_time" value="9:00 pm">9:00 pm</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div><!--Expected Time-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0 place-order">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Place Order') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
