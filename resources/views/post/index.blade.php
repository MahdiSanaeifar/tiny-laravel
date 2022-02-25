@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>all posts</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('post.create') }}" class="btn btn-success">new post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <td>id</td>
            <td>title</td>
            <td>writer</td>
            <td>started_at</td>
            <td>setting</td>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['user_id'] }}</td>
                <td>{{ $post['started_at'] }}</td>
                <td>
                    <form action="" method="post">
                        <a class="btn btn-info" href="{{ route('post.show', $post->id) }}">show</a>
                        <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">edit</a>
                        <a class="btn btn-danger" type="submit">delete</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
