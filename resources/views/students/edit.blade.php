@extends('layouts.app')

@section('content')
<h3>Inscription de mon enfant</h3>
<hr>
{!!Form::model($student,['route'=>["student_update",$student->id],'method'=>'post'],['class'=>'form-horizontal'])!!}
 @method('PUT')
		<div class="form-group row">
            {!! Form::label('name', "Nom de votre enfant") !!}
            {!! Form::text('name', $student->name, ['class' => 'form-control','placeholder'=>'Prénom Nom']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('phone_number', "Numéro de téléphone") !!}
            {!! Form::tel('phone_number', $student->phone_number, ['class' => 'form-control ssn']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('group', "Groupe de votre enfant") !!}
            {!! Form::text('group', $student->group, ['class' => 'form-control']) !!}
        </div>
		
		<div class="form-group">
			{!!Form::submit('Modifier la fiche de votre enfant',['class'=>'btn btn-primary'])!!}
		</div>
       
	

{{Form::close()}}

@endsection

@section('sidebar')

@endsection