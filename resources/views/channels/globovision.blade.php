@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-12 text-center center-block">
            <img src="{{asset('images/globovision.jpg')}}">
        </div>
        @include('partials.facebookShare')
    </div>

    <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NBC0poj2kMk" frameborder="0"
                allowfullscreen></iframe>
    </div>
@endsection