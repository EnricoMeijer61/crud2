@extends ('result.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Edit result</h3>
            </div>
        </div>
    </div>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>error</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($gamedetail, ['method'=>'PATCH','route'=>['result.update', $gamedetail->id]])!!}
    @include('result.form')
    {!! Form::close() !!}
@endsection