@extends('layouts.app')


@section('menu')




<li><a class="ajax-link" href="{{url()}}/inicio">
	<i class="glyphicon glyphicon-home"></i>
	<span> Inicio</span></a>
</li>

<li>
	<a class="ajax-link" href="{{url()}}/referido/create">
		<i class="glyphicon glyphicon-eye-open"></i>
		<span> Referidos</span>
	</a>
</li>

<li>
	<a class="ajax-link" href="{{url()}}/entrenamiento/create">
		<i class="glyphicon glyphicon-eye-open"></i>
		<span> Entrenamiento</span>
	</a>
</li>

@endsection
