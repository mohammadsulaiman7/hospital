@extends('dashboard.layout')
@section('title', 'Add speciality')
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding-top: 100px">
        <form action="{{route('specialities.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" style="color:white" name="name">
            </div>
            <div class="form-group">
              <label for="cost">Cost</label>
              <input type="text" class="form-control" id="cost" aria-describedby="emailHelp" style="color:white" name="cost">
            </div>
            <button type="submit" class="btn btn-success w-100 mt-5">Add</button>
          </form>
        </div>
    </div>
    @endsection
