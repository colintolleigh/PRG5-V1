@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Profile</h2>

        <p>Here you can edit your profile</p>

        <form action="{{ url('/profile/') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PUT">
            <input name="_token" type="hidden" value="{{csrf_token()}}">

            <div class="row row-cols-1 row-cols-md-2 g-3 mb-4">
                <div class="col">
                    <div class="mb-3">
                            <label for="name">Name</label>
                            <span class="alert-danger"></span>
                            <input id="name"
                                   type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{old('name')}}"/>
                            @error('name')
                            <span>{{$message}}</span>
                            @enderror
                    </div>
                    <div class="mb-3">
                            <label for="email" >E-mail</label>
                            <span class="alert-danger"></span>
                            <input id="email"
                                   type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{old('email')}}" />
                            @error('email')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                </div>
            </div>
        </form>

    </div>



@endsection
