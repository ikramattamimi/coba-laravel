@extends('layouts.main')

@section('container')
    <h1>Create Post</h1>

        <form action="{{ url('posts/'.$model->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="{{ $model->title }}">
            </div>
            <br>
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea name="excerpt" class="form-control" id="excerpt" placeholder="Enter Excerpt" rows="3">{{ $model->excerpt }}</textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" id="body" rows="10" placeholder="Enter Body">{{ $model->body }}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-info">Simpan</button>
        </form>
    
@endsection