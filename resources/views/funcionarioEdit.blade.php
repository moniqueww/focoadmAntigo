<!-- edit.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Book
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
      <form method="post" action="{{ route('funcionario.update', $funcionario->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nome">Nome do funcionário:</label>
              <input type="text" class="form-control" name="nome" value="{{$funcionario->nome}}"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" value="{{$funcionario->email}}"/>
          </div>
          <div class="form-group">
              <label for="senha">Senha:</label>
              <input type="text" class="form-control" name="senha" value="{{$funcionario->senha}}"/>
          </div>
          <div class="form-group">
              <label for="cargo">Cargo:</label>
              <select name="cargo">
                <option value='' disabled selected> </option>
                <option value='gerente' 
                <?php 
                    if($funcionario['cargo'] == 'gerente'){
                        echo 'selected';
                    }
                ?>> Gerente </option>
                <option value='funcionario'
                <?php 
                    if($funcionario['cargo'] == 'funcionario'){
                        echo 'selected';
                    }
                ?>> Funcionário </option>
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Update Funcionário</button>
      </form>
  </div>
</div>
@endsection