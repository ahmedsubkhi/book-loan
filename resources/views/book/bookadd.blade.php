@extends('mylayout.app')

@section('content')
<div class="container">
  <h4>Input Data Buku</h4><br/>
  <form method="post" action="{{url('book')}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="title">Judul Buku:</label>
        <input type="text" class="form-control" name="title">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
        <label for="author">Pengarang:</label>
        <input type="text" class="form-control" name="author">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
        <label for="isbn">ISBN:</label>
        <input type="text" class="form-control" name="isbn">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
        <label for="published">Tahun Publish:</label>
        <input type="text" class="form-control" name="published">
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
