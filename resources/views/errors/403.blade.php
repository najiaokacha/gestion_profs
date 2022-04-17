@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center alert alert-danger">
            <h2>Cette page est non autoriser</h2>
            <a href="{{url('professeurs')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection