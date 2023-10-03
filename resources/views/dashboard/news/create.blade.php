@extends('dashboard.layout')
@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="container" style="padding-top: 100px">
    <form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <input type="hidden" class="form-control" id="exampleInputPassword1" style="color:white" name="user_id" value="{{Auth::user()->id}}">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Title</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" style="color:white"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1 text-white">Content</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" style="color:white"></textarea>
          </div>
          {{-- <select class="form-select mb-2 bg-dark" aria-label="Default select example" style="color:white" name="category_id">
            <option selected disabled>Categories</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select> --}}
          <div class="mb-3">
            <x-label for="user" :value="__('Categories')" />
    
            {{-- <div class="input-group-text">USER</div> --}}
            <select class="form-select bg-dark " style="color:white;" data-placeholder="اختر المستخدم" name="category_id" id="prepend-text-multiple-field">
                <option value="" disabled selected>Categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    
          <div class="input-group mb-3 mt-3">
            <input type="file" class="form-control bg-dark" style="color: white" name="cover" accept="image/*">
          </div>
        <button type="submit" class="btn btn-inverse-success w-100 mt-5">Create</button>
      </form>
    </div>
</div>
@endsection