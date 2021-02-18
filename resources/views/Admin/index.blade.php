@extends('layouts.base')

@section('content')
    <div class="cantainer mx-5">
    @if (count($cantacts)>0)
        <div class="text-center mx-5  mt-2">
            <h1>{{count($cantacts)}} Messages</h1>
        </div>
        <div class="row">
        <div class="col-10 mt-2 mx-5">
            @foreach ($cantacts as $cantact)
                @include('partials._item', $cantact)
            @endforeach
        </div>
        </div>
    @endif
    <div>
@endsection