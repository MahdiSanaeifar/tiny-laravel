@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>show post</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('post.index')}}" class="btn btn-primary">back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>متن: <?=$post->title?></strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نویسند: <?=$post->name?></strong>
            </div>
        </div>
    </div>
@endsection
