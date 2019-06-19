<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  th{
    background-color: black;
    color:white;
    border: 1px lightgrey solid;
  }
</style>
<a href="{{ route('predio') }}"> Cadastrar prédio</a>
<a href="{{ route('requisito') }}"> Cadastrar requisito</a>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
      <tr>
      <th></th>
        @foreach($data['requisito'] as $requisito)
        <th> {{$requisito->descricao}} </th>
        @endforeach
      <tr>
    </thead>
    <tbody>
        @foreach($data['predio'] as $predio)
        <tr> 
          <td>
          {{$predio->nome}}
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection