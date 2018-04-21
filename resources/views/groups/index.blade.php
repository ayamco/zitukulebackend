@extends('layouts.app')

@section('header')
    <h1>View All Groups</h1>
@endsection

@section('content')
<a class="btn btn-primary" href="/groups/create" role="button">Add a Group</a>
<div class="container">        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Group Name</th>
        <th>Province</th>
        <th>District</th>
        <th>Date Formed</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    @if(count($groups)>0)
        @foreach($groups as $group)
            <tbody>
            <tr>
                <td>{{$group->name}}</td>
                <td>{{$group->province}}</td>
                <td>{{$group->district}}</td>
                <td>{{$group->dateformed}}</td>
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