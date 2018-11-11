@extends('layouts.app')
@section('content')

<div class="container pt-3">
	<div class="card">
		<div class="card-header text-center">
			Cadastrar produto
		</div>
		<div class="card-body">
			<form class="form-horizontal"
			method="POST"
			enctype="multipart/form-data"
			action="{{route('products.store')}}">		

			@include('products.partials._form')

			<button class="btn btn-outline-success" type="submit">Criar</button>
		</form>
	</div>
</div>


@endsection
