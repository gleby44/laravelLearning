@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
				<form action="{{asset('home')}}" method="post" enctype="multipart/form-data">
					{!! csrf_field() !!}
				  <div class="form-group">
				  <div>
					@if($errors->has('name'))
					{{$errors->first('name')}}
					@endif
				  </div>
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="name">
				  </div>
				  <div class="form-group">
					<textarea class="form-control" id="body" name="body"></textarea>
				  </div>
				  <div class="form-group">
					<label for="picture">File input</label>
					<input type="file" id="picture" name="pic">
					<p class="help-block">Example block-level help text here.</p>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
            </div>
        </div>
    </div>
</div>
@endsection
