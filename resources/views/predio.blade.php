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
    Cadastrar prédio
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
      <form method="post" action="{{ route('predio.store') }}">
          <div class="form-group">
              @csrf
              <label for="hora">Nome</label>
              <input type="text" name="nome"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
</div>
@endsection