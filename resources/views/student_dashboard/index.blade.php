@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card my-2">
            <h1 class="card-header" style="text-align: center;">Enrolled Courses</h1>
        </div>
        <div class="container">
            <div class="row justify-content-between">

                @foreach ($enrolled_courses as $course)
                    <div class="col-md-4 px-2 my-2">
                        <div class="card">
                            <div class="card-header">

                                <div class="row col-md-12 justify-content-between">
                                    <label for="">
                                        <h5>{{ $course->title }}</h5>
                                    </label>
                                    <a id="dropdownMenuOffset" data-toggle="dropdown" data-offset="-110,20">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                        <a class="dropdown-item"
                                            href="{{ route('course.show', $course->id) }}">{{ __('Show') }}</a>
                                        <a class="dropdown-item" href="{{ route('feedback.give', $course->id) }}">
                                            {{ __('Feedback') }}
                                        </a>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>{{ $course->info }}</p>
                                <p>{{ $course->duration . 'h' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="card my-2">
            <h1 class="card-header " style="text-align: center;">All Courses</h1>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                @foreach ($courses as $course)
                    <div class="col-md-4 px-2 my-2">
                        <div class="card">
                            <div class="card-header">
                                <div class="row col-md-12 justify-content-between">
                                    <label for="">
                                        <h5>{{ $course->title }}</h5>
                                    </label>
                                    <a id="dropdownMenuOffset" data-toggle="dropdown" data-offset="-110,20">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                        <a class="dropdown-item"
                                            href="{{ route('course.show', $course->id) }}">{{ __('Show') }}</a>
                                        <a class="dropdown-item" href="{{ route('student_dashboard.enroll', $course->id) }}">
                                            
                                            {{ __('Enroll') }}
                                        </a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>{{ $course->info }}</p>
                                <p>{{ $course->duration . 'h' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        #dropdownMenuOffset {
            cursor: pointer;
            position: absolute;
            top: 8px;
            right: 16px;
        }

    </style>
@endsection
