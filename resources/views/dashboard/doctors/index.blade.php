@extends('dashboard.layout')
@section('title', 'All doctors')
@section('content')
    {{-- <div class="container-fluid page-body-wrapper"> --}}
    <div class="float-left" style="padding:20px">
        @foreach ($doctors as $doctor)
            <section class="w-50" style="float: left">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-md-9 col-lg-7 col-xl-5">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-4">
                                    <div class="d-flex text-black">
                                        <div class="flex-shrink-0">
                                            <img src="{{ asset('storage/doctors/' . $doctor->image) }}"
                                                alt="Generic placeholder image" class="img-fluid"
                                                style="width: 180px; border-radius: 10px;">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1 text-white">{{ $doctor->name }}</h5>
                                            <p class="mb-2 pb-1" style="color: white;">{{ $doctor->speciality->name }}</p>
                                            <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                                style="background-color: #efefef;">
                                                <div>
                                                    <p class="small text-muted mb-1">Appointments</p>
                                                    <p class="mb-0">{{ $doctor->appointments->count() }}</p>
                                                </div>
                                                <div class="px-3">
                                                    <p class="small text-muted mb-1">Followers</p>
                                                    <p class="mb-0">976</p>
                                                </div>
                                                <div>
                                                    <p class="small text-muted mb-1">Rating</p>
                                                    <p class="mb-0">8.5</p>
                                                </div>
                                            </div>
                                            <div class="d-flex pt-1">
                                                <a href="#"
                                                    class="text-decoration-none btn btn-inverse-info me-1 flex-grow-1">Chat</a>
                                                <a href="{{ route('doctors.edit', $doctor) }}"
                                                    class="text-decoration-none btn btn-inverse-warning me-1 flex-grow-1">Edit</a>
                                                    <form action="{{ route('doctors.destroy',$doctor)}}" class="d-inline-block"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        {{--  <!-- <button type="submit" class="btn btn-outline-danger " onclick="return confirm('Are you sure?')"></i>حذف</button> -->  --}}
                                                        <button type="button" class=" btn btn-inverse-danger me-1 flex-grow-1"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal{{$doctor->id}}">
                                                            <i class="fas fa-trash-alt"></i> Delete
                                                        </button>
                                                        <div class="modal fade" id="exampleModal{{$doctor->id}}" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            @include('dashboard.includes.deleteModal')
                                                        </div>
                                                        <!-- Modal -->
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
    </div>
@endsection
