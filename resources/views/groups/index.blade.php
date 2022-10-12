@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{--    <a class="btn btn-success mb-3" href="{{route('cars.create')}}">Add car</a>--}}

                    <table class="table table-light table-striped">
                        <tr>
                            <th>Group</th>
                            <th>User ID</th>
                            <th>Start year</th>
                            <th>End year</th>
                            <th></th>
                        </tr>

                        @foreach($groups as $group)
                            <tr>

                                <td>{{$group->Name}}</td>
                                <td>{{$group->user_id}}</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-warning" href="#">Lectures</a>
                                    <a class="btn btn-warning" href="#">Students</a>
                                    <a class="btn btn-warning" href="#">Edit</a>
                                </td>

                                {{--                <td>--}}
                                {{--                    {{$car->owner->name}}--}}
                                {{--                    {{$car->owner->surname}}--}}
                                {{--                </td>--}}
                                {{--                <td>--}}
                                {{--                    <a class="btn btn-warning" href="{{route('cars.edit', $car->id)}}">Edit</a>--}}
                                {{--                </td>--}}
                                {{--                <td>--}}
                                {{--                    <form action="{{route('cars.destroy', $car->id)}}" method="post">--}}
                                {{--                        @csrf--}}
                                {{--                        @method('DELETE')--}}
                                {{--                        <button class="btn btn-danger">Delete</button>--}}
                                {{--                    </form>--}}
                                {{--                </td>--}}
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

