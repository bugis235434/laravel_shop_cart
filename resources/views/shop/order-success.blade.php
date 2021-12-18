

@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{route('shop')}}" class="btn btn-primary">Gryžti i parduotuve</a>
        <a href="{{route('orders')}}" class="btn btn-primary">Gryžti i užsakymus</a>
    </div>
</div>
@stop