@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header">{{ ('What do you feel like eating today?') }}</div>

				<div class="links">
					@foreach($hold_my_food as $row)
					<div>
						<a href="/localfood">
					    	<img src="{{ $row->food_photo }}"/>
					    	<input type="button" name="localfood" value="{{ $row->order_type }}">
					    </a>
					</div>
				    <a href="#">Take Aways</a>
				    @endforeach
				</div>
			</div>
		</div>
		<a href="/reciept"><div class="card-header">{{ ('View my Reciept') }}</div></a>
	</div>
</div>
@endsection