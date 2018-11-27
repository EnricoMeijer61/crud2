<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Title :</strong>
            {!! Form::text('title', null, ['placeholder' =>'title', 'class' => 'form-control'] ) !!}
        </div>
    </div>
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Body :</strong>
            {!! Form::textarea('body', null, ['placeholder' =>'body', 'class' => 'form-control','style' =>'height:150px'] ) !!}
        </div>
    </div>
    <div class="col-xs-12">
        <a class="btn btn-xs btn-succes" href="{{ route('result.index') }}">Back</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
    </div>
</div>