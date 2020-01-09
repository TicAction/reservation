@extends('layouts.app')

@section('content')
<h3>Inscription de mon enfant</h3>
<hr>
{{Form::open(['route'=>"student_store",'method'=>'post'],['class'=>'form-horizontal'])}}

		<div class="form-group row">
            {!! Form::label('name', "Nom de votre enfant") !!}
            {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Prénom Nom']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('phone_number', "Numéro de téléphone") !!}
            {!! Form::tel('phone_number', null, ['class' => 'form-control ssn']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('group', "Groupe de votre enfant") !!}
            {!! Form::text('group', null, ['class' => 'form-control']) !!}
        </div>
		
		<div class="form-group">
			{{Form::submit('Enregistrer votre enfant',['class'=>'btn btn-primary'])}}
		</div>
       
	

{{Form::close()}}

@endsection

@section('sidebar')

@endsection