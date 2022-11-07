@extends ('layouts.main')
@section ('content')
<div class="container">
    <h1>Doctors List</h1>
    <div>
        <a href="{{route('hospital.create')}}" class="btn btn-primary">Add</a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Speciality</th>
                <th>Nationality</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hospitals as $hospital)
            <tr>
                <td>{{$hospital->name}}</td>
                <td>{{$hospital->gender}}</td>
                <td>{{$hospital->speciality}}</td>
                <td>{{$hospital->nationality}}</td>
                <td>{{$hospital->contact}}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{route('hospital.show', $hospital->id) }}" title="View Student"><button class="btn btn-success">View</button></a>
                        <a href="{{route('hospital.edit', $hospital->id) }}" title="Edit Student"><button class="btn btn-info">Edit</button></a>

                        <form action="{{ route('hospital.destroy', $hospital->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>

                    {{-- <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" onclick="goto('{{route('hospital.index', $hospital->id)}}')" class="btn btn-warning">View</button>

                        <button type="submit"  class="btn btn-danger" onclick="deleteHospital(this)">
                            Delete
                            <form action="{{ route('hospital.destroy', $hospital->id) }}" method="POST">
                                @method('delete')
                                @csrf
                            </form>
                        </button>
                        <button type="button" class="btn btn-success">Edit</button>
                      </div> --}}

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- <script>
    function goto(route){
        window.location.href = route;
    }

    function deleteHospital(buttonElement){
        const confirmResponse = confirm('Are you sure?');
        if (!confirmResponse){
            return;
        }

        const form = buttonElement.querySelector('form');
       form.submit();



    }
</script> --}}
@endsection
