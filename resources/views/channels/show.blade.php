@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <br><br>
            <h1>{{$channel->name}}</h1>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{asset('images').'/'.$channel->image}}">
        </div>
        @include('partials.facebookShare')
    </div>

    <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="{{$channel->video}}?rel=0&autoplay={{env('YOUTUBE_AUTOPLAY')}}" frameborder="0"
                allowfullscreen class="embed-responsive-item"></iframe>
    </div>

@endsection