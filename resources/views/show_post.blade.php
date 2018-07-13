@extends('layouts.app')

@section('content')
<div class="panel panel-primary" style="margin: 20px">
	<div class="panel-body">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Title</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $row)
				<tr>
					<td>1</td>
					<td><a href="{{url('post')}}/{{$row->alias}}">{{$row->title}}</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection