@extends('result.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Show Results</h3><a class="btn btn-xs btn primary" href="{{ route('result.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <strong>Title :</strong>
                {{ $gamedetail->title }}
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <strong>body :</strong>
                {{ $gamedetail->body }}
            </div>
        </div>
    </div>