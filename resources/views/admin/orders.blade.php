@extends('admin.admin')

@section('left-column')
    @include('admin.admin-left-column')
@stop

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="display-3">Pirkiniai</h3>
        </div>
    </div>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-4 col-lg-offset-1">
            <form name="search" method="POST" action="{{ route('order.search') }}">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Search by ID">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" id="nav-search-user-btn">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="orders-list">
        @include('admin.orders-load')
    </div>
@stop