@extends('layouts.app')
@section('title') Solicitud de Revision @endsection
@section("content")
  <form method="post"  action="/solicitar_revision/create">
    @if($errors->any())
     @foreach($errors->all() as $error)
     <div> {{ $error }} </div>
     @endforeach
    @endif
     {{ csrf_field() }}

  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Integrantes</label>
    <div class="col-10">
      <input class="form-control" name="texto" type="text" placeholder="Artisanal kale" id="example-text-input">
    </div>
  </div>


  <div class="form-group row">
    <label for="example-url-input" class="col-2 col-form-label">URL</label>
    <div class="col-10">
      <input class="form-control" type="url" placeholder="https://getbootstrap.com" id="example-url-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-password-input" class="col-2 col-form-label">Password</label>
    <div class="col-10">
      <input class="form-control" type="password" value="hunter2" id="example-password-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-number-input" class="col-2 col-form-label">Number</label>
    <div class="col-10">
      <input class="form-control" type="number" value="42" id="example-number-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
    <div class="col-10">
      <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-date-input" class="col-2 col-form-label">Date</label>
    <div class="col-10">
      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-month-input" class="col-2 col-form-label">Month</label>
    <div class="col-10">
      <input class="form-control" type="month" value="2011-08" id="example-month-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-week-input" class="col-2 col-form-label">Week</label>
    <div class="col-10">
      <input class="form-control" type="week" value="2011-W33" id="example-week-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-time-input" class="col-2 col-form-label">Time</label>
    <div class="col-10">
      <input class="form-control" type="time" value="13:45:00" id="example-time-input">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-color-input" class="col-2 col-form-label">Color</label>
    <div class="col-10">
      <input class="form-control" type="color" value="#563d7c" id="example-color-input">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

@endsection