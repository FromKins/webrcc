@extends('layouts.app')

@section('title', 'Edit Data Home')

@section('content')

<div class="container">
    <a href="/admin/slider" class="btn btn-primary mb-3">Back</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{$slider->title}}">
                </div>
                @error('title')
                <small style="color: red;">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Publish</label>
                    <textarea name="publish" id="" cols="5" class="form-control"
                        placeholder="Publish">{{$slider->publish}}</textarea>
                </div>
                @error('publish')
                <small style="color: red;">{{$message}}</small>
                @enderror

                <img src="/image/{{$slider->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color: red;">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Link Jurnal</label>
                    <input type="url" class="form-control" name="link" placeholder="https://example.com/journal"
                        value="{{ $slider->link }}">
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