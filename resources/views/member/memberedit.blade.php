@extends('mylayout.app')

@section('content')
<div class="container">
	<h4>Ubah Data Member</h4><br  />
  <form method="post" action="{{action('MemberController@update', $member->id_member)}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input name="_method" type="hidden" value="PUT">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="fullname">Nama Lengkap:</label>
      <input type="text" class="form-control" name="fullname" value="{{$member->fullname}}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="form-group col-md-4">
      <label for="dob">Tanggal Lahir</label>
      <input type="text" class="form-control" name="dob" value="{{$member->dob}}" date-format="yyyy-mm-dd">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="form-group col-md-4">
      <label for="address">Alamat</label>
      <input type="text" class="form-control" name="address" value="{{$member->address}}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <button type="submit" class="btn btn-success">Update</button>
    </div>
  </div>
</form>
</div>
@endsection
