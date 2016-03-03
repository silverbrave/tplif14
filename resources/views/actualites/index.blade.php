@extends('welcome')
@section('content')
    <h1>Actualités</h1>
    <p><a class="btn btn-primary" href="{{ route('actualites.create') }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Ajouter une activité</a></p>


    @foreach($actus as $actu)
    <div>
        <h2>{{$actu->titre}}</h2>
        <p>
            {{$actu->description}}
        </p>
    </div>
    @endforeach
@stop