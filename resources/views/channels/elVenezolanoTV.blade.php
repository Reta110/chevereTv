@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.sideMenu')
            <div class="col-sm-9 col-md-9">

                <img src="{{asset('images/elVenezolanoTV.jpg')}}" class="pull-right">
                <p class="text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hwmhtPK7mPY" frameborder="0"
                            allowfullscreen></iframe>
                    </iframe>
                </p>
                {{---  ?rel=0&autoplay=1--}}
                <div class="well">
                </div>
            </div>
        </div>
    </div>
@endsection