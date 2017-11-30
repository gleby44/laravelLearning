@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Товары</div>

                <div class="panel-body">
					@foreach($all as $one)
						<h2><a href="{{asset('/product/'.$one->id)}}"class="btn btn-link">{{$one->name}}</a></h2>
						<img src="{{asset('uploads/tumb/'.(isset($one->photo)?$one->photo:''))}}"/>
						<div class="mytext">{!!$one->body!!}</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
