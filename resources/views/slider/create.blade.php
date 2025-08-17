@extends('layouts.app')

@section('title', 'Add Data Home')

@section('content')

<div class="container">
    <a href="/admin/slider" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                @error('title')
                <small style="color: red;">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Publish</label>
                    <textarea name="publish" id="" cols="5" class="form-control" placeholder="Publish"></textarea>
                </div>
                @error('publish')
                <small style="color: red;">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color: red;">{{$message}}</small>
                @enderror


                <div class="form-group">
                    <label for="">Link Jurnal</label>
                    <input type="url" class="form-control" name="link" placeholder="https://example.com/journal">
                </div>
                @error('link')
                <small style="color: red;">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection