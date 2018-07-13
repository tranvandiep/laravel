@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('postForm') }}">
	<div class="panel panel-primary" style="margin: 20px">
		<div class="panel-body">
			<div class="form-group">
				{{ csrf_field() }}
				<label>Nhap tieu de bai viet</label>
				<input class="form-control" type="text" name="title" name="title">
			</div>
			<div class="form-group">
				<label>Mo ta</label>
				<textarea class="form-control" name="description"></textarea>
			</div>
			<input type="submit" value="submit">
		</div>
	</div>
</form>
@endsection