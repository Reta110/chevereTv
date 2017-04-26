@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-12 text-center center-block">
            <img src="{{asset('images/ntn24.jpg')}}">
        </div>
        @include('partials.facebookShare')
    </div>

    <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/eG36bf1A3Vc?rel=0&autoplay={{env('YOUTUBE_AUTOPLAY')}}" frameborder="0"
                allowfullscreen class="embed-responsive-item"></iframe>
    </div>

@endsection