@extends('mylayout.app')

@section('content')
<div class="container">
  <h4>Input Data Member</h4><br/>
  <form method="post" action="{{url('member')}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="fullname">Nama Lengkap:</label>
        <input type="text" class="form-control" name="fullname">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
        <label for="dob">Tanggal Lahir:</label>
        <input type="date" class="form-control tanggal" name="dob" date-format="yyyy-mm-dd">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
        <label for="address">Alamat:</label>
        <input type="text" class="form-control" name="address">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4" style="margin-top:60px">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection
