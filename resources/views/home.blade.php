@extends('layouts.app')

@section('content')

@if ($locations->count() > 1)
<h3>Vos réservations</h3>
@else
<h3>Votre réservation</h3>
@endif

<table class="table table-striped">
	<tr>
		<th>Date de la réservation</th>
		<th>Date du retour</th>
		<th>Type de raquette</th>
		<th>Équipement retourné</th>
    </tr>
@foreach($locations as $location)


@if ($location->return == 0)

	<tr>
        <td width="20%">{{$location->pickup_date->format('d-m-Y')}}</td>
        @if($location->return_date->format('d-m-Y') <= date('d-m-Y'))
        <td width="20%" style="color:red">{{$location->return_date->format('d-m-Y')}}</td>
        @else
        <td width="20%">{{$location->return_date->format('d-m-Y')}}</td>
        @endif
		<td width="45%">{{$location->item->item_name}}</td>
		<td width="15%">
            @if ($location->return == 0)
             Non
           @else
               Oui
           @endif
        </td>
	</tr>

@endif

@endforeach
</table>
<hr>

@endsection

@section('sidebar')
<h3>Mon enfant</h3>
<hr>

@if(!$students)
<h4>Vous devez inscrire votre enfant</h4>

@else
@foreach ($students as $student)

{{$student->name}} <br>
{{$student->phone_number}}<br>
{{$student->group}}
@endforeach
@endif


@endsection
