@extends('mylayout.app')

@section('content')
<div class="container">
	<h4>Ubah Data Buku</h4><br  />
  <form method="post" action="{{action('BookController@update', $book->id_book)}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input name="_method" type="hidden" value="PUT">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="title">Judul:</label>
      <input type="text" class="form-control" name="title" value="{{$book->title}}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="form-group col-md-4">
      <label for="author">Pengarang</label>
      <input type="text" class="form-control" name="author" value="{{$book->author}}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="form-group col-md-4">
      <label for="isbn">ISBN</label>
      <input type="text" class="form-control" name="isbn" value="{{$book->isbn}}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
      <div class="form-group col-md-4">
      <label for="published">Tahun Publish</label>
      <input type="text" class="form-control" name="published" value="{{$book->published}}">
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
