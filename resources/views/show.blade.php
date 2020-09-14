@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View Cars Data
  </div>
  <div class="card-body">
      <form method="post" action="">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="make">Make: {{ $Modelsmake->make }}</label>
          </div>
          <div class="form-group">
              <label for="model">Model: {{ $Modelsmake->model }}</label>
          </div>
          <div class="form-group">
              <label for="colour">Colour: {{ $Modelsmake->colour }}</label>
          </div>
          <div class="form-group">
              <label for="model">Top Speed: {{ $Modelsmake->top_speed }}</label>
          </div>
      </form>
      <a href="{{ route('coronas.index')}}" class="btn btn-danger">View List</a>
      <a href="{{ route('coronas.create')}}" class="btn btn-danger">Add Model</a>
  </div>
</div>
@endsection