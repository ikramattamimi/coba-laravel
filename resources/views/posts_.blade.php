@extends('layouts.main')

@section('container')
    <table class='table-bordered table'>
        <br/>
        <a href="{{ url('posts/create') }}" class="btn btn-primary">Tambah</a>
        <tr>
            <th class="col-2 text-center">Judul</th>
            <th class="col-3 text-center">Excerpt</th>
            <th class="col-7 text-center">Body</th>
            <th class="col text-center">Aksi</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->excerpt }}</td>
            <td>{!! $post->body !!}</td>
            <td>
                <a href="{{ url('posts/'.$post->id.'/edit') }}" class="btn btn-warning text-light">Edit</a></td>
                <td>
                <form action="{{ url('posts/'.$post->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
