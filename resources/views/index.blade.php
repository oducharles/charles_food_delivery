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
					    	<img src=""/>
					    	<input type="button" name="localfood" value="Local Food">
					    </a>
					</div>
				    <a href="#">Take Aways</a>
				</div>
			</div>
		</div>
		<a href="/paid"><div class="card-header">{{ ('View my Reciept') }}</div></a>
	</div>
</div>
@endsection