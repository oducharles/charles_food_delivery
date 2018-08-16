@extends('admin_index')
@section('content')

@if(isset($edit_food))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="font-size: 20px;">{{ __('Edit Food Details') }}</div>
                
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ url('store_food_update',$id) }}" aria-label="{{ __('Make Payment') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="food_name" class="col-md-4 col-form-label text-md-right">{{ __('Food Name') }}</label>

                            <div class="col-md-6">
                                <input id="food_name" type="text" class="form-control{{ $errors->has('food_name') ? ' is-invalid' : '' }}" name="food_name" value="{{ $edit_food['food_name'] }}" required autofocus>

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
                                <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $edit_food['price'] }}"  required autofocus>

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
                                <select id="food_type" name="food_type" class="form-control" style="height: 45px !important;">
                                    <option value="$edit_food['category']">{{$edit_food['category']}}</option>
                                    <option value="localfood">Local Food</option>
                                    <option value="takeaway">Take Away</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="food_photo" class="col-md-4 col-form-label text-md-right">{{ __('Add Food Photo') }}</label>

                            <div class="col-md-6">
                                <input id="food_photo" type="file" class="form-control{{ $errors->has('food_photo') ? ' is-invalid' : '' }}" name="food_photo" value="{{ $edit_food['food_photo'] }}"  required autofocus>

                                @if ($errors->has('food_photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('food_photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header" align="center" style="font-size: 20px;">{{ __('Add Foods') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/store_food" aria-label="{{ __('Make Payment') }}">
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
                                <select id="food_type" name="food_type" class="form-control" style="height: 45px !important;">
                                    <option>Select Food Type</option>
                                    <option value="localfood">Local Food</option>
                                    <option value="takeaway">Take Away</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="food_photo" class="col-md-4 col-form-label text-md-right">{{ __('Add Food Photo') }}</label>

                            <div class="col-md-6">
                                <input id="food_photo" type="file" class="form-control{{ $errors->has('food_photo') ? ' is-invalid' : '' }}" name="food_photo" value="{{ old('food_photo') }}"  required autofocus>

                                @if ($errors->has('food_photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('food_photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
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
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <div class="card" >
                <div class="card-header" align="center" style="font-size: 20px;">{{ __('Current List of Foods') }}</div>

                <table id="dtBasicExample" class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Food Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Food Photo</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($foods))
                            @foreach($foods as $food)
                                <tr>
                                    <td>{{ $food->food_name }}</td>
                                    <td>{{ $food->price }}</td>
                                    <td>{{ $food->category }}</td>
                                    <td><img src="{{$food->food_photo}}" height="auto" width="100px" style="border-radius: 5px;"></td>
                                    <td>
                                        <a href="{{url('edit_food',$food->id)}}">
                                            <input type="button" class="btn btn-primary" name="edit" value="Edit">
                                        </a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ url('delete_food',$food->id) }}" class="deletefood">
                                            @csrf
                                            <input type="submit" class="btn btn-danger" name="submit" value="Delete">
                                        </form>
                                    </td>
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