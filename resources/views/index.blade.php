@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header">{{ ('What do you feel like eating today?') }}</div>

				<div class="links">
					<div class="card-group" id="local_food_name">
                        <div class="card">
                        	<a href="/localfood">
                            	<img class="card-img-top" src="storage/local_food_pic.jpg" style="height: 170px !important; padding: 2px; border-radius: 5px;" alt="Card image cap">
	                            <div class="card-body">
	                                <h5 class="card-title">Local Foods</h5>
	                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	                                <p class="card-text"><small class="text-muted">Take a look</small></p>
	                            </div>
                        	</a>
                        </div>

                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="storage/take_away_pic.jpg" style="height: 170px !important; padding: 2px; border-radius: 5px;" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Take Away</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Take a look</small></p>
                                </div>
                            </a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		@if (Auth::check())
			<a href="/my_reciept"><div class="card-header">{{ ('View my Reciept') }}</div></a>
		@endif
	</div>
</div>
@endsection