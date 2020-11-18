@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $course->title }}</div>
            <div class="card-body">

                {{ $course->info }}
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="card">
            <div class="card-header">Give us Your Feedback</div>
            <div class="card-body">
                <form action="{{ route('feedback.insert') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Feedback Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" required>
                        </div>
                        <input type="hidden" name='course_id' value="{{ $course->id }}">
                    </div>
                    <div class="form-group row">
                        <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Feedback Content') }}</label>

                        <div class="col-md-6">
                            <textarea id="body" type="text" class="form-control" name="body" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4 ">
                            <button type="submit" class="btn btn-outline-primary">
                                {{ __('Submit Feedback') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
