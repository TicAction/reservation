@extends('layouts.app')
@section('content')
<h3>Location de raquette</h3>
<hr>

     {{Form::model($location,['route'=>["location_update",$location->id]],['class'=>'form-horizontal'])}}
     @method('PUT')
<div class="row">

     <div class="form-group col-md-8">
            {!! Form::label('item_id', "Type de raquette") !!}
            {!! Form::select('item_id', [
                $items
                ],null, ['class' => 'form-control']) !!}

        </div>
            <div class="form-group col-md-4">
            {!! Form::label('quantity', "Quantité désiré") !!}
            {!! Form::select('quantity', [
            		'1'=>'1',
            		'2'=>'2',
            		'3'=>'3',
            		'4'=>'4',
            		'5'=>'5',
            		'6'=>'6',
            	],$location->quantity, ['class' => 'form-control']) !!}
            </div>

</div>


<div class="row">
     <div class="form-group col-md-6">
            {!! Form::label('pickup_date', "Pour quand") !!}
            {!! Form::date('pickup_date', $location->pickup_date, ['class' => 'form-control']) !!}
            </div>
             <div class="form-group col-md-6">
            {!! Form::label('return_date', "Date du retour ( 7 jours  maximum )") !!}
            {!! Form::date('return_date', $location->return_date, ['class' => 'form-control']) !!}
            </div>
</div>


		<div class="form-group">
			{{Form::submit('Enregistrer votre réservation',['class'=>'btn btn-primary  btn-block'])}}
		</div>



{{Form::close()}}


@stop




