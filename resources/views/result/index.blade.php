@extends('result.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>test</h3>
        </div>
    </div>
    <div class="row">
        <div class="col=sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-succes" href="{{ route('result.create') }}">create new result</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
        <div class="alert alert-succes">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>nr</th>
            <th>title</th>
            <th>body</th>
            <th width="300px">Actions</th>
        </tr>
        @foreach ($gamedetails as $gamedetail)
            <tr>
                <td>{{++$i}}</td>
                <td>{{ $gamedetail->title }}</td>
                <td>{{ $gamedetail->body }}</td>
                <td>
                    <a class="btn btn-xs btn info" href="{{ route('result.show', $gamedetail->id) }}">Show</a>
                    <a class="btn btn-xs btn primary" href="{{ route('result.edit', $gamedetail->id) }}">Edit</a>

                    {!! !Form::open(['method'=> 'DELETE', 'route'=>['result.destroy', $gamedetail->id],'style'=> 'display:inline']) !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger' ]) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $gamedetails->links() !!}
@endsection
