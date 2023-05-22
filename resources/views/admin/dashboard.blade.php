@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-primary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white fw-bold">Projects Area</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="text-center">
                            Projects Details
                        </h4>
                        <div>Project count: {{ $totalProjects }}</div>
                        <div>Last creation: {{ $lastCreation->project_name }} - {{$lastCreation->created_at}}</div>
                        <div>Last edit: {{ $lastEdit->project_name }} - {{$lastEdit->created_at}}</div>
                        <div>Revenues: {{ $totalRevenues }}€</div>
                    </div>
                    <div class="card-header bg-primary">
                        <a href="{{ Route('admin.projects.index') }}"
                            class="text-decoration-none d-flex align-items-center text-white fw-bold">
                            Go to projects list
                            <i class="ms-2 bi bi-arrow-right-circle-fill fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
