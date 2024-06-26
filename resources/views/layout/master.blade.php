<!doctype html>
<html lang="fr">

<head>
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/livres.css') !!}
</head>

<body class="body">
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#navbar-collapse-target">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar+ bvn"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Gestion des livres</a>
                @if  (Session::get('id') > 0)
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/listerLivres')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister</a></li>
                        <li><a href="{{url('/ajouterLivres')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Ajouter</a></li>
                    </ul>
                @endif
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-target">
                <ul class="nav navbar-nav navbar-right">
                    @if (Session::get('id') == 0)
                        <li><a href="{{url('/getLogin')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Se connecter</a></li>
                    @endif
                    @if (Session::get('id') > 0)
                        <li><a href="{{url('/getLogout')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Se déconnecter</a></li>
                    @endif
                </ul>
            </div>
        </div><!--/.container-fluid -->
    </nav>
</div>
<div class="container">
    @yield('content')
</div>
{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap.js') !!}

</body>

</html>
