@extends('admin.layout')
@section('title', 'Add speciality')
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding-top: 100px">
        <form action="{{route('speciality.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" style="color:white" name="name">
            </div>
            <button type="submit" class="btn btn-success w-100 mt-5">Add</button>
          </form>
        </div>
    </div>
    @endsection
