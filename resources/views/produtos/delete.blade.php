@extends('includes.base')
@section('title', 'Produtos')

@section('content')
<h2>Apagar produto</h2>
<p>Você está preste a perder {{ $prod->name}}.</p>
@endsection
