@extends('dashboard.layout')
@section('title', 'Add doctor')
@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding-top: 100px">
        <form action="{{route('doctors.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" style="color:white" name="name">
          
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
              </div>
              
            <button type="submit" class="btn btn-success w-100 mt-5">Add</button>
          </form>
        </div>
    </div>
{{-- <div class="container-fluid page-body-wrapper">
    <div class="d-flex">
        <div class="overflow-auto" style="height: 400px">
            <div class="card m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                            class="img-fluid rounded-start" />
                 admin               This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-2" style="max-width: 540px;">
                <div class="row g-0">
                 admin       <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                            class="img-fluid rounded-start" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection