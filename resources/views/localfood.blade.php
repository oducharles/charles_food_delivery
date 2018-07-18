@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select Local food of your interest') }}</div>

                <div class="card-body">
                    <form method="GET" action="/make_payment">
                        @csrf

                        <div class="form-group row">
                            <label for="food_type" class="col-md-4 col-form-label text-md-right">{{ __('Local Food type') }}</label>
                            <div class="col-md-6">
                                <select class="localfood" id="localfood" name="localfood">
                                    <option>Select from our menu</option>
                                    <option value="vegetarian">Vegetarian</option>
                                    <option value="beef">Beef</option>
                                    <option value="chicken">Chicken</option>
                                </select>
                            </div>
                        </div><!--Local Food type-->

                        <div class="form-group row vegetarian_menu">
                            <div class="container">
                                <div class="form-group row"  id="vegetarian_menu">
                                    <label for="delivery_time" class="col-md-4 col-form-label text-md-right">{{ __('Food Name') }}</label>
                                    <div class="col-md-6">
                                        <select id="vegs" name="vegs">
                                            <option>Select Food</option>
                                            <option value="Beans">Beans</option>
                                            <option value="Peas">Peas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content" id="vegetarian_foods">
                                    <div id="veg1" class="tab-pane fade in active">
                                        <div class="form-group row">
                                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                                            <div class="col-md-6">
                                                <input id="price" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="price" value="5000" required autofocus>
                                            </div>
                                        </div><!--Price-->

                                        <div class="form-group row">
                                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                            <div class="col-md-6">
                                                <input type="text" value="1" name="quantity" id="quantity" required>
                                            </div>
                                        </div><!--Quantity-->

                                        <div class="form-group row">
                                            <label for="delivery_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}</label>
                                            <div class="col-md-6">
                                                <select id="delivery_time" name="delivery_time">
                                                    <option>Select Meal Time</option>
                                                    <option value="lunch">Lunch Time</option>
                                                    <option value="supper">Supper Time</option>
                                                </select>
                                            </div>
                                        </div><!--Meal Time-->

                                        <div class="form-group row" id="lunch_time">
                                            <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Time') }}</label>
                                            <div class="col-md-6">
                                                <select id="lunch_expected_time" name="expected_time">
                                                    <option value="1:00 pm">1:00pm</option>
                                                    <option value="2:30 pm">2:30 pm</option>
                                                </select>
                                            </div>
                                        </div><!--Expected Time for Lunch-->

                                        <div class="form-group row" id="supper_time">
                                            <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Time') }}</label>
                                            <div class="col-md-6">
                                                <select id="supper_expected_time" name="expected_time">
                                                    <option value="1:00 pm">7:00pm</option>
                                                    <option value="2:30 pm">9:00 pm</option>
                                                </select>
                                            </div>
                                        </div><!--Expected Time for Supper-->
                                    </div>
                                    <div id="veg2" class="tab-pane fade">
                                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    </div>
                                    <div id="veg3" class="tab-pane fade">
                                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    </div>
                                    <div id="veg4" class="tab-pane fade">
                                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--Vegeterian menu-->

                        <div class="form-group row mb-0">
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
