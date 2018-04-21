@extends('layouts.app')

@section('header')
    <h1>View All Organisations</h1>
@endsection

@section('content')
<a class="btn btn-primary" href="/organisations/create" role="button">Add an Organisation</a>
<div class="container">        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Organisation Name</th>
        <th>Cell Number</th>
        <th>Email</th>
        <th>Physical Address</th>
        <th>Province</th>
        <th>District</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    @if(count($organisations)>0)
        @foreach($organisations as $organisation)
            <tbody>
            <tr>
                <td>{{$organisation->name}}</td>
                <td>{{$organisation->cellnumber}}</td>
                <td>{{$organisation->emailaddress}}</td>
                <td>{{$organisation->physicaladdress}}</td>
                <td>{{$organisation->province}}</td>
                <td>{{$organisation->district}}</td>
                <td><button type="button" class="btn btn-primary">Edit</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            
            </tbody>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
  </table>
</div>
@endsection