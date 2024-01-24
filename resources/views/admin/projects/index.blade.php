@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
      <h2>List Projects:</h2>

      <div class="text-end">
        <a class="btn btn-warning" href="{{ route('admin.projects.create') }}">Create a new Project</a>
      </div>

      @if (count($projects) > 0)
         <table class="table table-striped mt-5">

          <thead>

            <tr>
              <th scope="col">id</th>
              <th scope="col">Title</th>
              <th scope="col">Data</th>
              <th scope="col">Actions</th>
            </tr>

          </thead>

          <tbody>

            @foreach ($projects as $project)
              <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->created_at }}</td>
                <td>
                  <a class="btn btn-success" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Details</a>
                </td>
              </tr>  
            @endforeach
            
          
          </tbody>

        </table> 
      @else
      <div class="alert alert-warning mt-5">
        <h2 class="text-center">You haven't entered any projects yet, click the button to add one</h2>
      </div>
          
      @endif
      
    </div>
@endsection