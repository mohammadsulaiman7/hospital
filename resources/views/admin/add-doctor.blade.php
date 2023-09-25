@extends('admin.layout')
@section('title', 'Add doctor')
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding-top: 100px">
        <form action="{{route('doctors.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" style="color:white" name="name">
              {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Age</label>
              <input type="number" class="form-control" id="exampleInputPassword1" style="color:white" name="age">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" ispecialityd="phone" style="color:white" name="phone">
              </div>
              <div class="form-group">
                <label for="room">Room No :</label>
                <input type="text" class="form-control" id="room" style="color:white" name="room_number">
              </div>
              <select class="form-select mb-2 bg-dark" aria-label="Default select example" style="color:white" name="speciality_id">
                <option selected disabled>Speciality</option>
                @foreach ($specialities as $speciality)
                <option value="{{$speciality->id}}">{{$speciality->name}}</option>
                @endforeach
              </select>
              <div class="input-group mb-3 mt-3">
                <input type="file" class="form-control bg-dark" style="color: white" name="image" accept="image/*">
                {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
              </div>
              
            <button type="submit" class="btn btn-success w-100 mt-5">Add</button>
          </form>
        </div>
    </div>
    @endsection

   
  
