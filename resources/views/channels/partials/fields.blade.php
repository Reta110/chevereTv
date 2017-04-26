<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                @include('partials.errors')
                <h3 class="box-title">Nuevo Canal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <!--Contenido-->
                        <div class="col-md-8 col-md-offset-2">
                            <div class="box box-primary">
                                <div class="form-group">
                                    {!! Form::label('name', 'Nombre') !!}
                                    {!! Form::text('name',  null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required'])!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('image', 'Imagen') !!}
                                    {!! Form::file('image', ['class' => 'form-control']) !!}                                </div>
                                <div class="form-group">
                                    {!! Form::label('name', 'Video') !!}
                                    {!! Form::text('video',  null, ['class' => 'form-control', 'placeholder' => 'Video', 'required'])!!}
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>