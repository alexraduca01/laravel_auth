@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects Create</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" name='title' id='title' required maxlength="200" minlength="3">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="url" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" name='image' id='image'>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 gap-2 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Invia</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </section>
@endsection