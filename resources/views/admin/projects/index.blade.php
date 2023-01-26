@extends('layouts.admin')

@section('content')
    <h1>Progetti</h1>    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Cliente</th>
            <th scope="col">placeholder</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->client}}</td>
            </tr>
            @endforeach
          
        </tbody>
      </table>
@endsection