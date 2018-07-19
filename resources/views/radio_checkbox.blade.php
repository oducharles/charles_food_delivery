@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Choices') }}</div>

                <div class="card-body">
                    <form method="GET" action="/radio_checkbox" aria-label="{{ __('My Choices') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="cities" class="col-md-4 col-form-label text-md-right">{{ __('Select City') }}</label>
                            <div class="col-md-6">
                                <input type="checkbox" id="select_all" name="select_all" value="Select All"><label for="select_all">Select All</label><br>

                                <input type="checkbox"  id="new_york" class="my_city" name="mycity[]" value="New York"><label for="new_york">New York</label><br>

                                <input type="checkbox"  id="london" class="my_city" name="mycity[]" value="London"><label for="london">London</label><br>

                                <input type="checkbox"  id="dubai" class="my_city" name="mycity[]" value="Dubai"><label for="dubai">Dubai</label><br>

                                <input type="checkbox"  id="paris" class="my_city" name="mycity[]" value="Paris"><label for="paris">Paris</label><br>

                                <input type="checkbox"  id="kampala" class="my_city" name="mycity[]" value="Kampala"><label for="kampala">Kampala</label><br>

                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="cities" class="col-md-4 col-form-label text-md-right">{{ __('Select City') }}</label>
                            <div class="col-md-6">
                                <input type="radio" name="my_radio_city" value="New York">New York<br>
                                <input type="radio" name="my_radio_city" value="London">London<br>
                                <input type="radio" name="my_radio_city" value="Dubai">Dubai<br>
                                <input type="radio" name="my_radio_city" value="Kampala">Kampala<br>

                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="cities" class="col-md-4 col-form-label text-md-right">{{ __('Favourite Sports') }}</label>
                            <div class="col-md-6">
                                <input type="radio" id="rugby" value="rugby" name="Sports"><label for="rugby">Rugby</label><br>
                                <input type="radio" id="football" value="football" name="Sports"><label for="football">Football</label><br>
                                <input type="radio" id="athletics" value="athletics" name="Sports"><label for="athletics">Athletics</label><br>
                                <input type="radio" id="basketbal" value="basketbal" name="Sports"><label for="basketbal">Basketbal</label><br>

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
        $("#select_all").on("click", function() {
            if(this.checked){
                $(".my_city").prop('checked', true);
            }
            else{
                $(".my_city").prop('checked', false);
            }
        });
    })
</script>
@endsection