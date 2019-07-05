<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
    <div class="card-header">
    Cadastrar requisito
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('requisito.store') }}">
          <div class="form-group">
              @csrf
              <label for="hora">Nome</label>
              <input type="text" name="descricao"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
      </div>
      </div>
      <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Descrição</td>
          <td>Ações</td>
        </tr>
    </thead>
    <tbody>
      @foreach($requisitos as $requisito)
      <tr>
        <td> {{$requisito->id}} </td>
        <td> {{$requisito->descricao}} </td>
        <td><a href="/requisito/edita/{{$requisito->id}}" class="btn btn-sm btn-primary">Editar</a>
            <a href="/requisito/apaga/{{$requisito->id}}" class="btn btn-sm btn-danger">Apagar</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection