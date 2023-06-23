@extends('admin.layouts.template')
@section('content')
@section('title','add Category')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Category</h1>

<form action="{{route('categories.update',$category->id)}} " method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label>Title</label>
        <input type="text" class="form-control @error('title') is-valid @enderror" name="title" placeholder="Title" value="{{old('title')}}">
        @error('title')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Image</label>
        <input type="file" class="form-control @error('image')is-invalid @enderror" placeholder="image" name="image">
        <img src="{{ asset('uploads/'.$category->image) }}" width="80" alt="">
        @error('image')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
    </div>

    <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save </button>
</form>

@stop

