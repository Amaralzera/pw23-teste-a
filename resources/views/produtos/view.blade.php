@extends('includes.base')

@section('title', 'Produtos - Ver')

@section('content')
    <h2>{{ $prod->name}}</h2>
    <p>Preço: R$ {{number_format($prod->price, 2, ',', '.')}}</p>

    <p>
        <a href="{{ route('produtos')}}">Voltar</a>
    </p>
@endsection
