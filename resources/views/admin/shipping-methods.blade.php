@extends('admin.admin')

@section('left-column')
    @include('admin.admin-left-column')
@stop

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="display-3">Siuntimo metodai</h3>
        </div>
    </div>

    <div class="shipping-methods-list">
        @include('admin.shipping-methods-load')
    </div>
@stop