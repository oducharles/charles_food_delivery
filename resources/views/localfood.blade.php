@extends('welcome')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select Local food of your interest') }}</div>

                <div class="card-body">
                    <form method="POST" action="/login">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Local Food type') }}</label>
                                <select id="localfood" autofocus required>
                                    <option>Select from our menu</option>
                                    <option value="vegetarian">Vegetarian</option>
                                    <option value="beef">Beef</option>
                                    <option value="chicken">Chicken</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row" id="vegetarian_menu" hidden="hidden">
                            <div class="container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#veg1">Beans</a></li>
                                    <li><a data-toggle="tab" href="#veg2">Peas</a></li>
                                    <li><a data-toggle="tab" href="#veg3">Other serial</a></li>
                                    <li><a data-toggle="tab" href="#veg4">Greens</a></li>
                                </ul>
                            <div class="tab-content" id="vegetarian_foods">
                                <div id="veg1" class="tab-pane fade in active">
                                    <div class="form-group row">
                                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                                        <div class="col-md-6">
                                            <input id="price" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="price" value="5000/=" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                        <div class="col-md-6">
                                            <select id="quantity">
                                                <option value="1">1</option>plate(s)
                                                <option value="2">2</option>plate(s)
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="delivery_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="delivery_time">
                                                <option>Select Meal Time</option>
                                                <option value="lunch">Lunch Time</option>
                                                <option value="supper">Supper Time</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="lunch_time" hidden="hidden">
                                        <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="delivery_time">
                                                <option value="1:00 pm">1:00pm</option>
                                                <option value="2:30 pm">2:30 pm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="supper_time" hidden="hidden">
                                        <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="delivery_time">
                                                <option value="1:00 pm">7:00pm</option>
                                                <option value="2:30 pm">9:00 pm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="veg2" class="tab-pane fade">
                                  
                                </div>
                                <div id="veg3" class="tab-pane fade">
                                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                                <div id="veg4" class="tab-pane fade">
                                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div id="beef_menu" hidden="hidden">
                            <div id="veg1" class="tab-pane fade in active">
                                    <div class="form-group row">
                                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                                        <div class="col-md-6">
                                            <input id="price" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="price" value="5000/=" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>
                                        <div class="col-md-6">
                                            <select id="quantity">
                                                <option value="1">1</option>plate(s)
                                                <option value="2">2</option>plate(s)
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="delivery_time" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="delivery_time">
                                                <option>Select Meal Time</option>
                                                <option value="lunch">Lunch Time</option>
                                                <option value="supper">Supper Time</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="lunch_time" hidden="hidden">
                                        <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="delivery_time">
                                                <option value="1:00 pm">1:00pm</option>
                                                <option value="2:30 pm">2:30 pm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="supper_time" hidden="hidden">
                                        <label for="expected_time" class="col-md-4 col-form-label text-md-right">{{ __('Expected Time') }}</label>
                                        <div class="col-md-6">
                                            <select id="delivery_time">
                                                <option value="1:00 pm">7:00pm</option>
                                                <option value="2:30 pm">9:00 pm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>

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
