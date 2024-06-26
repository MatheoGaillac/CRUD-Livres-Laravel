@extends('layout.master')
@section('content')
    {!! Form::open(['url' => 'postLivres']) !!}
    <div class="col-md-12 col-sm-12 well well-md">
        <center>
            <h1></h1>
        </center>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Titre : </label>
                <div class="col-md-2 col-sm-2">
                    {{ Form::text('titre', null, array_merge(['class' => 'form-control','required' => ''])) }}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Auteur : </label>
                <div class="col-md-2 col-sm-2">
                    {{ Form::text('auteur', null, array_merge(['class' => 'form-control','required' => ''])) }}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Genre : </label>
                <div class="col-md-2 col-sm-2">
                    {{ Form::text('genre', null, array_merge(['class' => 'form-control','required' => ''])) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-default btn-primary">
                        <span class="glyphicon glyphicon-ok"></span> Valider
                    </button>
                    <button type="button" class="btn btn-default btn-primary"
                            onclick="javascript:if(confirm('Vous êtes sûr ?')) windom.location = '{{ url('/') }}';">
                        <span class="glyphicon glyphicon-remove"></span> Annuler</button>
                </div>
            </div>
            @include('vues.error')
        </div>
    </div>
