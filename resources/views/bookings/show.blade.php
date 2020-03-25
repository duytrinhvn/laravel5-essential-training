@extends('layouts.app')

@section('content')
    <dl>
        @foreach($booking->getAttributes() as $name => $value)
            <dt>{{$name}}</dt>
            <dd>{{$value}}</dd>
        @endforeach
    </dl>
@endsection