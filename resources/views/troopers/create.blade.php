@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="pull-left">
                    <h2>Add New Trooper</h2>
                </div>
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('troopers.index') }}"> Back</a>
                </div>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Oh, oh!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('troopers.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name"
                                       type="text"
                                       name="name"
                                       class="form-control"
                                       placeholder="Name"
                                       value="{{old('name')}}" />
                                @error('name')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="faction" class="form-label">Faction</label>
                                <input id="faction"
                                       type="text"
                                       name="faction"
                                       class="form-control"
                                       placeholder="Faction"
                                       value="{{old('faction')}}" />
                                @error('faction')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="era" class="form-label">Era</label>
                                <input id="era"
                                       type="number"
                                       name="era"
                                       class="form-control"
                                       placeholder="Era"
                                       value="{{old('era')}}" />
                                @error('era')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="rank" class="form-label">Rank</label>
                                <input id="rank"
                                       type="number"
                                       name="rank"
                                       class="form-control"
                                       placeholder="Rank"
                                       value="{{old('rank')}}" />
                                @error('rank')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="legion" class="form-label">Legion</label>
                                <input id="legion"
                                       type="number"
                                       name="legion"
                                       class="form-control"
                                       placeholder="Legion"
                                       value="{{old('legion')}}" />
                                @error('legion')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input id="image"
                                       type="text"
                                       name="image"
                                       class="form-control"
                                       placeholder="Image"
                                       value="{{old('image')}}" />
                                @error('image')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
