<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    
    <h3 style="text-align: center">Bonjour <span>{{$firstname}}</span>,</h3>

    <p>Votre inscription a été prise en compte. Nous vous souhaitons la bienvenue dans notre équipe !</p>

    <p>Vos informations sont les suivantes :</p>
    <p>Nom, prénom : {{$name.' '.$firstname}}</p>
    <p>Fonction : {{$function}}</p>
    <p>Votre description : {{$description}}</p>

    <p>Adresse e-mail : {{$email}}</p>
    {{-- <p>Mot de passe : {{$password}}</p> --}}

    <p>Votre photo: </p><img src="{{asset('storage/img/'.$url)}}" alt="" height="50px">

    <p>À bientôt !</p> <br>
    <p>L'équipe Labs</p>
</body>
</html>