@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cities') }}</div>

                <div class="card-body">
                    <form method="GET" action="/radio_checkbox" aria-label="{{ __('Cities') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="cities" class="col-md-4 col-form-label text-md-right">{{ __('My Checkbox City') }}</label>
                            <div class="col-md-6">
                                <input type="checkbox" id="new_york" name="new_york" value="New York"><label for="new_york"> New York</label><br>
                                <input type="checkbox" id="london" name="london" value="London"><label for="london">London</label><br>
                                <input type="checkbox" id="dubai" name="dubai" value="Dubai"><label for="dubai">Dubai</label><br>
                                <input type="checkbox" id="paris" name="paris" value="Paris"><label for="paris">Paris</label><br>
                                <input type="checkbox" id="kampala" name="kampala" value="Kampala"><label for="kampala">Kampala</label><br>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cities" class="col-md-4 col-form-label text-md-right">{{ __('My Radio City') }}</label>
                            <div class="col-md-6">
                                <input type="radio" name="my_radio_city" value="New York">New York<br>
                                <input type="radio" name="my_radio_city" value="London">London<br>
                                <input type="radio" name="my_radio_city" value="Dubai">Dubai<br>
                                <input type="radio" name="my_radio_city" value="Paris">Paris<br>
                                <input type="radio" name="my_radio_city" value="Kampala">Kampala<br>

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


<script type="text/javascript">
    
    $(function() {

        // all my code goes inside here

    });
</script>
@endsection