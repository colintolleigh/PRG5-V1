@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Troopers</h1>
        <br>

        <form action="{{ url('/collection') }}" method="GET" accept-charset="UTF-8" id="tag-filler">
            <div class="row g-3 mb-2">
                <div class="col col-auto d-table">
                    <strong class="d-table-cell align-middle">Tags:</strong>
                </div>
            </div>
        </form>
        <br>
        <br>

        <div class="row row-cols-1 row-cols-md-3 g-3">
            @foreach($troopers as $trooper)
                <div class="col-mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>
                                    {{ $trooper->name }}
                                </h4>
                            </div>
                            <div class="col">
                                <a href="/troopers/{{ $trooper->id }}" class="btn btn-primary">
                                    See trooper details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
