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
          <td>Nome</td>
          <td>Email</td>
          <td>Cargo</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
      @foreach($funcionario as $funcionario)
      <tr>
        <td> {{$funcionario->id}} </td>
        <td> {{$funcionario->nome}} </td>
        <td> {{$funcionario->email}} </td>
        <td> {{$funcionario->cargo}} </td>
        <td><a href="/funcionario/edita/{{$funcionario->id}}" class="btn btn-sm btn-primary">Editar</a>
            <a href="/funcionario/apaga/{{$funcionario->id}}" class="btn btn-sm btn-danger">Apagar</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<div>
@endsection