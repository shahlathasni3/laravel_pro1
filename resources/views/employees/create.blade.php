@extends('master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 aling='center'>Add Data</h3>
        <form method="post" action="{{url('employees}}">
            <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="first_name">
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="last_name">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </form>

    </div>
</div>
@endsection