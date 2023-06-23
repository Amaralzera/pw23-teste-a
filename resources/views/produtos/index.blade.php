@extends('includes.base')

@section('title', 'produtos')

@section('content')
@if (session('content'))
    <div style="background-color:greenyellow";>
        {{ session('sucesso')}}
    </div>


@endif

<form action="{{ route('produtos') }}" method="POST">
    @csrf
    <input type="text" name="busca">
    <select name="ord" >
            <option value="asc">Crescente</option>
            <option value="desc">descrescente</option>
    </select>
    <input type="submit" value="buscar">
</form>
<table border="1" style="border-color: chartreuse">
    <tr>
        <th>Nome</th>
        <th>preço</th>
        <th>quantidade</th>
        <th>Editar</th>
        <th>Apagar</th>
    </tr>

    @foreach ($prods as $prod)

    <tr>
        <td><a href="{{ route('produtos.view', $prod->id)}}">{{ $prod->name }}</a></td>
        <td>{{ number_format($prod->price, 2, ',','.') }}</td>
        <td>{{ $prod->quantify }}</td>
        <td><a href="{{route('produtos.edit', $prod->id)}}">Editar</a></td>
        <td><a href="{{route('produtos.delete', $prod->id)}}">Apagar</a></td>
    </tr>
    @endforeach

</table>
{{ $prods->links('vendor.pagination.default') }}
    <a href="{{ route('produtos.add')}}">Adicionar produto</a>
@endsection
