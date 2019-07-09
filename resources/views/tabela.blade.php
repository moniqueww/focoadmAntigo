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

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a href="#"> </a>
  <form method="post" action="{{ route('tabela.store') }}">
          <div class="form-group">
              @csrf
          </div>
          <div class="form-group">
              <label for="data">Data:</label>
              <input type="date" class="form-control" name="data"/>
          </div>
          <div class="form-group">
              <label for="id_predio">Prédio:</label>
              <select name="id_predio">
                <option value='' disabled selected> </option>
                @foreach($data['predio'] as $predio)
                <option value='{{$predio->id}}'> {{$predio->nome}} </option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="id_requisito">Requisito:</label>
              <select name="id_requisito">
                <option value='' disabled selected> </option>
                @foreach($data['requisito'] as $requisito)
                <option value='{{$requisito->id}}'> {{$requisito->descricao}} </option>
                @endforeach
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Criar funcionário</button>
      </form>
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
          @foreach($data['requisito'] as $requisito)
          <td name='{{$predio->id}}{{$requisito->id}}'>
          </td> 
          @endforeach
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection