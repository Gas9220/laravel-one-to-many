@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="d-flex align-items-center">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-sm me-2">Back</a>
            <h2 class="fs-4 text-secondary my-4">Create Project</h2>
        </div>

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="project-form">
            @csrf

            <div class="mb-3">
                <label for="project_name" class="form-label">Project name</label>
                <input type="text" class="form-control" id="project_name" name="project_name">
            </div>
            <div class="mb-3">
                <label for="client" class="form-label">Client</label>
                <input type="text" class="form-control" id="client" name="client">
            </div>
            <div class="mb-3">
                <label for="project_summary" class="form-label">Project Summary</label>
                <input type="text" class="form-control" id="project_summary" name="project_summary">
            </div>
            <div class="mb-3">
                <label for="project_image" class="form-label">Project Image</label>
                <input class="form-control" type="file" id="project_image" name="project_image">
            </div>
            <div class="mb-4">
                <label for="revenues" class="form-label">Revenues</label>
                <input type="numeric" class="form-control" id="revenues" name="revenues">
            </div>
            <div class="mb-3">
                <label class="form-label" for="start_date">Start date</label>
                <input type="date" id="start_date" name="start_date">

                <label class="form-label ms-3" for="end_date">End date</label>
                <input type="date" id="end_date" name="end_date">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="is_completed">Project completed</label>
                <input class="form-check-input" type="checkbox" id="is_completed" name="is_completed" value="1">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
        </form>
    </div>
@endsection
