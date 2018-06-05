@extends('mylayout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
									Daftar Member
								</div>

                <div class="card-body">
									<div class="pull-right">
										<a href="{{url('member/create')}}" class="btn btn-success btn-xs">Tambah Member</a>
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
											<th>Nama Lengkap</th>
											<th>Tanggal Lahir</th>
											<th>Alamat</th>
											<th colspan="2">Action</th>
										</tr>
									</thead>
									<tbody>

										@foreach($members as $member)
										@php
											@endphp
										<tr>
											<td>{{$member['fullname']}}</td>
											<td>{{$member['dob']}}</td>
											<td>{{$member['address']}}</td>
											<td><a href="{{action('MemberController@edit', $member['id_member'])}}" class="btn btn-warning">Edit</a></td>
											<td>
												<form action="{{action('MemberController@destroy', $member['id_member'])}}" method="post">
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
