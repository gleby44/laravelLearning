@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$cat->name}}</div>

                <div class="panel-body">
				
						<h2>Товары</h2>
						@foreach($cat->products->all() as $one)
						<a href="{{asset('product/'.$one->id)}}">
							<h2>{{$one->name}}</h2>
						</a>
						@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
