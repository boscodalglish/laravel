@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Cars Data
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
    <form method="post" action="{{ route('cars.store') }}">
        <div class="form-group">
            @csrf
            <label for="make">Make:</label>
            <input type="text" class="form-control" name="make"/>
        </div>
        <div class="form-group">
            <label for="model">Model :</label>
            <input type="text" class="form-control" name="model"/>
        </div>
        <div class="form-group">
            <label for="colour">Colour :</label>
            <input type="text" class="form-control" name="colour"/>
        </div>
        <div class="form-group">
            <label for="top_speed">Top Speed :</label>
            <input type="text" class="form-control" name="top_speed"/>
        </div>
        <button type="submit" class="btn btn-primary">Add Data</button>
        <a href="{{ route('cars.index')}}" class="btn btn-danger">View List</a>
    </form>
  </div>
</div>
@endsection