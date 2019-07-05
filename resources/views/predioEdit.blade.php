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
      <form method="post" action="{{ route('predio.update', $predio->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nome">Nome do prédio:</label>
              <input type="text" class="form-control" name="nome" value="{{$predio->nome}}"/>
          </div>
              </select>
          </div>
          <button type="submit" class="btn btn-primary">Update Prédio</button>
      </form>
  </div>
</div>
@endsection