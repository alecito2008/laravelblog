<div class="row form-search">
    {!! Form::open(['method' => 'GET', 'role' => 'form']) !!}
            <div class="col-md-12">
            <div class="input-group">
            {!! Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
            </div>
            </div>
    {!! Form::close() !!}
</div>
