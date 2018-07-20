@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Foods') }}</div>

                <div class="card-body">
                    <form method="POST" action="/store_food" aria-label="{{ __('Make Payment') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="food_name" class="col-md-4 col-form-label text-md-right">{{ __('Food Name') }}</label>

                            <div class="col-md-6">
                                <input id="food_name" type="text" class="form-control{{ $errors->has('food_name') ? ' is-invalid' : '' }}" name="food_name" value="{{ old('food_name') }}" required autofocus>

                                @if ($errors->has('food_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('food_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}"  required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="food_type" class="col-md-4 col-form-label text-md-right">{{ __('Food Type') }}</label>

                            <div class="col-md-6">
                                <input id="food_type" type="text" class="form-control{{ $errors->has('food_type') ? ' is-invalid' : '' }}" name="food_type" value="{{ old('food_type') }}"  required autofocus>

                                @if ($errors->has('food_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('food_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
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