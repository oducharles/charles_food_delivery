@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header">{{ ('What do you feel like eating today?') }}</div>

				<div class="links">
					<div>
						<a href="/localfood">
							<img src="photos/local_food_pic.jpg" width="150px" height="auto"/><br><br>
							<label id="localfood" name="localfood">Local Foods</label>
					    </a>
					</div>
				    <a href="#">
				    	<img src="storage/take_away_pic.jpg" width="150px" height="auto"/><br><br>
				    	<label id="take_away" name="take_away">Local Foods</label>
				    </a>
				</div>
			</div>
		</div>
		@if (Auth::check())
		<a href="/my_reciept"><div class="card-header">{{ ('View my Reciept') }}</div></a>
		@endif
	</div>
</div>
@endsection