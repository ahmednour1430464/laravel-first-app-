@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 style="text-align: center">{{ __('Created Courses') }}</h2>
        </div>
    </div>
    @include('teacher_dashboard.coursesDisplay')

    <div class="container">
        <div class="fab-container">
            <div class="fab fab-icon-holder">
                <i class="fas fa-question"></i>
            </div>
            <ul class="fab-options">
                <li>
                    <span class="fab-label">{{ __('Create a Course') }}</span>
                    <div class="fab-icon-holder">
                        <a href="{{(route('teacher_dashboard.create'))}}"><i class="fas fa-file-alt"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
@endsection