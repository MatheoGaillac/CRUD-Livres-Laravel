@extends('layout.master')
@section('content')
    <div>
        <br><br>
        <br><br>
        <div class="well">
            {!! Form::open(array('route' => array ('postmodifierLivre' , $unLivre->id),'method'=>'post')) !!}
            <div class="col-md-12 col-sm-12 well well-md">
                <center><h1></h1></center>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 control-label">Titre : </label>
                        <div class="col-md-2 col-sm-2">
                            <input type="text" name="titre" value="{{$unLivre->titre ?? ''}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 control-label">Auteur : </label>
                        <div class="col-md-2 col-sm-2">
                            <input type="text" name="auteur" value="{{$unLivre->auteur ?? ''}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-3 control-label">Genre : </label>
                        <div class="col-md-2 col-sm-2">
                            <input type="text" name="genre" value="{{$unLivre->genre ?? ''}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <button type="submit" class="btn btn-default btn-primary">
                                <span class="glyphicon glyphicon-ok"></span>Valider
                            </button>
                            &nbsp;
                            <button type="button" class="btn btn-default btn-primary"
                                    onclick="javascript:if(confirm('vous êtes sûr ?'))
                                        window.location='{{url('/')}}';">
                                <span class="glyphicon glyphicon-remove"></span>Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
