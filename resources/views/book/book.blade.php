@extends('mylayout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
									Daftar Buku
								</div>

                <div class="card-body">
									<div class="pull-right">
										<a href="{{url('book/create')}}" class="btn btn-success btn-xs">Tambah Buku</a>
									</div>
									<br>
									@if (\Session::has('success'))
									<div class="alert alert-success">
									<p>{{ \Session::get('success') }}</p>
									</div><br />
									@endif
									<table class="table table-striped">
									<thead>
										<tr>
											<th>Judul Buku</th>
											<th>Pengarang</th>
											<th>ISBN</th>
											<th>Tahun Publish</th>
											<th colspan="2">Action</th>
										</tr>
									</thead>
									<tbody>

										@foreach($books as $book)
										@php
											@endphp
										<tr>
											<td>{{$book['title']}}</td>
											<td>{{$book['author']}}</td>
											<td>{{$book['isbn']}}</td>
											<td>{{$book['published']}}</td>
											<td><a href="{{action('BookController@edit', $book['id_book'])}}" class="btn btn-warning">Edit</a></td>
											<td>
												<form action="{{action('BookController@destroy', $book['id_book'])}}" method="post">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<input name="_method" type="hidden" value="DELETE">
													<button class="btn btn-danger" type="submit">Delete</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
