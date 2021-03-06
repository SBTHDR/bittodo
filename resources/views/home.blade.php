@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-body">
                    <p>Upload your profile picture</p>
                    <x-alert/>
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
