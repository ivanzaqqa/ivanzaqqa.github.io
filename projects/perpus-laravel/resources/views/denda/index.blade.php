@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Denda</h3>
				</div>

				<div class="box-body">
					<table class="table table-bordered" id="tabel">
						<thead>
							<tr>
								<th>No</th>
								<th>No. Pinjam</th>
								<th></th>
								<th>Jatuh Tempo</th>
								<th>Tanggal Pengembalian</th>
								<th>Status</th>
								<th>Keterangan</th>
								<th>Detail</th>

							</tr>
						</thead>
						<tbody>

						@php
							$no = 1
						@endphp

						@foreach ($data as $datas)
							<tr>
								<td>{{$no}}</td>
								<td>{{$data->no_pinjam}}</td>
								<td>{{$data->tanggal_pengembalian}}</td>
								<td>{{$data->tanggal_kembali}}</td>
								<td>{{$data->terlambat}}</td>
								<td>
									<button type="button" onClick="bayar()" name="button">Bayar</button>
								</td>
								@php
									$no++
								@endphp
							@endforeach
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>
@endsection