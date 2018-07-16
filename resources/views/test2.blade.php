@extends('layouts.app')

@section('content')
@for ($i=0; $i<100; $i++)
	@if($i % 2 == 0)
		<br/>Xin chao {{$i}}
	@endif
	@unless($i % 2 == 0)
		<br/><font color=RED>{{$i}}</font>
	@endunless
@endfor
<?php
for ($i = 0; $i < 10; $i++) {
	echo "<br/>Test : ".$i;
}
?>
@endsection