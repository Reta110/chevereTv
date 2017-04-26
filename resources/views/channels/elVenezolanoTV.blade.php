@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-12 text-center center-block">
            <img src="{{asset('images/elVenezolanoTV.jpg')}}">
        </div>
        @include('partials.facebookShare')
    </div>

    <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/hwmhtPK7mPY" frameborder="0"
                allowfullscreen></iframe>
        </iframe>
    </div>

@endsection