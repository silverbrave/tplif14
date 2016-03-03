@extends('welcome')
@section('content')

    <a href="{{url("/actualites")}}" ><button type="button" class="btn-lg btn-default">Les Actus</button></a>
    <div class="btn-group btn-group-lg" role="group" style="display: inline-block">
        <style>
            button{
                width:150px;
                heigth:150px;
            }
            #lienF{
                color:black;
            }
            #lienF:hover{
                text-decoration:none;
            }
        </style>

        <a href="http://tomusss.univ-lyon1.fr/" target="_blank"><button type="button" class="btn-lg btn-default">TOMUSS</button></a>
        <a href="https://accesbv.univ-lyon1.fr/owa/#path=/mail" target="_blank"><button type="button" class="btn-lg btn-default">MAILS</button></a>
        <a href="http://www.univ-lyon1.fr/campus/plan-des-campus/campus-lyontech-la-doua-731724.kjsp?RH=1406271986424#.VtgjP-bHqrI" target="_blank"><button type="button" class="btn-lg btn-default">MAP</button></a>
    </div>
    <p>->Le <a href ="{{url("/")}}" id ="lienF">lien</a> disponible quelque part</p>
@stop