@extends('layouts.main')

@section('content')



    <h4>
        <p>
        Ce site est réservé aux élèves de l'école Plein-Soleil. Il permet aux jeunes de louer des raquettes pour profiter des plaisirs de l'hiver.
        </p>
        <p>
            Le coût de la location est de $5.00 et tu pourras les utiliser pendant une semaine.
        </p>
    </h4>
 <br>


   <h3>Conditions pour la réservation</h3>
   <ul class="list-group list-group-flush">
       <li class="list-group-item">Être un parent d'élève de l'école Plein-Soleil</li>
       <li class="list-group-item">Réserver un minimum de trois jours d'avance</li>
       <li class="list-group-item">Respecter la date de retour</li>
       <li class="list-group-item">Être en mesure de venir chercher les raquettes avant la fermeture de l'école</li>
       <li class="list-group-item">Être en mesure de venir porter les raquettes avant la fermeture de l'école</li>
       <li class="list-group-item">Inscription avec courriel valide obligatoire</li>
   </ul>


@endsection

@section('sidebar')

@include('auth.login')

@include('auth.register')
@endsection
