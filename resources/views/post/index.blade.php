@extends('layouts.master')
@section('content')
    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>all posts</h2>
        </div>
        <div class="pull-right">
            <a href="" class="btn btn-success">new post</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <td>id</td>
        <td>title</td>
        <td>content</td>
    </tr>
    <tr>
        <form action="" method="post">
            <a href="btn btn-info">show</a>
            <a href="btn btn-primary">edit</a>
            <a href="btn btn-danger" type="submit">delete</a>
        </form>
    </tr>
</table>
@endsection