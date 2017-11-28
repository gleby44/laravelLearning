@extends('layouts.base') 
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
				{{$obj->name}}
                </div>
				{!!$obj->body!!}
            </div>
        </div>
@endsection