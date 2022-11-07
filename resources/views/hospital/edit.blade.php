@extends('layouts.main')
@section('content')
<h1>Edit Student</h1>
<form method="POST" action="{{ route('hospital.update', $hospital->id) }}">
    @method("patch")
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$hospital->name}}">
        @error('name')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="gender" class="form-label">Gender</label>
    <select class="form-control" name="gender" id="gender" value="{{$hospital->gender}}">
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
    <input type="text" class="form-control" name="speciality" placeholder="Enter Speciality" value="{{$hospital->speciality}}">
        @error('speciality')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="nationality" class="form-label">Nationality</label>
    <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality" value="{{$hospital->nationality}}">
        @error('nationality')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>

  <div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input type="tel" class="form-control" name="contact" placeholder="Enter Phone Number" value="{{$hospital->contact}}">
        @error('contact')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
  </div>
  <input type="submit" value="Update" class="btn btn-success">
</form>
@endsection
