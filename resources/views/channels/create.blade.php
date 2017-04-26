@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Channel</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'channels.store','files' => 'true', 'class' => 'form', 'method' => 'POST', 'id' => 'form']) !!}
                        @include('channels.partials.fields')
                        <div class="for text-center">
                            {!! Form::submit('Registrar', ['class'=> 'btn btn-primary']) !!}
                            <a class="btn btn-danger" href="{{ route('channels.index')}}">
                                Cancelar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection