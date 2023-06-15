@extends('includes.base')
@section('title', 'Produtos')

@section('content')
<h2>apagar produto</h2>
<p>Voce estas preste a apagar</p>
<p>tem certeza que quer fazer isso</p>

<form action="{{ route('produtos.deleteForReal', $prod->id) }}" method="POST">
    @csrf
    @method('delete')
    <input type="submit" value="Pó apagar">
</form>

@endsection
