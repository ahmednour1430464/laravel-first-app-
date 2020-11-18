@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header ">
                        <div class="row col-md-12 justify-content-between">
                            <label for="">
                                <h2>{{ __('Profile') }}</h2>
                            </label>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="fab-container">
                            <div class="fab fab-icon-holder">
                                <i class="fas fa-question"></i>
                            </div>
                            <ul class="fab-options">
                                <li>
                                    <span class="fab-label">{{ __('Edit Profile') }}</span>
                                    <div class="fab-icon-holder">
                                        <a href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i></a>
                                    </div>

                                </li>
                                <li>
                                    <span class="fab-label">{{ __('Delete Account') }}</span>
                                    <div class="fab-icon-holder">
                                        <a href="{{ route('profile') }}" onclick="event.preventDefault();
                                                                    document.getElementById('delete-form').submit();">
                                            <i class="fas fa-user-alt-slash"></i></i>
                                        </a>
                                        <form id="delete-form" action="{{ route('profile.delete', $user->id) }}"
                                            method="POST" class="d-none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <img src="{{ $user->avatar }}">
                        <p>Name : {{ $user->name }}</p>
                        <p>Email : {{ $user->email }}</p>
                        <p>Role : {{ $user->role }}</p>
                        <p>Created at : {{ $user->created_at }}</p>
                        <p>last update : {{ $user->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

