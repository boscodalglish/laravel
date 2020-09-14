@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
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
          <td>Make</td>
          <td>Model</td>
          <td>Colour</td>
          <td>Top Speed(MPH)</td>
          <td>View</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($Modelsmake as $case)
        <tr>
            <td>{{$case->id}}</td>
            <td>{{$case->make}}</td>
            <td>{{$case->model}}</td>
            <td>{{$case->colour}}</td>
            <td>{{$case->top_speed}}</td>
            <td><a href="{{ route('coronas.show', $case->id)}}" class="btn btn-primary">View</a></td>
            <td><a href="{{ route('coronas.edit', $case->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('coronas.destroy', $case->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('coronas.create')}}" class="btn btn-danger">Add Model</a>
<div>
@endsection