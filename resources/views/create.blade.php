@extends('layouts.main')

@section('container')
    <h1>Create Post</h1>

    <form action="{{ url('posts') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
        </div>
        <br>
        <div class="form-group">
            <label for="excerpt">Excerpt</label>
            <textarea name="excerpt" class="form-control" id="excerpt" placeholder="Enter Excerpt" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="10" placeholder="Enter Body"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
@endsection
