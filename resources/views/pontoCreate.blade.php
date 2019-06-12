<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
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
      <form method="post" action="{{ route('pontos.store') }}">
          <div class="form-group">
              @csrf
              <label for="hora">Horário de:</label>
              <select name="hora">
                <option value="/" selected disabled> </option>
                <option value="entrada"> Entrada </option>
                <option value="saida"> Saída </option>
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
  </div>
</div>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Data e hora</td>
          <td>Horário de</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
      @foreach($pontos as $pontos)  
      <tr>
        <td> {{$pontos->id}} </td>
        <td> {{$pontos->created_at}} </td>
        <td> {{$pontos->hora}} </td>
        <td>
          <a href="/ponto/apaga/{{$pontos->id}}" class="btn btn-sm btn-danger">Apagar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<div>
@endsection