@extends('layouts.app')

@section('header')
    <h1>Add Group</h1>
@endsection

@section('content')
{!! Form::open(['action' => 'GroupsController@store','method'=>'POST']) !!}
            <div>
                {{Form::label('name','Name of Group:')}}
                {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name of Group'])}}
            </div>
    <br/>
            <div>
                {{Form::label('province','Province:')}}
                {{Form::text('province','',['class'=>'form-control','placeholder'=>'Province'])}}
            </div>
            <br/>
            <div>
                {{Form::label('district','District:')}}
                {{Form::text('district','',['class'=>'form-control','placeholder'=>'District'])}}
            </div>
            <br/>
            <div class="form-group">
                {{Form::label('organisation_id','Organisation of Affiliation:')}}
                {{ Form::select('organisation_id', $organisations, null, ['class' => 'form-control']) }}
            </div>
            <div>
            {{Form::submit('submit',['class'=>'btn btn-success'])}}
            </div>
{!! Form::close() !!}
@endsection