@extends('app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header">{{ ('What do you feel like eating today?') }}</div>

				<div class="links">
				    <a href="/localfood">Local Food</a>
				    <a href="">Take Aways</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection