@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-6">
                <br><br>
            <h1>Capitolio TV</h1>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{asset('images/capitolio.jpg')}}">
        </div>
        @include('partials.facebookShare')
    </div>

    <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ucFeDoLr_Jo" frameborder="0"
                allowfullscreen class="embed-responsive-item"></iframe>
    </div>

@endsection