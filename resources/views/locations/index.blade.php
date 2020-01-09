@extends('layouts.app')

@section('content')

@include('locations.create',["items" => $items])
@stop

@section('sidebar')

<h2>Mes réservations</h2>

<table class="table table-stripped">
   @foreach ($locations as $location)
   @if($location->return == 0)
<tr>
    <th style="width:45%">Type de raquette</th>
    <td style="width:55%">{{$location->item->item_name}}</td>
    <td></td>
</tr>
<tr>

</tr>
<tr>
    <th style="width:45%">Nombre</th>
    <td style="width:55%">{{$location->quantity}}</td>
    <td></td>
</tr>
<tr>
    <th style="width:45%">Retour prévu</th>
    <td style="width:55%">{{$location->return_date->format('d/m/Y')}}</td>
    <td></td>
</tr>
<tr>
    <th style="width:70%"> Annuler la réservation </th>
        <td style="width:15%">
    {{ Form::open(['method' => 'DELETE', 'route' => ['location_delete', $location->id]]) }}
    {{ Form::submit('Annuler', ['class' => 'btn btn-danger btn-sm']) }}
    {{ Form::close() }}
    </td>
    <td style="width:15%">
       <a href="{{'route'('location_edit',$location->id)}}">
        <button type="button" class="btn btn-primary btn-sm">
            Modifier
          </button>
       </a>
    </td>

</a>




</tr>
@endif
@endforeach
</table>




@stop

