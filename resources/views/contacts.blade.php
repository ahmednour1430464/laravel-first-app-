@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-header">
                    <legend class="text-center">Contact us</legend>
                </div>
                <div class="card-body ">
                    <!-- Name input-->
                    <form class="form-horizontal" action="#" method="post">
                        <div class="form-group">
                            <label  for="name">Name</label>
                            <div >
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label for="email">Your E-mail</label>
                            <div >
                                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                            <label  for="message">Your message</label>
                            <div >
                                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div >
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection