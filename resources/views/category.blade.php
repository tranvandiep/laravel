@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('postCategory') }}">
<div class="panel panel-primary" style="margin: 30px;">
	<div class="panel-heading">
		<h1>Nhap thong tin danh muc</h1>
	</div>
	<div class="panel-body">
		<div class="form-group">
			{{ csrf_field() }}
			<label>Tieu de san pham</label>
			<input class="form-control" type="text" name="title">
		</div>
		<div class="form-group">
			<label>Mo ta</label>
			<textarea class="form-control" name="description">

			</textarea>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</div>
</div>
</form>
@endsection