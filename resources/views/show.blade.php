@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Trooper details</h2>

                <br>

                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('collection') }}"> Back</a>
                </div>
                <br>

                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="name">
                                    <strong>YOOOOOOO:</strong>
                                    {{ $trooper->name }}
                                </div>
                                <br>
                                <div class="faction">
                                    <strong>Faction:</strong>
                                    {{ $trooper->faction }}
                                </div>
                                <br>
                                <div class="era">
                                    <strong>Era:</strong>
                                    {{ $trooper->era }}
                                </div>
                                <br>
                                <div class="rank">
                                    <strong>Rank:</strong>
                                    {{ $trooper->rank }}
                                </div>
                                <br>
                                <div class="legion">
                                    <strong>Legion:</strong>
                                    {{ $trooper->legion }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
