@extends('includes.base')

@section('title', 'produtos - Adicionar')

@section('content')
 <h2>adicione seu produto</h2>
 @if ($errors)
        @foreach ( $errors->all() as $err)
        {{ $err }} <br>

        @endforeach

 @endif

  <form action="{{ route('produtos.addSave')}}" method="post">
 @csrf
    <input type="text" name="name" placeholder="nome do produto" value="{{ old  ('name')}}">
    <br>
    <input type="number" name="price" step="0.01"
    placeholder="Preço" value="{{ old  ('price')}}">
    <br>
    <input type="number" name="quantify"
    placeholder="quantidade" value="{{ old  ('quantify')}}">
    <hr>
    <marquee> <input type="submit" value="Gravar"></marquee>
</form>
@endsection
