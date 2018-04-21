@extends('layouts.app')

@section('header')
    <h1>Add User to Role</h1>
@endsection

@section('content')
{!! Form::open(['action' => 'OrganisationsController@store','method'=>'POST']) !!}
<div class="form-group">
                {{Form::label('organisation_id','Organisation of Affiliation:')}}
                {{ Form::select('organisation_id', $organisations, null, ['class' => 'form-control']) }}
            </div>
            
            <div class="form-group">
                {{Form::label('organisation_id','Organisation of Affiliation:')}}
                {{ Form::select('organisation_id', $organisations, null, ['class' => 'form-control']) }}
            </div>
            <div>
            {{Form::submit('submit',['class'=>'btn btn-success'])}}
            </div>
{!! Form::close() !!}
@endsection