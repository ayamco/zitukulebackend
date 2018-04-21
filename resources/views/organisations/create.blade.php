@extends('layouts.app')

@section('header')
    <h1>Add Organisation</h1>
@endsection

@section('content')
{!! Form::open(['action' => 'OrganisationsController@store','method'=>'POST']) !!}
            <div>
                {{Form::label('name','Name of Organisation:')}}
                {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name of Organisation'])}}
            </div>
    <br/>
            <div>
                {{Form::label('cellnumber','Cell Number:')}}
                {{Form::text('cellnumber','',['class'=>'form-control','placeholder'=>'Cell Number'])}}
            </div>
            <br/>
            <div>
                {{Form::label('emailaddress','Email Address:')}}
                {{Form::text('emailaddress','',['class'=>'form-control','placeholder'=>'Email Address'])}}
            </div>
            <br/>
            <div>
                {{Form::label('physicaladdress','Physical Address:')}}
                {{Form::text('physicaladdress','',['class'=>'form-control','placeholder'=>'Physical Address'])}}
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
                {{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
            </div>
            <div>
            {{Form::submit('submit',['class'=>'btn btn-success'])}}
            </div>
{!! Form::close() !!}
@endsection