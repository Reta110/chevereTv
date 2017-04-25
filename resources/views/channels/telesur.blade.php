@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.sideMenu')
            <div class="col-sm-9 col-md-9">

                <img src="{{asset('images/telesur.jpg')}}" class="pull-right">
                <p class="text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qblI12gT_20" frameborder="0"
                            allowfullscreen></iframe>
                </p>
                {{---  ?rel=0&autoplay=1--}}
                <div class="well">
                </div>
            </div>
        </div>
    </div>
@endsection