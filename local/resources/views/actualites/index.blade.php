<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>11301169-PALABOST/11306449-PARIS </title>

    <!-- Bootstrap Core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color:rgba(206,206,206,0.4);
            padding-top: 70px;
            font-family: "Harrington";
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
        .titi{
            width: 20px;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			 <a class="navbar-brand" href="{{ url('/actualites')}}">Actualités</a>
           
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
               <li><a href="{{url("/")}}">11301169-PALABOST/11306449-PARIS</a></li>
             <li><a href="{{url('/aPropos')}}">A propos</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<!-- Page Content -->
<div class="container">

    <h1>Actualités</h1>
    <p><a class="btn btn-primary" href="{{ route('actualites.create') }}"><img src="{{url(asset("croix.png"))}}" class="glyphicon glyphicon-align-left titi"> Ajouter une activité</a>
        <a class="btn btn-primary" href="javascript:totot()"> Revenir à l'accueil</a></p>
    <script type="text/javascript">
        function totot(){
            setTimeout(function(){
                document.location.href = "{{ url("/")}}";
            },2500);

        }
    </script>

    @foreach($actus as $actu)
        <div>
            <h2>{{$actu->titre}}</h2>
            <p>
                {{$actu->description}}
            </p>
        </div>
    @endforeach
</div>
<!-- /.container -->

<!-- jQuery Version 1.11.1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   
<!-- Bootstrap Core JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.js"></script>
</body>

</html>
