@extends('mylayout.app')
@section('content')
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
				@if (\Session::has('errors'))
				<div class="alert alert-danger">
				<p>{{ \Session::get('errors') }}</p>
				</div><br />
				@endif

				@if (\Session::has('regsuccess'))
				<div class="alert alert-success">
				<p>{{ \Session::get('regsuccess') }}</p>
				</div><br />
				@endif
        <form action="{{action('LoginController@actlogin')}}" method="post">
					@csrf
          <div class="form-group">
            <label class="col-md-12">Username</label>
            <div class="col-md-12"><input type="text" class="form-control" name="username" id="username"></div>
          </div>
          <div class="form-group">
            <label class="col-md-12">Password</label>
            <div class="col-md-12"><input type="password" class="form-control" name="password" id="password"></div>
          </div>
          <div class="form-group">
            <div class="col-md-12"><button class="btn btn-success">Login</button></div>
          </div>
        </form>
      </div>
    </div>
@endsection
