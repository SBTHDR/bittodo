@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <p>Upload your profile picture</p>
                    @include('layouts.flash')
                    <hr>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="btn btn-light" type="file" name="image">
                        <input class="float-right btn btn-primary" type="submit" value="Upload" name="upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
