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
            .toto{
                margin-left: -20px;
                border-left: none;
                border-bottom-left-radius: 0;
                border-top-left-radius: 0;
            }
            .toto1:hover{
                background-color: white;
            }
            .toto:hover{
                background-color: white;
            }

        </style>

        <a href="http://tomusss.univ-lyon1.fr/" target="_blank"><button type="button" class="btn-lg btn-default">TOMUSS</button></a>
        <a href="https://accesbv.univ-lyon1.fr/owa/#path=/mail" target="_blank"><button type="button" class="btn-lg btn-default toto1">MAILS</button></a>
        <a href="http://www.univ-lyon1.fr/campus/plan-des-campus/campus-lyontech-la-doua-731724.kjsp?RH=1406271986424#.VtgjP-bHqrI" target="_blank"><button type="button" class="btn-lg btn-default toto">MAP</button></a>
    </div>
    <p>Cette application vous permet de consulter vos  <a href ="http://tomusss.univ-lyon1.fr/" id ="lienF"  target="_blank">notes</a></p>
@stop