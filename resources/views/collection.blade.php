@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Troopers</h1>

        <form action="{{ url('/collection') }}" method="GET" accept-charset="UTF-8" id="tag-filler">
            <div class="row g-3 mb-2">
                <div class="col col-auto d-table">
                    <strong class="d-table-cell align-middle">Tags:</strong>
                </div>

            </div>
        </form>



    </div>
@endsection
