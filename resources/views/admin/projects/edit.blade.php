@extends('layouts.admin')

@section('content')

  <div class="container-mt-5">
    <h2 class="text-center">Edit Page</h2>

    <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
      @csrf
      @method('PUT')
      
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" name="content" id="content" rows="3">{{ $project->content }}</textarea>
      </div>

      <button class="btn btn-warning" type="submit">Modify</button>
    </form>
  </div>

@endsection