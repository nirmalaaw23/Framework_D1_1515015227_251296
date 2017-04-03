@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
		<a href="{{ url('jadwal_matakuliah/tambah') }}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>jadwal_matakuliah</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID Dosen Mengajar</th>
				<th>ID Mahasiswa</th>
				<th>ID Ruangan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach($data as $jadwal_matakuliah)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $jadwal_matakuliah->dosen_matakuliah_id or 'dosen_matakuliah_id kosong' }}</td>
					<td>{{ $jadwal_matakuliah->mahasiswa_id or 'mahasiswa_id kosong' }}</td>
					<td>{{ $jadwal_matakuliah->ruangan_id or 'ruangan_id kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
							<a href="{{ url('jadwal_matakuliah/edit/'.$jadwal_matakuliah->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>
							<a href="{{ url('jadwal_matakuliah/'.$jadwal_matakuliah->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat"><i class="fa fa-eye"></i></a>
							<a href="{{ url('jadwal_matakuliah/hapus/'.$jadwal_matakuliah->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop