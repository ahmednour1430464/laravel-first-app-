<div class="container">
    <div class="row justify-content-between">
        @foreach ($courses as $course)
            <div class="col-md-4 px-2 my-2">
                <div class="card">
                    <div class="card-header ">
                        <div class="row col-md-12 justify-content-between">
                            <label for="">
                                <h5>{{ $course->title }}</h5>
                            </label>
                            <a id="dropdownMenuOffset" data-toggle="dropdown" data-offset="-110,20">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                <a class="dropdown-item"
                                    href="{{ route('course.edit', $course->id) }}">{{ __('Edit') }}</a>
                                <a class="dropdown-item"
                                    href="{{ route('course.delete', $course->id) }}">{{ __('Delete') }}</a>
                                <a class="dropdown-item"
                                    href="{{ route('course.show', $course->id) }}">{{ __('Show') }}</a>
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

<style>
    #dropdownMenuOffset {
        cursor: pointer;
        position: absolute;
        top: 8px;
        right: 16px;
    }

</style>
