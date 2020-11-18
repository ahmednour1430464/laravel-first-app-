@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 style="text-align: center;">{{ __('Edit Course') }}</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('course.update', $course->id) }}" method="POST" role="form"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="{{ $course->title }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                        <div class="col-md-6">
                            <textarea id="info" class="form-control" name="info"
                                required>{{ $course->info }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>
                        <div class="col-md-6">
                            <input id="duration" type="number" class="form-control" name="duration" value="{{ $course->duration }}"
                                required>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4 ">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
