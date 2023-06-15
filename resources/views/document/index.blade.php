@extends('layouts._layout')
@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>DataTables</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">DataTables</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Tambah Tipe Dokumen</h3>
					</div>
					@if (session('status'))
							<div class="alert alert-success alert-dismissible">
								<button class="close" data-dismiss="alert" area-hidden="true" type="button">x</button>
								{{session('status')}}
							</div>
					@endif
					<!-- /.card-header -->
					<!-- form start -->
					<form action="/documents" method="POST" enctype="multipart/form-data">
						@csrf()
						<div class="card-body">
							<div class="row">
								<div class="col-3">
									<div class="form-select">
										<label for="exampleInputEmail1">Jenis Dokumen</label>
										<select name="type_document_id" id="" class="form-control">
											@foreach ($type as $item)
												<option value="{{$item->id}}">{{$item->name}}</option>
											@endforeach
										</select>
										@error('type_document_id')
											<div class="invalid-feedback">
												<strong>{{$message}}</strong>
											</div>
										@enderror
									</div>
								</div>
								<div class="col-3">
									<div class="form-group">
										<label for="exampleInputEmail1">Nomor Dokumen</label>
										<input
											type="text"
											class="form-control"
											id="exampleInputEmail1"
											name="number"
											placeholder="Nomor Dokumen"
										/>
										<span class="error invalid-feedback">{{$errors->first('number')}}</span>
									</div>
								</div>
								<div class="col-3">
									<div class="form-group">
										<label for="exampleInputEmail1">Judul Dokumen</label>
										<input
											type="text"
											class="form-control"
											id="exampleInputEmail1"
											name="name"
											placeholder="Judul Dokumen"
										/>
									</div>
								</div>
								<div class="col-3">
									<div class="form-group">
										<label>Tanggal Ditetapkan</label>
											<div class="input-group date" id="reservationdate" data-target-input="nearest">
													<input type="text" name="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
													<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
															<div class="input-group-text"><i class="fa fa-calendar"></i></div>
													</div>
											</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-3">
									<div class="form-group">
										<label for="exampleInputFile">Upload Dokumen</label>
										<div class="input-group">
											<input
													type="file"
													name="file"
													class="form-control"
													id="exampleInputFile"
												/>
										</div>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">
								Submit
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">DataTable with default features</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>NO</th>
								<th>JENIS DOKUMEN</th>
								<th>NO DOKUMEN</th>
								<th>NAMA DOKUMEN</th>
								<th>TANGGAL DOKUMEN</th>
							</tr>
							</thead>
							<tbody>
								@foreach ($data as $no => $item)
								<tr>
									<td>{{$no+1}}</td>
									<td>{{$item->typedocument->name}}</td>
									<td>{{$item->number}}</td>
									<td>
										<a href="{{$item->file}}">{{$item->name}}</a>
									</td>
									<td>{{$item->date}}</td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
							<tr>
								<th>NO</th>
								<th>JENIS DOKUMEN</th>
								<th>NO DOKUMEN</th>
								<th>NAMA DOKUMEN</th>
								<th>TANGGAL DOKUMEN</th>
							</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
@endsection