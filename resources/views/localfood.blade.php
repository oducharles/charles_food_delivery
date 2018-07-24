@extends('app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select Local food of your interest') }}</div>

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
                            <div class="card"><br>
                                <div class="form-group row" id="local_food_price">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                                    <div class="col-md-6">
                                        <input id="price" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="price" required autofocus>
                                        
                                    </div>
                                </div><!--Price-->

                                <div class="form-group row" id="local_food_quantity">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" value="1" name="quantity" id="quantity" required>
                                    </div>
                                </div><!--Quantity-->

                                <div class="form-group row" id="local_food_meal_time">
                                    <label for="delivery_time" class="col-md-4 col-form-label text-md-right">{{ __('Meal Time') }}</label>
                                    <div class="col-md-6">
                                        <select id="meal_time" name="meal_time" class="form-control" style="height: 35px !important;">
                                            <option>Select Meal Time</option>
                                            <option value="lunch">Lunch Time</option>
                                            <option value="supper">Supper Time</option>
                                        </select>
                                    </div>
                                </div><!--Meal Time-->
                                <div id="expected_by">
                                    <div class="form-group row" id="lunch_time">
                                        <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="lunch_expected_time" class="form-control" style="height: 35px !important;" name="expected_time">
                                                <option value="1:00 pm">1:00pm</option>
                                                <option value="2:30 pm">2:30 pm</option>
                                            </select>
                                        </div>
                                    </div><!--Expected Time for Lunch-->

                                    <div class="form-group row" id="supper_time">
                                        <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="supper_expected_time" class="form-control" style="height: 35px !important;" name="expected_time">
                                                <option value="1:00 pm">7:00pm</option>
                                                <option value="2:30 pm">9:00 pm</option>
                                            </select>
                                        </div>
                                    </div><!--Expected Time for Supper-->
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
