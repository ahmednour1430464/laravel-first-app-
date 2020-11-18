@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 style="text-align: center">New Course</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{(route('teacher_dashboard.store'))}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="info" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="info" class="form-control" name="info" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>

                            <div class="col-md-6">
                                <input id="duration" type="number" class="form-control" name="duration" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
