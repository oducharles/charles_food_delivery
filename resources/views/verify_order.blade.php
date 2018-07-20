@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Order') }}</div>

                <div class="card-body">
                    <form method="GET" action="/checked" aria-label="{{ __('Verify Order') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="reciept_number" class="col-md-4 col-form-label text-md-right">{{ __('Customers\' Reciept Number') }}</label>

                            <div class="col-md-6">
                                <input id="reciept_number" type="text" class="form-control{{ $errors->has('reciept_number') ? ' is-invalid' : '' }}" name="reciept_number" value="{{ old('reciept_number') }}" required autofocus>

                                @if ($errors->has('reciept_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reciept_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Check') }}
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