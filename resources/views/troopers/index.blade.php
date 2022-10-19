@extends('layouts.app')

@section('content')
    <h1>
       Troopers
    </h1>

    <p>
        Down below you can find every trooper.
    </p>

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('troopers.create') }}"> Create New Trooper</a>
            </div>
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Faction</th>
            <th>Era</th>
{{--            <th>Rank</th>--}}
{{--            <th>Legion</th>--}}
            <th width="280px">Action</th>
        </tr>
        @foreach ($troopers as $trooper)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $trooper->name }}</td>
                <td>{{ $trooper->faction }}</td>
                <td>{{ $trooper->era }}</td>
{{--                <td>{{ $trooper->rank }}</td>--}}
{{--                <td>{{ $trooper->legion }}</td>--}}
                <td>
                    <form action="{{ route('troopers.destroy',$trooper->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('troopers.show',$trooper->id) }}">Details</a>

                        <a class="btn btn-primary" href="{{ route('troopers.edit',$trooper->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $troopers->links() !!}

@endsection
