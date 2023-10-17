@extends('layout.master')
@section('content')

    <div class="container">
        <div class="blanc">
            <h1>Liste de mes Livres</h1>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Genre</th>
            </tr>
            </thead>
            @foreach($mesLivres as $unLiv)
                <tr>
                    <td>{{$unLiv->id}}</td>
                    <td>{{$unLiv->titre}}</td>
                    <td>{{$unLiv->auteur}}</td>
                    <td>{{$unLiv->genre}}</td>
                    <td style="text-align: center">
                        <a href="{{url('/modifierLivres')}}/{{$unLiv->id}}">
                            <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top"
                                  title="Modifier"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            <br><br>
        </table>
    </div>
