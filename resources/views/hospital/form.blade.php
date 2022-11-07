@extends('layouts.main')
@section('content')
<h1><b>FILL THE FORM BELOW</b></h1>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif
<form method="POST" action="{{route('hospital.store')}}">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{old('name')}}">
        @error('name')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-control" name="gender" id="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
        @error('gender')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="speciality" class="form-label">Speciality</label>
    <input type="text" class="form-control" name="speciality" placeholder="Enter Speciality" value="{{old('speciality')}}">
        @error('speciality')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="nationality" class="form-label">Nationality</label>
    <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality" value="{{old('nationality')}}">
        @error('nationality')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input type="tel" class="form-control" name="contact" placeholder="Enter Phone Number" value="{{old('contact')}}">
        @error('contact')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('hospital.index')}}"class="btn btn-danger">Back</a>
</form>
@endsection
