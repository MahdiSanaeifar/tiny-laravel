@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>edit post</h2>
            </div>
            <div class="pull-right">
                <a href="" class="btn btn-primary">back</a>
            </div>
        </div>
    </div>


    <form action="" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>
                        title:
                    </strong>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>
                        writer:
                    </strong>
                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>
                        title:
                    </strong>
                    <input type="text" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button class="btn btn-success">submit</button>
            </div>
        </div>
    </form>
@endsection
