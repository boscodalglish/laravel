@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
  Edit Cars Data
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
      <form method="post" action="{{ route('cars.update', $Modelsmake->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="make">Make:</label>
              <input type="text" class="form-control" name="make" value="{{ $Modelsmake->make }}"/>
          </div>
          <div class="form-group">
              <label for="model">Model :</label>
              <input type="text" class="form-control" name="model" value="{{ $Modelsmake->model }}"/>
          </div>
          <div class="form-group">
              <label for="colour">Colour :</label>
              <input type="text" class="form-control" name="colour" value="{{ $Modelsmake->colour }}"/>
          </div>
          <div class="form-group">
              <label for="model">Top Speed :</label>
              <input type="text" class="form-control" name="top_speed" value="{{ $Modelsmake->top_speed }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection