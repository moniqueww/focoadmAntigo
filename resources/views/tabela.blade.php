<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
      <tr>
        @foreach($requisito as $requisito)
        <td> {{$requisito->descricao}} </td>
        @endforeach
      <tr>
    </thead>
    <tbody>
        @foreach($predio as $predio)
        <tr> {{$predio->nome}}</tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection