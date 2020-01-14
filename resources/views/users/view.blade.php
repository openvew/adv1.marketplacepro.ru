@extends('layouts.home')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">{{  $user->name}}</h1>
		
	<div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
            <div class="row">
			    <div class="col-lg-9">
                    <div class="p-5">
					    <div class="row">
						    <div class="col-lg-3 col-sm-12">
						    {{ __('E-Mail Address') }}:
							</div>
						    <div class="col-lg-9 col-sm-12">
							{{$user->email}}
							</div>
					    </div>
					</div>
				</div>	
			</div>
		</div>	
	
	</div>	
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		@ProductWidget(["template"=>"counter_companies","user_id"=>$user->id])
        <!-- Earnings (Monthly) Card Example -->
		@ProductWidget(["template"=>"counter_offers"])
        <!-- Earnings (Monthly) Card Example -->
		@ProductWidget(["template"=>"counter_shops"])
		@ProductWidget(["template"=>"counter_balamnce"])
		
    </div>
		
@endsection