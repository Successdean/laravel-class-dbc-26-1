@extends('layout.master')

@section('page_title', 'Add a programme')

@section('content')
<form action="/programmes" method="POST">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Programme Name</label>
    <input type="text" class="form-control" name="name" >
  </div>

  <div class="mb-3">
    <label for="programme_id" class="form-label">Programme ID</label>
    <input type="text"  class="form-control" name="programme_id" >
  </div>

  <div class="mb-3">
    <label for="duration" class="form-label">Duration (in days)</label>
    <input type="number"  class="form-control" name="duration" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
