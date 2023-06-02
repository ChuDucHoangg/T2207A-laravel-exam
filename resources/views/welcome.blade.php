@extends("layouts.layout-student")
@section("main")

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>List of students</h1>
            </div>
            <div class="col">
            </div>
            <div class="col">
            <a href="{{url("/studentCreate")}}" type="button" class="btn btn-primary">Add Student</a>
            </div>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Telephone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($student as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->telephone}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
