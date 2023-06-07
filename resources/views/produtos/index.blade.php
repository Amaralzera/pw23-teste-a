@extends('includes.base')

@section('title', 'produtos')

@section('content')
@if (session('content'))
    <div style="background-color:greenyellow";>
        {{ session('sucesso')}}
    </div>


@endif
<table border="1" style="border-color: chartreuse">
    <tr>
        <th>Nome</th>
        <th>preço</th>
        <th>quantidade</th>
        <th>Editar</th>
    </tr>

    @foreach ($prods as $prod)

    <tr>
        <td><a href="{{ route('produtos.view', $prod->id)}}">{{ $prod->name }}</a></td>
        <td>{{ number_format($prod->price, 2, ',','.') }}</td>
        <td>{{ $prod->quantify }}</td>
        <td><a href="{{route('produtos.edit', $prod->id)}}">Editar</a></td>
    </tr>
    @endforeach

</table>
    <a href="{{ route('produtos.add')}}">Adicionar produto</a>
@endsection
