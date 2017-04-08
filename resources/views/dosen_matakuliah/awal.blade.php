@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Dosen Mengajar</strong>
		<a href="{{ url('dosen_matakuliah/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Jadwal Dosen Mengajar</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Dosen</th>
				<th>NIP</th>
				<th>Nama Matakuliah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuadosen_matakuliah as $dosen_matakuliah)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $dosen_matakuliah->dosen->nama or 'Nama Kosong' }}</td>
					<td>{{ $dosen_matakuliah->dosen->nip or 'NIP Kosong' }}</td>
					<td>{{ $dosen_matakuliah->matakuliah->title or 'Title Kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('dosen_matakuliah/edit/'.$dosen_matakuliah->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('dosen_matakuliah/'.$dosen_matakuliah->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('dosen_matakuliah/hapus/'.$dosen_matakuliah->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
	<a href="{{url('/') }}" class="btn btn-xs btn-primary pull-right">
	<i class="fa fa=steam"></i>Ke Halaman Awal</a>
</div>
@stop