@extends('welcome')
@section('content')
    <style>

        body{
            font-family:"Comic Sans MS" ;
        }
    </style>
    <div>
        <h1>Ajout d'une actualité</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong><br>Hay un problema con los campos del formulario !<br><br>

            </div>
        @endif
        {!!Form::open(['url' => route('actualites.store'),'method'=>'POST']) !!}
        <div class="form-group">
            {!!Form::label('label', 'Titre ') !!}
            {!!Form::text('titre', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('label', 'Description') !!}
            {!!Form::textarea('description', 'Votre description ici', ['class' => 'form-control','size' =>'30x5' ]) !!}
        </div>

        {!! Form::reset('Effacer',['class'=>'btn btn-success']) !!}
        <a href="#" ><button class="btn btn-danger" onclick=fct1()>Ajouter la nouvelle artualité à la liste des articles</button></a>
        {!! Form::close() !!}
    </div>

    <script type="text/javascript">
        function fct1(){
            confirm('Etes-vous sûr de vouloir ajouter cet article?');
            confirm('Etes-vous certain de vouloir ajouter cet article?');
        }
    </script>

@stop