@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">
                        <div class="row col-md-12 justify-content-between">
                            <label for="">
                                <h2>{{ __('Course Details') }}</h2>
                            </label>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Title : {{ $course->title }}</p>
                        <p>Decription : {{ $course->info }}</p>
                        <p>Duration : {{ $course->duration.'h' }}</p>
                        <p>Created at : {{ $course->created_at }}</p>
                        <p>last update : {{ $course->updated_at }}</p>
                    </div>
                    <div class="card-header ">
                        <div class="row col-md-12 justify-content-between">
                            <label for="">
                                <h2>{{ __('feedbacks') }}</h2>
                            </label>
                        </div>
                    </div>
                    @foreach ($course->feedbacks as $feedback)
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-1-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ $feedback->title}}</h3>
                                            <p class="card-text">{{$feedback->user->name}}</p>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{{ $feedback->body }}</p>
                                            <p class="card-text">{{ $feedback->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
