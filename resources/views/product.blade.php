@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Товары</div>

                <div class="panel-body">
						<h2><a href="{{asset('/product/'.$all->id)}}"class="btn btn-link">{{$all->name}}</a></h2>
						<img src="{{asset('uploads/'.(isset($all->photo)?$all->photo:''))}}"/>
						<div class="mytext">{!!$all->body!!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
